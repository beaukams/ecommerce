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
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/contactus", name="contactus")
     */
    public function ContactusAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contactus.html.twig');
    }

    /**
     * @Route("/annonces", name="annonces")
     */
    public function AnnoncesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('annonces.html.twig');
    }

    /**
     * @Route("/casa", name="casa")
     */
    public function CasaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('casa.html.twig');
    }
}
