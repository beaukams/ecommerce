<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('EcomProduitBundle_homepage', new Route('/hello/{name}', array(
    '_controller' => 'EcomProduitBundle:Default:index',
)));

return $collection;
