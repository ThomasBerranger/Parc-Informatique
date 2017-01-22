<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platforme/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_editsalle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::editsalleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platforme/editsalle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platforme/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_deletesalle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::deletesalleAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platforme/deletesalle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_ping' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::pingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/ping',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_ping2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::ping2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/ping2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_view' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_addsalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::addsalleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/addsalle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_affichage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::affichageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/affichage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_modifmachine' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::modifmachineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/modifmachine',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_platforme_modifsalle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformeBundle\\Controller\\AdvertController::modifsalleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platforme/modifsalle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
