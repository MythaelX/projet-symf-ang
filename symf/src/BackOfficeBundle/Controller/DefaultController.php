<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository('BackOfficeBundle:User')->findById(1)[0];
      return $this->render('BackOfficeBundle:Default:index.html.twig',array('utilisateur' => $user));
    }

}
