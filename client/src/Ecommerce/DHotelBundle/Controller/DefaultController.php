<?php

namespace Ecommerce\DHotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DHotelBundle:Default:index.html.twig');
    }
}
