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

        if (0 === strpos($pathinfo, '/platforme')) {
            // oc_platforme_home
            if ($pathinfo === '/platforme/index') {
                return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::indexAction',  '_route' => 'oc_platforme_home',);
            }

            if (0 === strpos($pathinfo, '/platforme/edit')) {
                // oc_platforme_edit
                if (preg_match('#^/platforme/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platforme_edit')), array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::editAction',));
                }

                // oc_platforme_editsalle
                if (0 === strpos($pathinfo, '/platforme/editsalle') && preg_match('#^/platforme/editsalle/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platforme_editsalle')), array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::editsalleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/platforme/delete')) {
                // oc_platforme_delete
                if (preg_match('#^/platforme/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platforme_delete')), array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::deleteAction',));
                }

                // oc_platforme_deletesalle
                if (0 === strpos($pathinfo, '/platforme/deletesalle') && preg_match('#^/platforme/deletesalle/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platforme_deletesalle')), array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::deletesalleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/platforme/ping')) {
                // oc_platforme_ping
                if ($pathinfo === '/platforme/ping') {
                    return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::pingAction',  '_route' => 'oc_platforme_ping',);
                }

                // oc_platforme_ping2
                if ($pathinfo === '/platforme/ping2') {
                    return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::ping2Action',  '_route' => 'oc_platforme_ping2',);
                }

            }

            // oc_platforme_view
            if ($pathinfo === '/platforme/view') {
                return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::viewAction',  '_route' => 'oc_platforme_view',);
            }

            if (0 === strpos($pathinfo, '/platforme/a')) {
                if (0 === strpos($pathinfo, '/platforme/add')) {
                    // oc_platforme_add
                    if ($pathinfo === '/platforme/add') {
                        return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::addAction',  '_route' => 'oc_platforme_add',);
                    }

                    // oc_platforme_addsalle
                    if ($pathinfo === '/platforme/addsalle') {
                        return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::addsalleAction',  '_route' => 'oc_platforme_addsalle',);
                    }

                }

                // oc_platforme_affichage
                if ($pathinfo === '/platforme/affichage') {
                    return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::affichageAction',  '_route' => 'oc_platforme_affichage',);
                }

            }

            if (0 === strpos($pathinfo, '/platforme/modif')) {
                // oc_platforme_modifmachine
                if ($pathinfo === '/platforme/modifmachine') {
                    return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::modifmachineAction',  '_route' => 'oc_platforme_modifmachine',);
                }

                // oc_platforme_modifsalle
                if ($pathinfo === '/platforme/modifsalle') {
                    return array (  '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::modifsalleAction',  '_route' => 'oc_platforme_modifsalle',);
                }

            }

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
