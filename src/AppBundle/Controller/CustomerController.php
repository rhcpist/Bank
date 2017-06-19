<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;


/**
 * Class CustomerController
 */

class CustomerController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Gets Custumer
     *
     * @param string $name
     * @param string $cnp
     * @return int
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     *
     * @ApiDoc(
     *     output="AppBundle\Entity\Customer",
     *     statusCodes={
     *         200 = "Returned when successful",
     *         404 = "Return when not found"
     *     }
     * )
     * @Post("/customer/{name}/{cnp}")
     * @Cache(public=true, maxage="3600", smaxage="3600")
     */

    public function addAction($name, $cnp, EntityManagerInterface $em)
    {
        $customerEntity = new Customer();
        if ( empty($name) || empty($cnp) ) {
            return new View("Name or cnp is NULL. Not Allowed!!!", Response::HTTP_NOT_ACCEPTABLE);
        }
        $customerEntity->setName($name);
        $customerEntity->setCnp($cnp);
        $em->persist($customerEntity);
        $em->flush();

        $response = new JsonResponse();
        return $response->setData(array( 'id' => $customerEntity->getId() ));
    }

}