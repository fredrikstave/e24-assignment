<?php

namespace AppBundle\Controller;

use AppBundle\Models\Article;
use AppBundle\Models\CategoryArticle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/api/varnish-log", name="app_endpoint")
     */
    public function varnishLogAction(Request $request)
    {

        //(visitor)
        //85.164.152.30 - - [23/May/2012:14:01:05 +0200] "GET http://www.vgtv.no/video/img/94949_160px.jpg HTTP/1.1" 200 3889 "http://www.vgtv.no/" "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:12.0) Gecko/20100101 Firefox/12.0"
        
        //178.232.38.87 - - [23/May/2012:14:01:05 +0200] "GET http://static.vg.no/iphone/js/front-min.js?20120509-1 HTTP/1.1" 200 2013 "http://touch.vg.no/" "Mozilla/5.0 (Linux; U; Android 2.3.3; en-no; HTC Nexus One Build/GRI40) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1"
        
        //193.212.51.164 - - [23/May/2012:14:01:05 +0200] "GET http://3.vgc.no/drfront/images/2012/05/23/c=133,53,233,231;w=288;h=286;42453.jpg HTTP/1.1" 304 0 "http://www.vg.no/" "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E; SKALA)"

        $rawLogData = file_get_contents('http://tech.vg.no/intervjuoppgave/varnish.log');
        $pattern = '/^(\S+) (\S+) (\S+) \[([^:]+):(\d+:\d+:\d+) ([^\]]+)\] \"(\S+) (?P<resource>.*?) (\S+)\" (\S+) (\S+) "(?P<host>[^"]*)" "([^"]*)"$/';
        $strings = explode("\n", $rawLogData);
        $aggregatedData = [
            'resources' => [],
            'hosts' => []
        ];

        foreach ($strings as $string) {
            preg_match($pattern, $string, $matches);

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

        array_multisort($aggregatedData['hosts'], SORT_NUMERIC, SORT_DESC);
        array_multisort($aggregatedData['resources'], SORT_NUMERIC, SORT_DESC);

        $data = [
            [
                'title' => 'Top 5 most downloaded',
                'items' => []
            ],
            [
                'title' => 'Top 5 most downloaded',
                'items' => []
            ],
        ];
        $i = 0;

        foreach ($aggregatedData['resources'] as $key => $value) {
            if ($i === 5) {
                break;
            }

            $data[0]['items'][] = [
                'title' => $key,
                'url' => $key,
                'count' => $value
            ];
            $i++;
        }

        $i = 0;

        foreach ($aggregatedData['hosts'] as $key => $value) {
            if ($i === 5) {
                break;
            }

            $data[1]['items'][] = [
                'title' => $key,
                'url' => $key,
                'count' => $value
            ];
            $i++;
        }


        $response = new JsonResponse($data);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,PUT');
        $response->headers->set('Access-Control-Allow-Headers', 'X-Header-One,X-Header-Two');

        return $response;
    }

    /**
     * @Route("/api/vg-nett", name="app_endpoint2")
     */
    public function articlesAction(Request $request)
    {
        $feedData = simplexml_load_file('http://www.vg.no/rss/feed/forsiden/?frontId=1');
        $channel = $feedData->channel;

        $articles = (object) [
            'title' => (string) $channel->title,
            'description' => (string) $channel->description,
            'link' => (string) $channel->link,
            'image' => (object) $channel->image,
            'articles' => []
        ];

        foreach ($channel->item as $item) {
            $article = new Article([
                'title' => (string) $item->title,
                'description' => (string) $item->description,
                'link' => (string) $item->link,
                'image' => (string) $item->image,
                'publishDate' => (string) $item->pubDate,
                'timestamp' => (int) strtotime($item->pubDate)
            ]);

            $articles->articles[] = $article->toArray();
        }

        $response = new JsonResponse($articles);

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,PUT');
        $response->headers->set('Access-Control-Allow-Headers', 'X-Header-One,X-Header-Two');

        return $response;
    }

    /**
     * @Route("/api/test-data", name="app_endpoint3")
     */
    public function testDataAction(Request $request)
    {
        $testData = file_get_contents('http://static.e24.no/testfeed.json');
        $testData = json_decode($testData);
        $articles = [];

        if ($testData !== null) {
            foreach($testData as $testArticle){
                $dateString = sprintf('%s %s', $testArticle->date, $testArticle->time);
                $testArticle->publishDate = \DateTime::createFromFormat('d F Y H:i:s', $dateString);
                $testArticle->timestamp = strtotime($testArticle->publishDate);
                setlocale(LC_ALL, 'nb_NO.utf8');
                date_default_timezone_set('Europe/Oslo');
                //var_dump($dateString);
                //var_dump(date('d F Y H:i', strtotime($dateString)));
                //var_dump(date('d F Y H:i')); die;
                $article = new CategoryArticle((array) $testArticle);

                $articles[] = $article->toArray();
            }
        }

        $response = new JsonResponse([
            'name' => $testData
        ]);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,PUT');
        $response->headers->set('Access-Control-Allow-Headers', 'X-Header-One,X-Header-Two');

        return $response;
    }
}
