<?php

namespace webserviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('webserviceBundle:Default:index.html.twig');
    }

    public function listDeplacementsRestAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findByAllDeplacementsRest();
        return new JsonResponse([$deplacements]);
    }
}
