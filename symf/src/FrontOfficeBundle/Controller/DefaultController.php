<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOfficeBundle\Entity\User;
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

    public function nouveauTrajetAction()
    {
        $id=2;
        $utilisateur=$this->getDoctrine()->getRepository('BackOfficeBundle:User')->findById($id)[0];
        $form = $this->createFormBuilder($utilisateur)
        ->add('nom',TextType::class)
        ->add('prenom',TextType::class)
        ->add('adresse',TextType::class)
        ->add('ville',TextType::class)
        ->add('distance_init',TextType::class)
        ->add('service',TextType::class)
        ->add('societe',TextType::class)
        ->getForm();
        return $this->render('FrontOfficeBundle:Default:formulaire-trajet.html.twig',array('form' => $form->createView()));
    }
}
