<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/new_')) {
            // new_category
            if ('/new_category' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::newCategory',  '_route' => 'new_category',);
            }

            // new_product
            if ('/new_product' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::newProduct',  '_route' => 'new_product',);
            }

            // new_promotion
            if ('/new_promotion' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::newPromotion',  '_route' => 'new_promotion',);
            }

            // new_table
            if ('/new_table' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TableController::newTable',  '_route' => 'new_table',);
            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            // create_newcategory
            if ('/create_newcategory' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::createNewCategory',  '_route' => 'create_newcategory',);
            }

            // create_newproduct
            if ('/create_newproduct' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::createNewProduct',  '_route' => 'create_newproduct',);
            }

            // contato
            if ('/contato' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contato',);
            }

        }

        elseif (0 === strpos($pathinfo, '/show_')) {
            // show_categories
            if ('/show_categories' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::showCategories',  '_route' => 'show_categories',);
            }

            // show_products
            if ('/show_products' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::showProducts',  '_route' => 'show_products',);
            }

            // show_promotions
            if ('/show_promotions' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::showPromotions',  '_route' => 'show_promotions',);
            }

            // show_tables
            if ('/show_tables' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TableController::showTables',  '_route' => 'show_tables',);
            }

        }

        // sobre
        if ('/sobre' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'sobre',);
        }

        if (0 === strpos($pathinfo, '/edit_')) {
            // edit_category
            if ('/edit_category' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::editCategoryAction',  '_route' => 'edit_category',);
            }

            // edit_product
            if ('/edit_product' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::editProductAction',  '_route' => 'edit_product',);
            }

            // edit_promotion
            if ('/edit_promotion' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::editPromotion',  '_route' => 'edit_promotion',);
            }

        }

        // run_edit_category
        if ('/run_edit_category' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::runEditCategoryAction',  '_route' => 'run_edit_category',);
        }

        // run_edit_product
        if ('/run_edit_product' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::runEditProduct',  '_route' => 'run_edit_product',);
        }

        if (0 === strpos($pathinfo, '/delete_')) {
            // delete_category
            if ('/delete_category' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::delete_category',  '_route' => 'delete_category',);
            }

            // delete_product
            if ('/delete_product' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::deleteProduct',  '_route' => 'delete_product',);
            }

            // delete_promotion
            if ('/delete_promotion' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CatalogController::deletePromotion',  '_route' => 'delete_promotion',);
            }

            // delete_table
            if ('/delete_table' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TableController::deleteTable',  '_route' => 'delete_table',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // products
        if ('/produtos' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::productsAction',  '_route' => 'products',);
        }

        // portfolio
        if ('/portfolio' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::portfolioAction',  '_route' => 'portfolio',);
        }

        if (0 === strpos($pathinfo, '/t')) {
            // test
            if ('/test' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
            }

            // teleentregas
            if ('/teleentregas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::deliveryAction',  '_route' => 'teleentregas',);
            }

            // table_detail
            if ('/table_detail' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TableController::tableDetail',  '_route' => 'table_detail',);
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // app_user_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::logout',  '_route' => 'app_user_logout',);
        }

        // admin
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::validaAction',  '_route' => 'admin',);
        }

        // my_data
        if ('/my_data' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::myData',  '_route' => 'my_data',);
        }

        // home
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::adminHome',  '_route' => 'home',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
