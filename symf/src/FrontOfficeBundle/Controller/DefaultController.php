<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Entity\Deplacement;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
    * Lists all deplacement entities with idUser 2.
    *
    */
    public function indexAction()
    {
        $id=2;
        $utilisateur=$this->getDoctrine()->getRepository('BackOfficeBundle:User')->findById($id)[0];
        $deplacements=$this->getDoctrine()->getRepository('BackOfficeBundle:Deplacement')->findByUser($utilisateur);
        return $this->render('FrontOfficeBundle:Default:index.html.twig', array('utilisateur' => $utilisateur , 'deplacements' => $deplacements));
    }

    /**
     * Displays a form to edit an existing profil entity with idUser 2.
     *
     */
    public function profilAction(Request $request)
    {
      $id=2;
      $utilisateur=$this->getDoctrine()->getRepository('BackOfficeBundle:User')->findById($id)[0];
      $form = $this->createForm('BackOfficeBundle\Form\UserType',$utilisateur);
      $form->handleRequest($request);

      if($form->isSubmitted() && $form -> isValid()) {
        $em =$this->getDoctrine()->getManager();
        $em->persist($utilisateur);
        $em->flush($utilisateur);

        return $this->redirectToRoute('front_office_homepage');
      }
      return $this->render('FrontOfficeBundle:Default:profil.html.twig',array('form' => $form->createView()));
    }

}
