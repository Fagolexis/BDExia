<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        if (0 === strpos($pathinfo, '/activites')) {
            // listAct
            if ($pathinfo === '/activites') {
                return array (  '_controller' => 'MainBundle\\Controller\\ActivitesController::indexAction',  '_route' => 'listAct',);
            }

            // createtAct
            if ($pathinfo === '/activites/creation') {
                return array (  '_controller' => 'MainBundle\\Controller\\ActivitesController::createAction',  '_route' => 'createtAct',);
            }

            // showAct
            if (preg_match('#^/activites/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showAct')), array (  '_controller' => 'MainBundle\\Controller\\ActivitesController::showAction',));
            }

            // photosAct
            if (preg_match('#^/activites/(?P<id>[^/]++)/photos$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'photosAct')), array (  '_controller' => 'MainBundle\\Controller\\ActivitesController::photosAction',));
            }

            // subAct
            if (preg_match('#^/activites/(?P<id>[^/]++)/inscrits$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subAct')), array (  '_controller' => 'MainBundle\\Controller\\ActivitesController::subsAction',));
            }

            // modAct
            if (preg_match('#^/activites/(?P<id>[^/]++)/modification$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modAct')), array (  '_controller' => 'MainBundle\\Controller\\ActivitesController::modAction',));
            }

        }

        if (0 === strpos($pathinfo, '/boutique')) {
            // boutique
            if ($pathinfo === '/boutique') {
                return array (  '_controller' => 'MainBundle\\Controller\\BoutiqueController::indexAction',  '_route' => 'boutique',);
            }

            // addProd
            if ($pathinfo === '/boutique/creation') {
                return array (  '_controller' => 'MainBundle\\Controller\\BoutiqueController::addAction',  '_route' => 'addProd',);
            }

            // produit
            if (preg_match('#^/boutique/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit')), array (  '_controller' => 'MainBundle\\Controller\\BoutiqueController::showAction',));
            }

            // main_boutique_cart
            if ($pathinfo === '/boutique/panier') {
                return array (  '_controller' => 'MainBundle\\Controller\\BoutiqueController::cartAction',  '_route' => 'main_boutique_cart',);
            }

            // main_boutique_mod
            if (preg_match('#^/boutique/(?P<id>[^/]++)/modification$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_boutique_mod')), array (  '_controller' => 'MainBundle\\Controller\\BoutiqueController::modAction',));
            }

        }

        // Accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Accueil');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\ConnexionController::indexAction',  '_route' => 'Accueil',);
        }

        // cnx
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'MainBundle\\Controller\\ConnexionController::connexionAction',  '_route' => 'cnx',);
        }

        // deco
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'MainBundle\\Controller\\ConnexionController::deconnexionAction',  '_route' => 'deco',);
        }

        if (0 === strpos($pathinfo, '/utilisateurs')) {
            // main_gestion_index
            if ($pathinfo === '/utilisateurs') {
                return array (  '_controller' => 'MainBundle\\Controller\\GestionController::indexAction',  '_route' => 'main_gestion_index',);
            }

            // profil
            if (preg_match('#^/utilisateurs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil')), array (  '_controller' => 'MainBundle\\Controller\\GestionController::showAction',));
            }

        }

        // main_test_indextest
        if ($pathinfo === '/indexTest') {
            return array (  '_controller' => 'MainBundle\\Controller\\TestController::indexTestAction',  '_route' => 'main_test_indextest',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
