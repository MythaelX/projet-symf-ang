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

        if (0 === strpos($pathinfo, '/api')) {
            // webservice_listAll
            if (rtrim($pathinfo, '/') === '/api') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'webservice_listAll');
                }

                return array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::listDeplacementsRestAction',  '_route' => 'webservice_listAll',);
            }

            // webservice_listAllForOneUser
            if (preg_match('#^/api/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'webservice_listAllForOneUser')), array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::listDeplacementsForOneUserRestAction',));
            }

            if (0 === strpos($pathinfo, '/api/get')) {
                // webservice_getUser
                if (0 === strpos($pathinfo, '/api/getuser') && preg_match('#^/api/getuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'webservice_getUser')), array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::getUserRestAction',));
                }

                // webservice_getDeplacementDetails
                if (0 === strpos($pathinfo, '/api/getdeplacementdetails') && preg_match('#^/api/getdeplacementdetails/(?P<userId>[^/]++)/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'webservice_getDeplacementDetails')), array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::getDeplacementDetailsRestAction',));
                }

                // webservice_getTypeDeplacement
                if (rtrim($pathinfo, '/') === '/api/getTypeDeplacement') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'webservice_getTypeDeplacement');
                    }

                    return array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::getTypeDeplacementRestAction',  '_route' => 'webservice_getTypeDeplacement',);
                }

            }

            if (0 === strpos($pathinfo, '/api/setDeplacement')) {
                // webservice_setDeplacement
                if (preg_match('#^/api/setDeplacement/(?P<month>[^/]++)/(?P<year>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'webservice_setDeplacement')), array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::saveDeplacementRestAction',));
                }

                // webservice_setDeplacementJour
                if (0 === strpos($pathinfo, '/api/setDeplacementJour') && preg_match('#^/api/setDeplacementJour/(?P<nbKm>[^/]++)/(?P<montant>[^/]++)/(?P<jour>[^/]++)/(?P<idType>[^/]++)/(?P<idDeplacement>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'webservice_setDeplacementJour')), array (  '_controller' => 'webserviceBundle\\Controller\\DefaultController::saveDeplacementJourRestAction',));
                }

            }

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

        // f_deplacement_show
        if (preg_match('#^/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_f_deplacement_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'f_deplacement_show')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\DeplacementController::showAction',));
        }
        not_f_deplacement_show:

        // f_deplacement_new
        if ($pathinfo === '/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_f_deplacement_new;
            }

            return array (  '_controller' => 'FrontOfficeBundle\\Controller\\DeplacementController::newAction',  '_route' => 'f_deplacement_new',);
        }
        not_f_deplacement_new:

        // f_deplacementjour_show
        if (preg_match('#^/(?P<id>[^/]++)/showDeplacement$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_f_deplacementjour_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'f_deplacementjour_show')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\DeplacementJourController::showAction',));
        }
        not_f_deplacementjour_show:

        // f_deplacementjour_new
        if (preg_match('#^/(?P<id>[^/]++)/newDeplacement$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_f_deplacementjour_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'f_deplacementjour_new')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\DeplacementJourController::newAction',));
        }
        not_f_deplacementjour_new:

        // f_deplacementjour_edit
        if (preg_match('#^/(?P<id>[^/]++)/editDeplacement$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_f_deplacementjour_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'f_deplacementjour_edit')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\DeplacementJourController::editAction',));
        }
        not_f_deplacementjour_edit:

        // f_deplacementjour_delete
        if (preg_match('#^/(?P<id>[^/]++)/deleteDeplacement$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_f_deplacementjour_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'f_deplacementjour_delete')), array (  '_controller' => 'FrontOfficeBundle\\Controller\\DeplacementJourController::deleteAction',));
        }
        not_f_deplacementjour_delete:

        if (0 === strpos($pathinfo, '/admindep')) {
            // back_office_homepage
            if (rtrim($pathinfo, '/') === '/admindep') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_office_homepage');
                }

                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
            }

            if (0 === strpos($pathinfo, '/admindep/s')) {
                // back_office_statistique
                if ($pathinfo === '/admindep/statistique') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::statistiqueAction',  '_route' => 'back_office_statistique',);
                }

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

            if (0 === strpos($pathinfo, '/admindep/deplacement')) {
                if (0 === strpos($pathinfo, '/admindep/deplacementjour')) {
                    // deplacementjour_index
                    if (rtrim($pathinfo, '/') === '/admindep/deplacementjour') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_deplacementjour_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'deplacementjour_index');
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementJourController::indexAction',  '_route' => 'deplacementjour_index',);
                    }
                    not_deplacementjour_index:

                    // deplacementjour_show
                    if (preg_match('#^/admindep/deplacementjour/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_deplacementjour_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deplacementjour_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementJourController::showAction',));
                    }
                    not_deplacementjour_show:

                    // deplacementjour_new
                    if ($pathinfo === '/admindep/deplacementjour/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_deplacementjour_new;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementJourController::newAction',  '_route' => 'deplacementjour_new',);
                    }
                    not_deplacementjour_new:

                    // deplacementjour_edit
                    if (preg_match('#^/admindep/deplacementjour/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_deplacementjour_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deplacementjour_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementJourController::editAction',));
                    }
                    not_deplacementjour_edit:

                    // deplacementjour_delete
                    if (preg_match('#^/admindep/deplacementjour/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_deplacementjour_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deplacementjour_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DeplacementJourController::deleteAction',));
                    }
                    not_deplacementjour_delete:

                }

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

            if (0 === strpos($pathinfo, '/admindep/typedeplacement')) {
                // typedeplacement_index
                if (rtrim($pathinfo, '/') === '/admindep/typedeplacement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typedeplacement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typedeplacement_index');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDeplacementController::indexAction',  '_route' => 'typedeplacement_index',);
                }
                not_typedeplacement_index:

                // typedeplacement_show
                if (preg_match('#^/admindep/typedeplacement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typedeplacement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typedeplacement_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDeplacementController::showAction',));
                }
                not_typedeplacement_show:

                // typedeplacement_new
                if ($pathinfo === '/admindep/typedeplacement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typedeplacement_new;
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDeplacementController::newAction',  '_route' => 'typedeplacement_new',);
                }
                not_typedeplacement_new:

                // typedeplacement_edit
                if (preg_match('#^/admindep/typedeplacement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typedeplacement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typedeplacement_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDeplacementController::editAction',));
                }
                not_typedeplacement_edit:

                // typedeplacement_delete
                if (preg_match('#^/admindep/typedeplacement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typedeplacement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typedeplacement_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeDeplacementController::deleteAction',));
                }
                not_typedeplacement_delete:

            }

            if (0 === strpos($pathinfo, '/admindep/ville')) {
                // ville_index
                if (rtrim($pathinfo, '/') === '/admindep/ville') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ville_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ville_index');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville_index',);
                }
                not_ville_index:

                // ville_show
                if (preg_match('#^/admindep/ville/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ville_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::showAction',));
                }
                not_ville_show:

                // ville_new
                if ($pathinfo === '/admindep/ville/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ville_new;
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
                }
                not_ville_new:

                // ville_edit
                if (preg_match('#^/admindep/ville/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ville_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::editAction',));
                }
                not_ville_edit:

                // ville_delete
                if (preg_match('#^/admindep/ville/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ville_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\VilleController::deleteAction',));
                }
                not_ville_delete:

            }

            if (0 === strpos($pathinfo, '/admindep/typeuser')) {
                // typeuser_index
                if (rtrim($pathinfo, '/') === '/admindep/typeuser') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typeuser_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typeuser_index');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeUserController::indexAction',  '_route' => 'typeuser_index',);
                }
                not_typeuser_index:

                // typeuser_show
                if (preg_match('#^/admindep/typeuser/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typeuser_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeuser_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeUserController::showAction',));
                }
                not_typeuser_show:

                // typeuser_new
                if ($pathinfo === '/admindep/typeuser/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typeuser_new;
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeUserController::newAction',  '_route' => 'typeuser_new',);
                }
                not_typeuser_new:

                // typeuser_edit
                if (preg_match('#^/admindep/typeuser/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typeuser_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeuser_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeUserController::editAction',));
                }
                not_typeuser_edit:

                // typeuser_delete
                if (preg_match('#^/admindep/typeuser/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typeuser_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeuser_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\TypeUserController::deleteAction',));
                }
                not_typeuser_delete:

            }

            if (0 === strpos($pathinfo, '/admindep/user')) {
                // user_index
                if (rtrim($pathinfo, '/') === '/admindep/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_index');
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_show
                if (preg_match('#^/admindep/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::showAction',));
                }
                not_user_show:

                // user_new
                if ($pathinfo === '/admindep/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_edit
                if (preg_match('#^/admindep/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::editAction',));
                }
                not_user_edit:

                // user_delete
                if (preg_match('#^/admindep/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

        }

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
