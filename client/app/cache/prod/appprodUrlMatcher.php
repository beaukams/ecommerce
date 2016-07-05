<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // ecommerce_hotel_default_index
        if (0 === strpos($pathinfo, '/hotel/hotel') && preg_match('#^/hotel/hotel/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ecommerce\\HotelBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ecommerce_hotel_default_index'));
        }

        if (0 === strpos($pathinfo, '/produit')) {
            // DefaultProduit
            if (rtrim($pathinfo, '/') === '/produit') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'DefaultProduit');
                }
                return array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::indexAction',  '_route' => 'DefaultProduit',);
            }

            // ajouteProduit
            if ($pathinfo === '/produit/ajoute') {
                return array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::ajouteProduitAction',  '_route' => 'ajouteProduit',);
            }

            // modifieProduit
            if (0 === strpos($pathinfo, '/produit/modifie') && preg_match('#^/produit/modifie/(?P<id>\\d+)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::modifieProduitAction',)), array('_route' => 'modifieProduit'));
            }

            // supprimeProduit
            if (0 === strpos($pathinfo, '/produit/supprime') && preg_match('#^/produit/supprime/(?P<id>\\d+)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::supprimeProduitAction',)), array('_route' => 'supprimeProduit'));
            }

            // voirProduit
            if (0 === strpos($pathinfo, '/produit/voir') && preg_match('#^/produit/voir/(?P<id>\\d+)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::voirProduitAction',)), array('_route' => 'voirProduit'));
            }

            // listeProduit
            if ($pathinfo === '/produit/liste') {
                return array (  '_controller' => 'Ecommerce\\ProduitBundle\\Controller\\ProduitController::listeProduitAction',  '_route' => 'listeProduit',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
