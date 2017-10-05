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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/places')) {
            // get_places
            if ('/places' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_places;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PlaceController:getPlacesAction',  '_format' => NULL,  '_route' => 'get_places',);
            }
            not_get_places:

            // get_place
            if (preg_match('#^/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_place;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_place')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController:getPlaceAction',  '_format' => NULL,));
            }
            not_get_place:

            // post_places
            if ('/places' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_places;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PlaceController:postPlacesAction',  '_format' => NULL,  '_route' => 'post_places',);
            }
            not_post_places:

            // remove_place
            if (preg_match('#^/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_remove_place;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_place')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController:removePlaceAction',  '_format' => NULL,));
            }
            not_remove_place:

        }

        elseif (0 === strpos($pathinfo, '/users')) {
            // get_users
            if ('/users' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_users;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController:getUsersAction',  '_format' => NULL,  '_route' => 'get_users',);
            }
            not_get_users:

            // get_user
            if (preg_match('#^/users/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:getUserAction',  '_format' => NULL,));
            }
            not_get_user:

            // post_users
            if ('/users' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_users;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController:postUsersAction',  '_format' => NULL,  '_route' => 'post_users',);
            }
            not_post_users:

            // remove_user
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_remove_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:removeUserAction',  '_format' => NULL,));
            }
            not_remove_user:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
