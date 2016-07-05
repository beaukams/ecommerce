<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'ecommerce_hotel_default_index' => true,
       'DefaultProduit' => true,
       'ajouteProduit' => true,
       'modifieProduit' => true,
       'supprimeProduit' => true,
       'voirProduit' => true,
       'listeProduit' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getecommerce_hotel_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ecommerce\\HotelBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hotel/hotel',  ),));
    }

    private function getDefaultProduitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/produit/',  ),));
    }

    private function getajouteProduitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::ajouteProduitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/produit/ajoute',  ),));
    }

    private function getmodifieProduitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::modifieProduitAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/produit/modifie',  ),));
    }

    private function getsupprimeProduitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::supprimeProduitAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/produit/supprime',  ),));
    }

    private function getvoirProduitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::voirProduitAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/produit/voir',  ),));
    }

    private function getlisteProduitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::listeProduitAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/produit/liste',  ),));
    }
}
