<?php

namespace AssignmentBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use AssignmentBundle\Model\CategoryArticle;
use Jenssegers\Date\Date;

class TestDataController extends FOSRestController
{
    /**
     * @Rest\Get("/test-data")
     */
    public function indexAction()
    {
        $resource = $this->container->getParameter('api');
        $testData = file_get_contents($resource['test_data']);
        $testData = json_decode($testData);
        $items = [];

        if ($testData !== null) {
            foreach($testData as $item){
                // Use norwegian as the date locale
                Date::setLocale('no');

                // Concatenate the date and time
                $dateString = $item->date . ' ' . $item->time;

                // Create a DateTime object from the format of the #dateString
                $dateTime = Date::createFromFormat('j F Y H:i', $dateString);

                // Create an article object based on the item
                $article = new CategoryArticle();
                $article
                    ->setTitle($item->title)
                    ->setLink($item->link)
                    ->setPublishDate($dateTime->format('c'))
                    ->setTimestamp($dateTime->getTimestamp());

                if (isset($item->description)) {
                    $article->setDescription($item->description);
                }

                if (isset($item->category)) {
                    $article->setCategory($item->category);
                }

                // Append the article object as an array to items
                $items[] = $article->toArray();
            }
        }

        // Sort the items based on timestamp with latest item first
        usort($items, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return new JsonResponse($items);
    }
}
