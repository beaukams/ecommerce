<?php

namespace Ecommerce\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Route("/hotel/{name}", name="hotels")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}
