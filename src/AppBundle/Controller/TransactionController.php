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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Get;

/**
 * Class TransactionController
 */

class TransactionController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Gets Transaction
     *
     * @param int $id
     * @return mixed
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
     */

    public function getAction($customId, $transId, EntityManagerInterface $em)
    {
        return $em->getRepository('AppBundle:Transaction')->getTransaction($customId, $transId);
    }


    /**
     * @Get("/transactions_by_filter/{customId}/{amount}/{date}/{offset}/{limit}")
     * @return mixed
     */
    public function getByFilterAction($customId, $amount, $date, $offset, $limit, EntityManagerInterface $em)
    {
        return $em->getRepository('AppBundle:Transaction')->getTransactionByFilter($customId, $amount, $date, $offset, $limit);
    }
}