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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Put;


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
     *  @Put("/customer/{name}/{cnp}")
     */

    public function getAction($name, $cnp, EntityManagerInterface $em)
    {
        return 0;
        #return $this->getDoctrine()->getRepository('AppBundle:Customer')->find($id);
    }

}