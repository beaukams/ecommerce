<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/hotel')) {
            // d_hotel_homepage
            if (rtrim($pathinfo, '/') === '/hotel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'd_hotel_homepage');
                }

                return array (  '_controller' => 'Ecommerce\\DHotelBundle\\Controller\\DHotelController::indexAction',  '_route' => 'd_hotel_homepage',);
            }

            // ajoutehotel
            if ($pathinfo === '/hotel/ajoute') {
                return array (  '_controller' => 'Ecommerce\\DHotelBundle\\Controller\\DHotelController::ajouteHotelAction',  '_route' => 'ajoutehotel',);
            }

            // modifiehotel
            if (0 === strpos($pathinfo, '/hotel/modifie') && preg_match('#^/hotel/modifie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifiehotel')), array (  '_controller' => 'Ecommerce\\DHotelBundle\\Controller\\DHotelController::modifieHotelAction',));
            }

            // supprimehotel
            if (0 === strpos($pathinfo, '/hotel/supprime') && preg_match('#^/hotel/supprime/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimehotel')), array (  '_controller' => 'Ecommerce\\DHotelBundle\\Controller\\DHotelController::supprimeHotelAction',));
            }

            // listehotel
            if ($pathinfo === '/hotel/liste') {
                return array (  '_controller' => 'Ecommerce\\DHotelBundle\\Controller\\DHotelController::listeHotelAction',  '_route' => 'listehotel',);
            }

            // voirhotel
            if (0 === strpos($pathinfo, '/hotel/voir') && preg_match('#^/hotel/voir/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'voirhotel')), array (  '_controller' => 'Ecommerce\\DHotelBundle\\Controller\\DHotelController::voirHotelAction',));
            }

        }

        if (0 === strpos($pathinfo, '/boutique')) {
            // ecommerce_boutique_homepage
            if (rtrim($pathinfo, '/') === '/boutique') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ecommerce_boutique_homepage');
                }

                return array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ecommerce_boutique_homepage',);
            }

            if (0 === strpos($pathinfo, '/boutique/produit')) {
                // ajouteProduit
                if ($pathinfo === '/boutique/produit/ajoute') {
                    return array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\ProduitController::ajouteProduitAction',  '_route' => 'ajouteProduit',);
                }

                // modifieProduit
                if (0 === strpos($pathinfo, '/boutique/produit/modifie') && preg_match('#^/boutique/produit/modifie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifieProduit')), array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\ProduitController::modifieProduitAction',));
                }

                // supprimeProduit
                if (0 === strpos($pathinfo, '/boutique/produit/supprime') && preg_match('#^/boutique/produit/supprime/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimeProduit')), array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\ProduitController::supprimeProduitAction',));
                }

                // voirProduit
                if (0 === strpos($pathinfo, '/boutique/produit/voir') && preg_match('#^/boutique/produit/voir/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'voirProduit')), array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\ProduitController::voirProduitAction',));
                }

                if (0 === strpos($pathinfo, '/boutique/produit/liste')) {
                    // listeProduit
                    if (preg_match('#^/boutique/produit/liste/(?P<type_produit>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeProduit')), array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\ProduitController::listeProduitAction',));
                    }

                    // listeAllProduit
                    if ($pathinfo === '/boutique/produit/liste') {
                        return array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\ProduitController::listeAllProduitAction',  '_route' => 'listeAllProduit',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/boutique/commande')) {
                // ajouteCommande
                if ($pathinfo === '/boutique/commande/ajoute') {
                    return array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\CommandeController::ajouteCommandeAction',  '_route' => 'ajouteCommande',);
                }

                // modifieCommande
                if (0 === strpos($pathinfo, '/boutique/commande/modifie') && preg_match('#^/boutique/commande/modifie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifieCommande')), array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\CommandeController::modifieCommandeAction',));
                }

                // supprimeCommande
                if (0 === strpos($pathinfo, '/boutique/commande/supprime') && preg_match('#^/boutique/commande/supprime/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimeCommande')), array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\CommandeController::supprimeCommandeAction',));
                }

                // voirCommande
                if (0 === strpos($pathinfo, '/boutique/commande/voir') && preg_match('#^/boutique/commande/voir/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'voirCommande')), array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\CommandeController::voirCommandeAction',));
                }

            }

            // listeCommande
            if ($pathinfo === '/boutique/Commande/liste') {
                return array (  '_controller' => 'Ecommerce\\BoutiqueBundle\\Controller\\CommandeController::listeCommandeAction',  '_route' => 'listeCommande',);
            }

        }

        if (0 === strpos($pathinfo, '/restaurant')) {
            // ecommerce_restaurant_homepage
            if (rtrim($pathinfo, '/') === '/restaurant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ecommerce_restaurant_homepage');
                }

                return array (  '_controller' => 'Ecommerce\\RestaurantBundle\\Controller\\RestaurantController::indexAction',  '_route' => 'ecommerce_restaurant_homepage',);
            }

            // ajouteRestaurant
            if ($pathinfo === '/restaurant/ajoute') {
                return array (  '_controller' => 'Ecommerce\\RestaurantBundle\\Controller\\RestaurantController::ajouteAction',  '_route' => 'ajouteRestaurant',);
            }

            // modifieRestaurant
            if (0 === strpos($pathinfo, '/restaurant/modifie') && preg_match('#^/restaurant/modifie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifieRestaurant')), array (  '_controller' => 'Ecommerce\\RestaurantBundle\\Controller\\RestaurantController::modifieAction',));
            }

            // supprimeRestaurant
            if (0 === strpos($pathinfo, '/restaurant/supprime') && preg_match('#^/restaurant/supprime/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimeRestaurant')), array (  '_controller' => 'Ecommerce\\RestaurantBundle\\Controller\\RestaurantController::supprimeAction',));
            }

            // listeRestaurant
            if ($pathinfo === '/restaurant/liste') {
                return array (  '_controller' => 'Ecommerce\\RestaurantBundle\\Controller\\RestaurantController::listeAction',  '_route' => 'listeRestaurant',);
            }

            // voirRestaurant
            if (0 === strpos($pathinfo, '/restaurant/voir') && preg_match('#^/restaurant/voir/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'voirRestaurant')), array (  '_controller' => 'Ecommerce\\RestaurantBundle\\Controller\\RestaurantController::voirAction',));
            }

        }

        // ecommerce_culture_homepage
        if (rtrim($pathinfo, '/') === '/culture') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ecommerce_culture_homepage');
            }

            return array (  '_controller' => 'EcommerceCultureBundle::index',  '_route' => 'ecommerce_culture_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // contactus
        if ($pathinfo === '/contactus') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ContactusAction',  '_route' => 'contactus',);
        }

        // annonces
        if ($pathinfo === '/annonces') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::AnnoncesAction',  '_route' => 'annonces',);
        }

        // casa
        if ($pathinfo === '/casa') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::CasaAction',  '_route' => 'casa',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
