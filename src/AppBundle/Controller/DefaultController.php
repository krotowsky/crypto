<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/content.html.twig');
    }

    /**
     * @Route("/custom", name="custom")
     */
    public function customAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/custom.html.twig');
    }
}
