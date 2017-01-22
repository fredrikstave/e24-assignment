<?php

namespace AssignmentBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use AssignmentBundle\Model\Article;

class FeedController extends FOSRestController
{
    /**
     * @Rest\Get("/feed")
     */
    public function indexAction()
    {
        $feed = null;
        $response = null;

        try {
            // Check to see if the resource is available
            $resource = $this->container->getParameter('api');
            $feed = simplexml_load_file($resource['vg_nett_feed']);
        } catch(\Exception $exception) {
            // If we encounter a problem (likely due to the resource not existing)
            // we return an empty response
            $response = new JsonResponse([
                'message' => 'The resource could not be loaded'
            ]);
            $response->setStatusCode(JsonResponse::HTTP_NOT_FOUND);
        }

        if (isset($feed->channel) && is_object($feed->channel)) {
            $articles = (array) $this->parseArticles($feed->channel);

            usort($articles['articles'], function($a, $b) {
                return $b['timestamp'] - $a['timestamp'];
            });

            $response = new JsonResponse($articles);
            $response->setStatusCode(JsonResponse::HTTP_OK);
        } else {
            $response = new JsonResponse([
                'message' => 'The resource could not be parsed'
            ]);
            $response->setStatusCode(JsonResponse::HTTP_NOT_FOUND);
        }

        return $response;
    }

    private function parseArticles($channel)
    {
        $articles = (object) [
            'title' => (string) $channel->title,
            'description' => (string) $channel->description,
            'link' => (string) $channel->link,
            'image' => (object) $channel->image,
            'articles' => []
        ];

        foreach ($channel->item as $item) {
            $article = new Article();
            $article
                ->setTitle($item->title)
                ->setDescription($item->description)
                ->setLink($item->link)
                ->setImage($item->image)
                ->setPublishDate(date('c', strtotime($item->pubDate)))
                ->setTimestamp(strtotime($item->pubDate));

            $articles->articles[] = $article->toArray();
        }

        return $articles;
    }
}
