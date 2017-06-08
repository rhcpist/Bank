<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class CustomerController extends FOSRestController implements ClassResourceInterface
{
    /*
     * Class CustomerController
     * @package AppBundle\Controller
     *
     * @RouteResource("customer")
     */
    public function getAction($id)
    {
        return $this->getDoctrine()->getRepository('AppBundle:Customer')->find($id);
    }

}