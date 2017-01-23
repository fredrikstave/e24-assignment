<?php

namespace AssignmentBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Jenssegers\Date\Date;

class TestDataController extends FOSRestController
{
    /**
     * This is the controller for main route for the test data endpoint.
     *
     * @Rest\Get("/test-data")
     */
    public function indexAction()
    {
        $testData = file_get_contents('http://static.e24.no/testfeed.json');
        $testData = json_decode($testData);
        $items = [];

        if ($testData !== null) {
            foreach($testData as $item) {
                // Use norwegian as the date locale
                Date::setLocale('no');

                // Concatenate the date and time
                $dateString = $item->date . ' ' . $item->time;

                // Create a DateTime object from the format of the #dateString
                $dateTime = Date::createFromFormat('j F Y H:i', $dateString);

                $article = [
                    'title' => $item->title,
                    'link' => $item->link,
                    'publishDate' => $dateTime->format('c'),
                    'timestamp' => $dateTime->getTimestamp()
                ];

                if (isset($item->description)) {
                    $article['description'] = $item->description;
                }

                if (isset($item->category)) {
                    $article['category'] = $item->category;
                }

                $items[] = $article;
            }
        } else {
            $response = new JsonResponse([
                'message' => 'No test data found'
            ]);
            $response->setStatusCode(JsonResponse::HTTP_NOT_FOUND);

            return $response;
        }

        // Sort the items based on timestamp with latest item first
        usort($items, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        return new JsonResponse($items);
    }
}
