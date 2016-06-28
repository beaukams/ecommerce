<?php

namespace Ecom\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProduitController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcomProduitBundle:Produit:index.html.twig', array('name' => $name));
    }
}