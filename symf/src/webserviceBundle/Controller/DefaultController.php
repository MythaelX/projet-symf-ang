<?php

namespace webserviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\Deplacement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('webserviceBundle:Default:index.html.twig');
    }

    public function listDeplacementsRestAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->AllDeplacementsRest();
        $response = new Response();
        $response->setContent(json_encode($em));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
        //$deplacements = $em;
        //$deplacements=null;
        //return new JsonResponse([$deplacements]);
    }
}
