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

        elseif (0 === strpos($pathinfo, '/fr')) {
            // fr__RG__homepage
            if ('/fr' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fr__RG__homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__homepage',);
            }

            if (0 === strpos($pathinfo, '/fr/login')) {
                // fr__RG__fos_user_security_login
                if ('/fr/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_login',);
                }
                not_fr__RG__fos_user_security_login:

                // fr__RG__fos_user_security_check
                if ('/fr/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_check',);
                }
                not_fr__RG__fos_user_security_check:

            }

            // fr__RG__fos_user_security_logout
            if ('/fr/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fr__RG__fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_logout',);
            }
            not_fr__RG__fos_user_security_logout:

            if (0 === strpos($pathinfo, '/fr/profile')) {
                // fr__RG__fos_user_profile_show
                if ('/fr/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fr__RG__fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_profile_show',);
                }
                not_fr__RG__fos_user_profile_show:

                // fr__RG__fos_user_profile_edit
                if ('/fr/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_profile_edit',);
                }
                not_fr__RG__fos_user_profile_edit:

                // fr__RG__fos_user_change_password
                if ('/fr/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_change_password',);
                }
                not_fr__RG__fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/fr/register')) {
                // fr__RG__fos_user_registration_register
                if ('/fr/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fr__RG__fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_register',);
                }
                not_fr__RG__fos_user_registration_register:

                // fr__RG__fos_user_registration_check_email
                if ('/fr/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_check_email',);
                }
                not_fr__RG__fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/fr/register/confirm')) {
                    // fr__RG__fos_user_registration_confirm
                    if (preg_match('#^/fr/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'fr',));
                    }
                    not_fr__RG__fos_user_registration_confirm:

                    // fr__RG__fos_user_registration_confirmed
                    if ('/fr/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fr__RG__fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_confirmed',);
                    }
                    not_fr__RG__fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/fr/resetting')) {
                // fr__RG__fos_user_resetting_request
                if ('/fr/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_request',);
                }
                not_fr__RG__fos_user_resetting_request:

                // fr__RG__fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/fr/resetting/reset') && preg_match('#^/fr/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fr__RG__fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'fr',));
                }
                not_fr__RG__fos_user_resetting_reset:

                // fr__RG__fos_user_resetting_send_email
                if ('/fr/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fr__RG__fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_send_email',);
                }
                not_fr__RG__fos_user_resetting_send_email:

                // fr__RG__fos_user_resetting_check_email
                if ('/fr/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fr__RG__fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_check_email',);
                }
                not_fr__RG__fos_user_resetting_check_email:

            }

            // fr__RG__app_module
            if (0 === strpos($pathinfo, '/fr/module') && preg_match('#^/fr/module/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__app_module')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::moduleAction',  '_locale' => 'fr',));
            }

        }

        elseif (0 === strpos($pathinfo, '/vi')) {
            // vi__RG__homepage
            if ('/vi' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vi__RG__homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'vi',  '_route' => 'vi__RG__homepage',);
            }

            if (0 === strpos($pathinfo, '/vi/login')) {
                // vi__RG__fos_user_security_login
                if ('/vi/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_vi__RG__fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_security_login',);
                }
                not_vi__RG__fos_user_security_login:

                // vi__RG__fos_user_security_check
                if ('/vi/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_vi__RG__fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_security_check',);
                }
                not_vi__RG__fos_user_security_check:

            }

            // vi__RG__fos_user_security_logout
            if ('/vi/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_vi__RG__fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_security_logout',);
            }
            not_vi__RG__fos_user_security_logout:

            if (0 === strpos($pathinfo, '/vi/profile')) {
                // vi__RG__fos_user_profile_show
                if ('/vi/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_vi__RG__fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vi__RG__fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_profile_show',);
                }
                not_vi__RG__fos_user_profile_show:

                // vi__RG__fos_user_profile_edit
                if ('/vi/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_vi__RG__fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_profile_edit',);
                }
                not_vi__RG__fos_user_profile_edit:

                // vi__RG__fos_user_change_password
                if ('/vi/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_vi__RG__fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_change_password',);
                }
                not_vi__RG__fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/vi/register')) {
                // vi__RG__fos_user_registration_register
                if ('/vi/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_vi__RG__fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vi__RG__fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_registration_register',);
                }
                not_vi__RG__fos_user_registration_register:

                // vi__RG__fos_user_registration_check_email
                if ('/vi/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_vi__RG__fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_registration_check_email',);
                }
                not_vi__RG__fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/vi/register/confirm')) {
                    // vi__RG__fos_user_registration_confirm
                    if (preg_match('#^/vi/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_vi__RG__fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'vi',));
                    }
                    not_vi__RG__fos_user_registration_confirm:

                    // vi__RG__fos_user_registration_confirmed
                    if ('/vi/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_vi__RG__fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_registration_confirmed',);
                    }
                    not_vi__RG__fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/vi/resetting')) {
                // vi__RG__fos_user_resetting_request
                if ('/vi/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_vi__RG__fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_resetting_request',);
                }
                not_vi__RG__fos_user_resetting_request:

                // vi__RG__fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/vi/resetting/reset') && preg_match('#^/vi/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_vi__RG__fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'vi',));
                }
                not_vi__RG__fos_user_resetting_reset:

                // vi__RG__fos_user_resetting_send_email
                if ('/vi/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_vi__RG__fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_resetting_send_email',);
                }
                not_vi__RG__fos_user_resetting_send_email:

                // vi__RG__fos_user_resetting_check_email
                if ('/vi/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_vi__RG__fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'vi',  '_route' => 'vi__RG__fos_user_resetting_check_email',);
                }
                not_vi__RG__fos_user_resetting_check_email:

            }

            // vi__RG__app_module
            if (0 === strpos($pathinfo, '/vi/module') && preg_match('#^/vi/module/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vi__RG__app_module')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::moduleAction',  '_locale' => 'vi',));
            }

        }

        // en__RG__homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // en__RG__fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_en__RG__fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
            }
            not_en__RG__fos_user_security_login:

            // en__RG__fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_en__RG__fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
            }
            not_en__RG__fos_user_security_check:

        }

        // en__RG__fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_en__RG__fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
        }
        not_en__RG__fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // en__RG__fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'en__RG__fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_show',);
            }
            not_en__RG__fos_user_profile_show:

            // en__RG__fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_en__RG__fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_edit',);
            }
            not_en__RG__fos_user_profile_edit:

            // en__RG__fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_en__RG__fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
            }
            not_en__RG__fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // en__RG__fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_en__RG__fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'en__RG__fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
            }
            not_en__RG__fos_user_registration_register:

            // en__RG__fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
            }
            not_en__RG__fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // en__RG__fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'en',));
                }
                not_en__RG__fos_user_registration_confirm:

                // en__RG__fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_en__RG__fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
                }
                not_en__RG__fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // en__RG__fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
            }
            not_en__RG__fos_user_resetting_request:

            // en__RG__fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_en__RG__fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'en',));
            }
            not_en__RG__fos_user_resetting_reset:

            // en__RG__fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_en__RG__fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
            }
            not_en__RG__fos_user_resetting_send_email:

            // en__RG__fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_en__RG__fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
            }
            not_en__RG__fos_user_resetting_check_email:

        }

        // en__RG__app_module
        if (0 === strpos($pathinfo, '/module') && preg_match('#^/module/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__app_module')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::moduleAction',  '_locale' => 'en',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
