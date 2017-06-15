<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'nelmio_api_doc_index' => array (  0 =>   array (    0 => 'view',  ),  1 =>   array (    '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',    'view' => 'default',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'view',    ),    1 =>     array (      0 => 'text',      1 => '/doc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_customer' => array (  0 =>   array (    0 => 'name',    1 => 'cnp',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CustomerController:addAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cnp',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    2 =>     array (      0 => 'text',      1 => '/customer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_transaction' => array (  0 =>   array (    0 => 'customId',    1 => 'transId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TransactionController:getAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'transId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customId',    ),    2 =>     array (      0 => 'text',      1 => '/transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_transaction_by_filter' => array (  0 =>   array (    0 => 'customId',    1 => 'amount',    2 => 'date',    3 => 'offset',    4 => 'limit',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TransactionController:getByFilterAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'limit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'offset',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'amount',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customId',    ),    5 =>     array (      0 => 'text',      1 => '/transactions_by_filter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_transaction' => array (  0 =>   array (    0 => 'customId',    1 => 'amount',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TransactionController:addAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'amount',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'customId',    ),    2 =>     array (      0 => 'text',      1 => '/add_transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_transaction' => array (  0 =>   array (    0 => 'transId',    1 => 'amount',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TransactionController:updateAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'amount',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'transId',    ),    2 =>     array (      0 => 'text',      1 => '/update_transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_transaction' => array (  0 =>   array (    0 => 'transId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\TransactionController:deleteAction',    '_format' => 'json',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'transId',    ),    1 =>     array (      0 => 'text',      1 => '/delete_transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
