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

        if (0 === strpos($pathinfo, '/api/places')) {
            // get_places
            if ('/api/places' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_places;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PlaceController:getPlacesAction',  '_format' => NULL,  '_route' => 'get_places',);
            }
            not_get_places:

            // get_place
            if (preg_match('#^/api/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_place;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_place')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController:getPlaceAction',  '_format' => NULL,));
            }
            not_get_place:

            // post_places
            if ('/api/places' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_places;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PlaceController:postPlacesAction',  '_format' => NULL,  '_route' => 'post_places',);
            }
            not_post_places:

            // remove_place
            if (preg_match('#^/api/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_remove_place;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_place')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController:removePlaceAction',  '_format' => NULL,));
            }
            not_remove_place:

            // update_place
            if (preg_match('#^/api/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_update_place;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_place')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController:updatePlaceAction',  '_format' => NULL,));
            }
            not_update_place:

            // patch_place
            if (preg_match('#^/api/places/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PATCH' !== $canonicalMethod) {
                    $allow[] = 'PATCH';
                    goto not_patch_place;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_place')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController:patchPlaceAction',  '_format' => NULL,));
            }
            not_patch_place:

            // get_prices
            if (preg_match('#^/api/places/(?P<id>[^/]++)/prices$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_prices;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_prices')), array (  '_controller' => 'AppBundle\\Controller\\Place\\PriceController:getPricesAction',  '_format' => NULL,));
            }
            not_get_prices:

            // post_prices
            if (preg_match('#^/api/places/(?P<id>[^/]++)/prices$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_prices;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_prices')), array (  '_controller' => 'AppBundle\\Controller\\Place\\PriceController:postPricesAction',  '_format' => NULL,));
            }
            not_post_prices:

            // get_themes
            if (preg_match('#^/api/places/(?P<id>[^/]++)/themes$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_themes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_themes')), array (  '_controller' => 'AppBundle\\Controller\\Place\\ThemeController:getThemesAction',  '_format' => NULL,));
            }
            not_get_themes:

            // post_themes
            if (preg_match('#^/api/places/(?P<id>[^/]++)/themes$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_themes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_themes')), array (  '_controller' => 'AppBundle\\Controller\\Place\\ThemeController:postThemesAction',  '_format' => NULL,));
            }
            not_post_themes:

        }

        elseif (0 === strpos($pathinfo, '/api/users')) {
            // get_users
            if ('/api/users' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_users;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController:getUsersAction',  '_format' => NULL,  '_route' => 'get_users',);
            }
            not_get_users:

            // get_user
            if (preg_match('#^/api/users/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:getUserAction',  '_format' => NULL,));
            }
            not_get_user:

            // post_users
            if ('/api/users' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_users;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController:postUsersAction',  '_format' => NULL,  '_route' => 'post_users',);
            }
            not_post_users:

            // remove_user
            if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_remove_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:removeUserAction',  '_format' => NULL,));
            }
            not_remove_user:

            // update_user
            if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_update_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:updateUserAction',  '_format' => NULL,));
            }
            not_update_user:

            // patch_user
            if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PATCH' !== $canonicalMethod) {
                    $allow[] = 'PATCH';
                    goto not_patch_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:patchUserAction',  '_format' => NULL,));
            }
            not_patch_user:

            // get_user_suggestions
            if (preg_match('#^/api/users/(?P<id>[^/]++)/suggestions$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_user_suggestions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_suggestions')), array (  '_controller' => 'AppBundle\\Controller\\UserController:getUserSuggestionsAction',  '_format' => NULL,));
            }
            not_get_user_suggestions:

            // get_preferences
            if (preg_match('#^/api/users/(?P<id>[^/]++)/preferences$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_preferences;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_preferences')), array (  '_controller' => 'AppBundle\\Controller\\User\\PreferenceController:getPreferencesAction',  '_format' => NULL,));
            }
            not_get_preferences:

            // post_preferences
            if (preg_match('#^/api/users/(?P<id>[^/]++)/preferences$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_preferences;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_preferences')), array (  '_controller' => 'AppBundle\\Controller\\User\\PreferenceController:postPreferencesAction',  '_format' => NULL,));
            }
            not_post_preferences:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
