<?php

namespace Ecommerce\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ProduitController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcommerceProduitBundle:Produit:index.html.twig', array('name' => $name));
        
    }

    public function ajouteProduitAction()
    {
        return $this->render('EcommerceProduitBundle:Produit:ajoutProduit.html.twig', array());
        //return new Response("c'est kams");
    }

    public function modifieProduitAction(){
    	
    }

    public function supprimeProduitAction(){

    }
}
