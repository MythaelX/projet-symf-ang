<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
    * show admin homepage with idUser 1.
    *
    */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository('BackOfficeBundle:User')->findById(1)[0];
      return $this->render('BackOfficeBundle:Default:index.html.twig',array('utilisateur' => $user));
    }

    /**
    * Lists all statistic  with function in UserRepository.
    *
    */
    public function statistiqueAction()
    {
      $em = $this->getDoctrine()->getManager();
      $stat_ville_user = $em->getRepository('BackOfficeBundle:User')->findAllUtilisateurByVille();
      $stat_societe_user = $em->getRepository('BackOfficeBundle:User')->findAllUtilisateurAndKilometreBySociete();
      $stat_societe_kilo_user = $em->getRepository('BackOfficeBundle:User')->findKilometreMoisBySocieteAndUtilisateur();
      return $this->render('BackOfficeBundle:Default:stat.html.twig',array('stat_ville_user' => $stat_ville_user,'stat_societe_user' => $stat_societe_user,'stat_societe_kilo_user' => $stat_societe_kilo_user));
    }
}
