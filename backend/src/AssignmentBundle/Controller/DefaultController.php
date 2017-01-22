<?php

namespace AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default_route")
     */
    public function indexAction()
    {
        return $this->render('AssignmentBundle:Default:index.html.twig');
    }
}
