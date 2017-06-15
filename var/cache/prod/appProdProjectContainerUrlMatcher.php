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

        // delete_transaction
        if (0 === strpos($pathinfo, '/delete_transaction') && preg_match('#^/delete_transaction/(?P<transId>[^/]++)$#s', $pathinfo, $matches)) {
            if ('DELETE' !== $canonicalMethod) {
                $allow[] = 'DELETE';
                goto not_delete_transaction;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:deleteAction',  '_format' => 'json',));
        }
        not_delete_transaction:

        // add_customer
        if (0 === strpos($pathinfo, '/customer') && preg_match('#^/customer/(?P<name>[^/]++)/(?P<cnp>[^/]++)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_add_customer;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_customer')), array (  '_controller' => 'AppBundle\\Controller\\CustomerController:addAction',  '_format' => 'json',));
        }
        not_add_customer:

        if (0 === strpos($pathinfo, '/transaction')) {
            // get_transaction
            if (preg_match('#^/transaction/(?P<customId>[^/]++)/(?P<transId>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_transaction;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:getAction',  '_format' => 'json',));
            }
            not_get_transaction:

            // get_transaction_by_filter
            if (0 === strpos($pathinfo, '/transactions_by_filter') && preg_match('#^/transactions_by_filter/(?P<customId>[^/]++)/(?P<amount>[^/]++)/(?P<date>[^/]++)/(?P<offset>[^/]++)/(?P<limit>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_transaction_by_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_transaction_by_filter')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:getByFilterAction',  '_format' => 'json',));
            }
            not_get_transaction_by_filter:

        }

        // add_transaction
        if (0 === strpos($pathinfo, '/add_transaction') && preg_match('#^/add_transaction/(?P<customId>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_add_transaction;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:addAction',  '_format' => 'json',));
        }
        not_add_transaction:

        // update_transaction
        if (0 === strpos($pathinfo, '/update_transaction') && preg_match('#^/update_transaction/(?P<transId>[^/]++)/(?P<amount>[^/]++)$#s', $pathinfo, $matches)) {
            if ('PUT' !== $canonicalMethod) {
                $allow[] = 'PUT';
                goto not_update_transaction;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_transaction')), array (  '_controller' => 'AppBundle\\Controller\\TransactionController:updateAction',  '_format' => 'json',));
        }
        not_update_transaction:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
