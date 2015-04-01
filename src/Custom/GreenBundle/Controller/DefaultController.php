<?php

namespace Custom\GreenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('CustomGreenBundle:Page')->findAll();
        return $this->render('CustomGreenBundle:Default:index.html.twig', array(
            'pages' => $pages
        ));
    }

    public function displayAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('CustomGreenBundle:Page')->find($id);
        return $this->render('CustomGreenBundle:Default:display.html.twig', array(
            'page' => $page
        ));
    }
}
