<?php

namespace AssignmentBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class VarnishLogController extends FOSRestController
{
    /**
     * This is the controller for main route for the varnish log endpoint.
     *
     * @Rest\Get("/varnish-log")
     */
    public function indexAction()
    {
        $rawLogData = file_get_contents('http://tech.vg.no/intervjuoppgave/varnish.log');
        $strings = explode("\n", $rawLogData);

        // Get the aggregated data based on the strings of raw log data
        $aggregatedData = $this->getAggregatedData($strings);

        // Slice the sorted aggregated data to get the top 5 items
        $downloads = array_slice($aggregatedData['resources'], 0, 5);
        $views = array_slice($aggregatedData['hosts'], 0, 5);

        $listData = [
            [
                'title' => 'Top 5 most downloaded',
                'items' => $this->getListItems($downloads, true)
            ],
            [
                'title' => 'Top 5 most viewed',
                'items' => $this->getListItems($views)
            ],
        ];

        return new JsonResponse($listData);
    }

    /**
     * This function builds an associative array containing visited hosts and downloaded files
     * based on an array of strings sorted by count.
     * 
     * @param array $lines is an array of strings to base the return array on
     * 
     * @return array $aggregatedData is a sorted array of vistited host and downloaded files
     */
    private function getAggregatedData(array $lines)
    {
        // Regex pattern to match data in access logs
        $pattern = '/^(\S+) (\S+) (\S+) \[([^:]+):(\d+:\d+:\d+) ([^\]]+)\] \"(\S+) (?P<resource>.*?) (\S+)\" (\S+) (\S+) "(?P<host>[^"]*)" "([^"]*)"$/';
        $aggregatedData = [
            'resources' => [],
            'hosts' => []
        ];
        
        foreach ($lines as $line) {
            // Apply pattern to line to collect matches
            preg_match($pattern, $line, $matches);

            if (isset($matches['resource'])) {
                // Check if the current resource exists in our aggregated data
                // and add it if it's not there
                if (!isset($aggregatedData['resources'][$matches['resource']])) {
                    $aggregatedData['resources'][$matches['resource']] = 0;
                }
                
                // Increment the stored count of the current resource by 1
                $aggregatedData['resources'][$matches['resource']]++;
            }

            if (isset($matches['host'])) {
                // Check if the current host exists in our aggregated data
                // and add it if it's not there
                if (!isset($aggregatedData['hosts'][$matches['host']])) {
                    $aggregatedData['hosts'][$matches['host']] = 0;
                }

                // Increment the stored count of the current host by 1
                $aggregatedData['hosts'][$matches['host']]++;
            }
        }

        // Sort the hosts and resources in descending order
        array_multisort($aggregatedData['hosts'], SORT_NUMERIC, SORT_DESC);
        array_multisort($aggregatedData['resources'], SORT_NUMERIC, SORT_DESC);

        return $aggregatedData;
    }

    /**
     * This function returns an array of list items.
     * 
     * @param $shortTitle is a bool value to decide if we should use short titles
     *
     * @return array $items is an array of data items
     */
    private function getListItems($data, $shortTitle = false)
    {
        $items = [];

        foreach ($data as $filename => $count) {
            $item = [
                'url' => $filename,
                'count' => $count
            ];

            // Since the filename is what we want as the title, 
            // we try using the last word delimited by a / if the $shortTitle is true, 
            // otherwise default to use the regular filename as the title.
            if ($shortTitle) {
                $parts = explode('/', $filename);
                $item['title'] = end($parts);
            } else {
                $item['title'] = $filename;
            }

            $items[] = $item;
        }

        return $items;
    }
}
