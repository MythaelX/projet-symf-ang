<?php

/**
 * FrontOffice DeplacementJourController
 *
 * @author Adrien LEBOURGEOIS - Clément EVEN
 * @version 3.1
 * 
 */

namespace FrontOfficeBundle\Controller;

use BackOfficeBundle\Entity\DeplacementJour;
use BackOfficeBundle\Entity\Deplacement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DeplacementJourController extends Controller
{
    /**
     * Creates a new deplacementJour entity with entity deplacement.
     *
     */
    public function newAction(Request $request,Deplacement $deplacement)
    {
        $deplacementJour = new Deplacementjour();
        $deplacementJour->setDeplacement($deplacement);
        $form = $this->createForm('BackOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacementJour);
            $em->flush($deplacementJour);

            return $this->redirectToRoute('f_deplacement_show', array('id' => $deplacementJour->getDeplacement()->getId()));
        }

        return $this->render('FrontOfficeBundle:deplacementjour:new.html.twig', array(
            'deplacementJour' => $deplacementJour,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a deplacementJour entity.
     *
     */
    public function showAction(DeplacementJour $deplacementJour)
    {
        $deleteForm = $this->createDeleteForm($deplacementJour);

        return $this->render('FrontOfficeBundle:deplacementjour:show.html.twig', array(
            'deplacementJour' => $deplacementJour,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing deplacementJour entity.
     *
     */
    public function editAction(Request $request, DeplacementJour $deplacementJour)
    {
        $deleteForm = $this->createDeleteForm($deplacementJour);
        $editForm = $this->createForm('BackOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('f_deplacementjour_edit', array('id' => $deplacementJour->getId()));
        }

        return $this->render('FrontOfficeBundle:deplacementjour:edit.html.twig', array(
            'deplacementJour' => $deplacementJour,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a deplacementJour entity.
     *
     */
    public function deleteAction(Request $request, DeplacementJour $deplacementJour)
    {
        $form = $this->createDeleteForm($deplacementJour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($deplacementJour);
            $em->flush($deplacementJour);
        }

        return $this->redirectToRoute('f_deplacement_show');
    }

    /**
     * Creates a form to delete a deplacementJour entity.
     *
     * @param DeplacementJour $deplacementJour The deplacementJour entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DeplacementJour $deplacementJour)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deplacementjour_delete', array('id' => $deplacementJour->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
