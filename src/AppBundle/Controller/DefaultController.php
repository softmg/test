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
        $pages = $this->get('doctrine.orm.default_entity_manager')
            ->getRepository('AppBundle:Page')
            ->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'pages' => $pages
        ]);
    }

    /**
     * @Route("/page/{id}", name="show_page")
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showPageAction($id)
    {
        $page = $this->get('doctrine.orm.default_entity_manager')
            ->getRepository('AppBundle:Page')
            ->find($id);

        return $this->render('default/page.html.twig', [
            'page' => $page
        ]);
    }
}
