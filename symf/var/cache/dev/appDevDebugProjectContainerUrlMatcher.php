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

        // webservice_homepage
        if (rtrim($pathinfo, '/') === '/api') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'webservice_homepage');
            }

            return array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::listDeplacementsRestAction',  '_route' => 'webservice_homepage',);
        }

        // front_office_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_office_homepage');
            }

            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_office_homepage',);
        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::profilAction',  '_route' => 'profil',);
        }

        // nouveauTrajet
        if ($pathinfo === '/nouveau-trajet') {
            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DefaultController::nouveauTrajetAction',  '_route' => 'nouveauTrajet',);
        }

        if (0 === strpos($pathinfo, '/admindep')) {
            if (0 === strpos($pathinfo, '/admindep/deplacement')) {
                // deplacement_index
                if (rtrim($pathinfo, '/') === '/admindep/deplacement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_deplacement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'deplacement_index');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::indexAction',  '_route' => 'deplacement_index',);
                }
                not_deplacement_index:

                // deplacement_show
                if (preg_match('#^/admindep/deplacement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_deplacement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deplacement_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::showAction',));
                }
                not_deplacement_show:

                // deplacement_new
                if ($pathinfo === '/admindep/deplacement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_deplacement_new;
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::newAction',  '_route' => 'deplacement_new',);
                }
                not_deplacement_new:

                // deplacement_edit
                if (preg_match('#^/admindep/deplacement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_deplacement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deplacement_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::editAction',));
                }
                not_deplacement_edit:

                // deplacement_delete
                if (preg_match('#^/admindep/deplacement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_deplacement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deplacement_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementController::deleteAction',));
                }
                not_deplacement_delete:

            }

            // back_office_homepage
            if (rtrim($pathinfo, '/') === '/admindep') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_office_homepage');
                }

                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
            }

            if (0 === strpos($pathinfo, '/admindep/s')) {
                if (0 === strpos($pathinfo, '/admindep/service')) {
                    // service_index
                    if (rtrim($pathinfo, '/') === '/admindep/service') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_service_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'service_index');
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service_index',);
                    }
                    not_service_index:

                    // service_show
                    if (preg_match('#^/admindep/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_service_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::showAction',));
                    }
                    not_service_show:

                    // service_new
                    if ($pathinfo === '/admindep/service/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_service_new;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
                    }
                    not_service_new:

                    // service_edit
                    if (preg_match('#^/admindep/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_service_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::editAction',));
                    }
                    not_service_edit:

                    // service_delete
                    if (preg_match('#^/admindep/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_service_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'service_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ServiceController::deleteAction',));
                    }
                    not_service_delete:

                }

                if (0 === strpos($pathinfo, '/admindep/societe')) {
                    // societe_index
                    if (rtrim($pathinfo, '/') === '/admindep/societe') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_societe_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'societe_index');
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::indexAction',  '_route' => 'societe_index',);
                    }
                    not_societe_index:

                    // societe_show
                    if (preg_match('#^/admindep/societe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_societe_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'societe_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::showAction',));
                    }
                    not_societe_show:

                    // societe_new
                    if ($pathinfo === '/admindep/societe/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_societe_new;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::newAction',  '_route' => 'societe_new',);
                    }
                    not_societe_new:

                    // societe_edit
                    if (preg_match('#^/admindep/societe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_societe_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'societe_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::editAction',));
                    }
                    not_societe_edit:

                    // societe_delete
                    if (preg_match('#^/admindep/societe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_societe_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'societe_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SocieteController::deleteAction',));
                    }
                    not_societe_delete:

                }

            }

        }

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}