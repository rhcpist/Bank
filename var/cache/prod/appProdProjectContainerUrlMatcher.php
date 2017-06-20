<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/doc') && preg_match('#^/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        // app_transaction_delete
        if (0 === strpos($pathinfo, '/delete_transaction') && preg_match('#^/delete_transaction/(?P<transId>[^/]++)$#s', $pathinfo, $matches)) {
            if ('DELETE' !== $canonicalMethod) {
                $allow[] = 'DELETE';
                goto not_app_transaction_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_transaction_delete')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController::deleteAction',));
        }
        not_app_transaction_delete:

        if (0 === strpos($pathinfo, '/login')) {
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

        elseif (0 === strpos($pathinfo, '/api')) {
            // add_customer
            if (0 === strpos($pathinfo, '/api/customer') && preg_match('#^/api/customer/(?P<name>[^/]++)/(?P<cnp>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_add_customer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_customer')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController:addAction',  '_format' => 'json',));
            }
            not_add_customer:

            if (0 === strpos($pathinfo, '/api/transaction')) {
                // get_transaction
                if (preg_match('#^/api/transaction/(?P<customId>[^/]++)/(?P<transId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_transaction;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:getAction',  '_format' => 'json',));
                }
                not_get_transaction:

                // get_transaction_by_filter
                if (0 === strpos($pathinfo, '/api/transactions_by_filter') && preg_match('#^/api/transactions_by_filter/(?P<customId>[^/]++)/(?P<amount>[^/]++)/(?P<date>[^/]++)/(?P<offset>[^/]++)/(?P<limit>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_transaction_by_filter;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_transaction_by_filter')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:getByFilterAction',  '_format' => 'json',));
                }
                not_get_transaction_by_filter:

            }

            // add_transaction
            if (0 === strpos($pathinfo, '/api/add_transaction') && preg_match('#^/api/add_transaction/(?P<customId>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_add_transaction;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:addAction',  '_format' => 'json',));
            }
            not_add_transaction:

            // update_transaction
            if (0 === strpos($pathinfo, '/api/update_transaction') && preg_match('#^/api/update_transaction/(?P<transId>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_update_transaction;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:updateAction',  '_format' => 'json',));
            }
            not_update_transaction:

            // delete_transaction
            if (0 === strpos($pathinfo, '/api/delete_transaction') && preg_match('#^/api/delete_transaction/(?P<transId>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_delete_transaction;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:deleteAction',  '_format' => 'json',));
            }
            not_delete_transaction:

        }

        // app_transaction_add
        if (0 === strpos($pathinfo, '/add_transaction') && preg_match('#^/add_transaction/(?P<customId>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_app_transaction_add;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_transaction_add')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController::addAction',));
        }
        not_app_transaction_add:

        // app_customer_add
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<name>[^/]++)/(?P<cnp>[^/]++)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_app_customer_add;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_customer_add')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController::addAction',));
        }
        not_app_customer_add:

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/transaction')) {
            // app_transaction_get
            if (preg_match('#^/transaction/(?P<customId>[^/]++)/(?P<transId>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_app_transaction_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_transaction_get')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController::getAction',));
            }
            not_app_transaction_get:

            // app_transaction_getbyfilter
            if (0 === strpos($pathinfo, '/transactions_by_filter') && preg_match('#^/transactions_by_filter/(?P<customId>[^/]++)/(?P<amount>[^/]++)/(?P<date>[^/]++)/(?P<offset>[^/]++)/(?P<limit>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_app_transaction_getbyfilter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_transaction_getbyfilter')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController::getByFilterAction',));
            }
            not_app_transaction_getbyfilter:

        }

        // app_transaction_update
        if (0 === strpos($pathinfo, '/update_transaction') && preg_match('#^/update_transaction/(?P<transId>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
            if ('PUT' !== $canonicalMethod) {
                $allow[] = 'PUT';
                goto not_app_transaction_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_transaction_update')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController::updateAction',));
        }
        not_app_transaction_update:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
