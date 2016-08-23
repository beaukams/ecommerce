<?php

namespace Ecommerce\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ymfony\Component\HttpFoundation\Session;

//ajouter l'entite produit
use Ecommerce\BoutiqueBundle\Entity\Produit;

//la form ProduitType
use Ecommerce\BoutiqueBundle\Form\ProduitType;


class BoutiqueBundle extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EcommerceBoutiqueBundle:index.html.twig');
        
    }

    
    
}
