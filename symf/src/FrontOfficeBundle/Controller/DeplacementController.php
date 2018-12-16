<?php

namespace FrontOfficeBundle\Controller;

use BackOfficeBundle\Entity\Deplacement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Deplacement controller.
 *
 */
class DeplacementController extends Controller
{
    /**
     * Creates a new deplacement entity with idUser.
     *
     */
    public function newAction(Request $request)
    {
      $idUser=2;
      $deplacement = new Deplacement();
      $utilisateur=$this->getDoctrine()->getRepository('BackOfficeBundle:User')->findById($idUser)[0];
      $deplacement->setUser($utilisateur);
      $form = $this->createForm('BackOfficeBundle\Form\DeplacementType', $deplacement);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($deplacement);
          $em->flush($deplacement);
          return $this->redirectToRoute('f_deplacement_show', array('id' => $deplacement->getId()));
      }

      return $this->render('FrontOfficeBundle:Default:formulaire-trajet.html.twig',array('deplacement' => $deplacement,'form' => $form->createView()));
    }

    /**
     * Finds and displays a deplacementjour entity with deplacement entity.
     *
     */
    public function showAction(Deplacement $deplacement)
    {
        $em = $this->getDoctrine()->getManager();

        $deplacementJours = $em->getRepository('BackOfficeBundle:DeplacementJour')->findByDeplacement($deplacement->getId());

        return $this->render('FrontOfficeBundle:Default:deplacement.html.twig', array(
            'deplacementJours' => $deplacementJours,
            'deplacement' => $deplacement
        ));
    }

}
