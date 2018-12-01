<?php

namespace webserviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\Deplacement;
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
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->findByAllDeplacementsRest();
        $deplacements = $em;
        //$deplacements=null;
        return new JsonResponse([$deplacements]);
    }
}
