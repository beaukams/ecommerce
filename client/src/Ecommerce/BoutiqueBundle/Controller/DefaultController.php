<?php

namespace Ecommerce\BoutiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceBoutiqueBundle:Default:index.html.twig');
    }
}
