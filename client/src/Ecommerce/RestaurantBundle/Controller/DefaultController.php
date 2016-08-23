<?php

namespace Ecommerce\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use ymfony\Component\HttpFoundation\Session;

//ajouter l'entite Restaurant
use Ecommerce\RestaurantBundle\Entity\Restaurant;

//la form RestaurantType
use Ecommerce\RestaurantBundle\Form\RestaurantType;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('EcommerceRestaurantBundle::index.html.twig');
    }

   
}
