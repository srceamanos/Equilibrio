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
        return $this->render('AppBundle:frontend/Home:index.html.twig');
    }

    /**
     * @Route("/servicios/", name="servicios")
     */
    public function serviciosAction(Request $request)
    {
        $repo_servicios = $this->getDoctrine()->getRepository('AppBundle:Servicios');
        return $this->render('AppBundle:default:servicios.html.twig',
            array('servicios' => $servicios));
    }
}
