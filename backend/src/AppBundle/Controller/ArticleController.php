<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends Controller
{
    /**
     * @Route("/api/demo", name="articles_route")
     */
    public function indexAction(Request $request)
    {
        $rawFeed = simplexml_load_file('http://www.vg.no/rss/feed/forsiden/?frontId=1');
        
        return new JsonResponse([
            'message' => 'Dette er en test'
        ]);
    }

    private function parseArticleFeed($feed)
    {
        $articles = [];

        foreach ($feed as $key => $value) {

        }
    }
}
