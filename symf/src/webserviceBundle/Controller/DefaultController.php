<?php

namespace webserviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\Deplacement;
use BackOfficeBundle\Entity\DeplacementJour;
use BackOfficeBundle\Entity\User;
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

    public function listDeplacementsRestAction(Request $request)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->allDeplacementsRest();
        $response->setContent(json_encode($em));
        return $response;
    }

    public function listDeplacementsForOneUserRestAction(Request $request, $id)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->deplacementsForOneUserRest($id);
        $response->setContent(json_encode($em));
        return $response;
    }

    public function getUserRestAction(Request $request, $id)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->getUserRest($id);
        $response->setContent(json_encode($em));
        return $response;
    }

    public function getDeplacementDetailsRestAction(Request $request, $userId, $year, $month)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Deplacement')->getDeplacementDetailsRest($userId, $year, $month);
        $response->setContent(json_encode($em));
        return $response;
    }

    public function getTypeDeplacementRestAction(Request $request)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $em = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:TypeDeplacement')->getTypeDeplacementRest();
        $response->setContent(json_encode($em));
        return $response;
    }

    public function saveDeplacementRestAction(Request $request,$month,$year){
     $response = new Response();
     $response->headers->set('Content-Type', 'application/json');
     $response->headers->set('Access-Control-Allow-Origin', '*');
     $deplacement = new Deplacement();
     $deplacement->setMois($month);
     $deplacement->setAnnee($year);
     $em = $this->getDoctrine()->getManager();
     $user = $em->getRepository('BackOfficeBundle:User')->findById(1)[0];
     $deplacement->setUser($user);
     $em->persist($deplacement);
     $em->flush($deplacement);
     $response->setContent(json_encode(null));
     return $response;
    }

    public function saveDeplacementJourRestAction(Request $request,$nbKm,$montant,$jour,$idType,$idDeplacement){
     $response = new Response();
     $response->headers->set('Content-Type', 'application/json');
     $response->headers->set('Access-Control-Allow-Origin', '*');
     $deplacementJour = new DeplacementJour();
     $em = $this->getDoctrine()->getManager();
     $deplacementJour->setNbKm($nbKm);
     $deplacementJour->setMontant($montant);
     $deplacementJour->setJour($jour);
     $deplacement=$this->getDoctrine()->getRepository('BackOfficeBundle:Deplacement')->findById($idDeplacement)[0];
     $deplacementJour->setDeplacement($deplacement);
     $type=$this->getDoctrine()->getRepository('BackOfficeBundle:TypeDeplacement')->findById($idType)[0];
     $deplacementJour->setTypeDeplacement($type);
     $em->persist($deplacementJour);
     $em->flush($deplacementJour);
     $response->setContent(json_encode(null));
     return $response;
    }
}
