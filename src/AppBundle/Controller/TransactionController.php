<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Transaction;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\Delete;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

/**
 * Class TransactionController
 */

class TransactionController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Gets Transaction
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     *
     * @ApiDoc(
     *     output="AppBundle\Entity\Transaction",
     *     statusCodes={
     *         200 = "Returned when successful",
     *         404 = "Return when not found"
     *     }
     * )
     * @Get("/transaction/{customId}/{transId}")
     * @Cache(public=true, maxage="3600", smaxage="3600")
     */

    public function getAction($customId, $transId, EntityManagerInterface $em)
    {
        return $em->getRepository('AppBundle:Transaction')->getTransaction($customId, $transId);
    }


    /**
     * @Get("/transactions_by_filter/{customId}/{amount}/{date}/{offset}/{limit}")
     * @Cache(public=true, maxage="3600", smaxage="3600")
     */
    public function getByFilterAction($customId, $amount, $date, $offset, $limit, EntityManagerInterface $em)
    {
        return $em->getRepository('AppBundle:Transaction')->getTransactionByFilter($customId, $amount, $date, $offset, $limit);
    }

    /**
     *
     * @Post("/add_transaction/{customId}/{amount}")
     * @Cache(public=true, maxage="3600", smaxage="3600")
     */
    public function addAction($customId, $amount, EntityManagerInterface $em)
    {

        $customer = $em->getRepository('AppBundle:Customer')->find( $customId );
        if( !$customer ) {
            return new View("Not found Customer", Response::HTTP_NOT_ACCEPTABLE);
        }

        $transactionEntity = new Transaction();
        if ( empty($customId) || empty($amount) ) {
            return new View("Customer id or amount is NULL. Not Allowed!!!", Response::HTTP_NOT_ACCEPTABLE);
        }
        $transactionEntity->setCustomer($customer);
        $transactionEntity->setCustomerId($customId);
        $transactionEntity->setAmount($amount);
        $em->persist($transactionEntity);
        $em->flush();

        return $em->getRepository('AppBundle:Transaction')->findBy(array('customId' => $customId), array('id' => 'DESC'), 1, 0)[0];
    }

    /**
     * @Put("/update_transaction/{transId}/{amount}")
     * @Cache(public=true, maxage="3600", smaxage="3600")
     */
    public function updateAction($transId, $amount, EntityManagerInterface $em)
    {
        $transactionEntity = new Transaction();
        $transaction = $em->getRepository('AppBundle:Transaction')->find($transId);
        if ( !$transaction ) {
            return new View("Error! Transaction not exist!!!", Response::HTTP_NOT_FOUND);
        }
        $transaction->setAmount($amount);
        $em->flush();

        return $transaction;
    }

    /**
     * @Delete("/delete_transaction/{transId}")
     * @Cache(public=true, maxage="3600", smaxage="3600")
     */
    public function deleteAction($transId, EntityManagerInterface $em)
    {
        $transactionEntity = new Transaction();
        $transaction = $em->getRepository('AppBundle:Transaction')->find($transId);
        if  ( empty($transaction) ) {
            return new View("Error! Transaction not found", Response::HTTP_NOT_FOUND);
        }

        $em->remove($transaction);
        $em->flush();

        return new View("Transaction deleted successfully!", Response::HTTP_OK);
    }

}