<?php

/**
 * 
 * webservice DefaultController
 *
 * @author Adrien LEBOURGEOIS - Clément EVEN
 * @version 3.1
 * 
 */

namespace webserviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\Deplacement;
use BackOfficeBundle\Entity\TypeDeplacement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('webserviceBundle:Default:index.html.twig');
    }

    /**
     * Return all "deplacements".
     *
     */
    public function listDeplacementsRestAction(Request $request)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->allDeplacementsRest();
        $response->setContent(json_encode($em));
        return $response;
    }

    /**
     * Return all "deplacements" for one user "id" passed as a parameter.
     *
     */
    public function listDeplacementsForOneUserRestAction(Request $request, $id)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->deplacementsForOneUserRest($id);
        $response->setContent(json_encode($em));
        return $response;
    }

    /**
     * Return "prenom" and "nom" for one user "id" passed as a parameter.
     *
     */
    public function getUserRestAction(Request $request, $id)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->getUserRest($id);
        $response->setContent(json_encode($em));
        return $response;
    }

    /**
     * Return details ("deplacement_jour") for one "deplacement" (id of the "user", year and month) passed as a parameter .
     *
     */
    public function getDeplacementDetailsRestAction(Request $request, $userId, $year, $month)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->getDeplacementDetailsRest($userId, $year, $month);
        $response->setContent(json_encode($em));
        return $response;
    }

    /**
     * Return all "type_deplacement".
     *
     */
    public function getTypeDeplacementRestAction(Request $request)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:TypeDeplacement')->getTypeDeplacementRest();
        $response->setContent(json_encode($em));
        return $response;
    }
}
