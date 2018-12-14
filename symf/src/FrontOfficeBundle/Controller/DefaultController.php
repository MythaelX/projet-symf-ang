<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Entity\Deplacement;
use BackOfficeBundle\Entity\DeplacementJour;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $id=2;
        $utilisateur=$this->getDoctrine()->getRepository('BackOfficeBundle:User')->findById($id)[0];
        $deplacements=$this->getDoctrine()->getRepository('BackOfficeBundle:Deplacement')->findAll();
        return $this->render('FrontOfficeBundle:Default:index.html.twig', array('utilisateur' => $utilisateur , 'deplacements' => $deplacements));
    }

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

    public function nouveauTrajetJourAction(Request $request,Deplacement $deplacement)
    {
        $deplacementJour = new DeplacementJour();
        $deplacementJour->setDeplacement($deplacement);
        $form = $this->createForm('BackOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacementJour);
            $em->flush($deplacementJour);

            return $this->redirectToRoute('new_deplacement_j', array('id' => $deplacementJour->getId()));
        }

        return $this->render('deplacementjour/new.html.twig', array(
            'deplacementJour' => $deplacementJour,
            'form' => $form->createView(),
        ));
    }

}
