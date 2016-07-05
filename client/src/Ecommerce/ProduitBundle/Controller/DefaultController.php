<?php

namespace Ecommerce\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcommerceProduitBundle:Default:index.html.twig', array('name' => $name));
    }
}
