<?php

namespace webserviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('webserviceBundle:Default:index.html.twig');
    }

    public function listRestAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //recuperation de la liste des internaute au travers du repository     
        $internautes = $em->getRepository('BackOfficeBundle:Internaute')->findByInternauteOrderedRest();
        return new JsonResponse([
            $internautes            
        ]);
    }
}
