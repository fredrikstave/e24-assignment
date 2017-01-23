<?php

namespace AssignmentBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use SimplePie;

class FeedController extends FOSRestController
{
    /**
     * This is the controller for main route for the feed endpoint.
     * 
     * @Rest\Get("/feed")
     */
    public function indexAction()
    {
        $feed = new SimplePie();
        $feed->set_feed_url('http://www.vg.no/rss/feed/forsiden/?frontId=1');
        $feed->enable_cache(false);

        // Initialize the feed
        if ($feed->init()) {
            // Friendlier array representation that we can pass in our JsonResponse object
            $feedArticles = [
                'title' => $feed->get_title(),
                'description' => $feed->get_description(),
                'image' => [
                    'title' => $feed->get_image_title(),
                    'link' => $feed->get_image_link(),
                    'url' => $feed->get_image_url()
                ],
                'articles' => []
            ];

            // Loop through all the feed items building up the articles array
            foreach ($feed->get_items() as $item) {
                $timestamp = strtotime($item->get_date('d-m-Y H:i'));
                $image = $item->get_item_tags('', 'image');

                // Check that the image isn't empty and extract the
                // url (which is stored under the data key)
                if (!empty($image)) {
                    $image = $image[0]['data'];
                } else {
                    $image = null;
                }

                $feedArticles['articles'][] = [
                    'title' => $item->get_title(),
                    'description' => $item->get_description(),
                    'link' => $item->get_link(),
                    'image' => $image,
                    'publishDate' => date('c', $timestamp)
                ];
            }

            return new JsonResponse($feedArticles);
        }

        // If the feed could not be initialized, we return a not found message
        // since the most likely reason is that the resource it unavailable
        $response = new JsonResponse([
            'message' => 'Could not load resource correctly'
        ]);
        $response->setStatusCode(JsonResponse::HTTP_NOT_FOUND);

        return $response;
    }
}
