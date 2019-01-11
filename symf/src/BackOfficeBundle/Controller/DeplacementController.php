<?php

/**
 * BackOffice DeplacementController
 *
 * @author Adrien LEBOURGEOIS - Clément EVEN
 * @version 3.1
 * 
 */

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\Deplacement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DeplacementController extends Controller
{
    /**
     * Lists all deplacement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $deplacements = $em->getRepository('BackOfficeBundle:Deplacement')->findAll();

        return $this->render('deplacement/index.html.twig', array(
            'deplacements' => $deplacements,
        ));
    }

    /**
     * Creates a new deplacement entity.
     *
     */
    public function newAction(Request $request)
    {
        $deplacement = new Deplacement();
        $form = $this->createForm('BackOfficeBundle\Form\DeplacementType', $deplacement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('BackOfficeBundle:User')->findById(1)[0];
            $deplacement->setUser($user);
            $em->persist($deplacement);
            $em->flush($deplacement);

            return $this->redirectToRoute('deplacement_show', array('id' => $deplacement->getId()));
        }

        return $this->render('deplacement/new.html.twig', array(
            'deplacement' => $deplacement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a deplacement entity.
     *
     */
    public function showAction(Deplacement $deplacement)
    {
        $deleteForm = $this->createDeleteForm($deplacement);

        return $this->render('deplacement/show.html.twig', array(
            'deplacement' => $deplacement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing deplacement entity.
     *
     */
    public function editAction(Request $request, Deplacement $deplacement)
    {
        $deleteForm = $this->createDeleteForm($deplacement);
        $editForm = $this->createForm('BackOfficeBundle\Form\DeplacementType2', $deplacement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('BackOfficeBundle:User')->findById(1)[0];
            $deplacement->setUser1($user);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('deplacement_edit', array('id' => $deplacement->getId()));
        }

        return $this->render('deplacement/edit.html.twig', array(
            'deplacement' => $deplacement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a deplacement entity.
     *
     */
    public function deleteAction(Request $request, Deplacement $deplacement)
    {
        $form = $this->createDeleteForm($deplacement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($deplacement);
            $em->flush($deplacement);
        }

        return $this->redirectToRoute('deplacement_index');
    }

    /**
     * Creates a form to delete a deplacement entity.
     *
     * @param Deplacement $deplacement The deplacement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Deplacement $deplacement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deplacement_delete', array('id' => $deplacement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
