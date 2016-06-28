<?php

namespace Ecom\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcomProduitBundle:Default:index.html.twig', array('name' => $name));
    }
}
