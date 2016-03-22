<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\EcommerceBundle\Form\publierVelosType;
use Ecommerce\EcommerceBundle\Entity\Velos;

/**
 * Velos controller.
 *
 */
class publierVelosController extends Controller
{
    /**
     * Lists all Velos entities.
     *
     */

    public function indexAction()
    {
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $velos = $em->getRepository('EcommerceBundle:Velos')->findBy(array('utilisateur'=>$utilisateur));

        return $this->render('EcommerceBundle:Default:publierVelos/layout/index.html.twig', array('velos' => $velos));
    }

    /**
     * Creates a new Velos entity.
     *
     */
    public function newAction(Request $request)
    {
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $velo = new Velos();
        $form = $this->createForm('Ecommerce\EcommerceBundle\Form\publierVelosType', $velo);
       

        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->handleRequest($this->getRequest());
            if ($form->isSubmitted() && $form->isValid()) 
             {
            $em = $this->getDoctrine()->getManager();
            $velo->setUtilisateur($utilisateur);
            $em->persist($velo);
            $em->flush();

            return $this->redirectToRoute('publierVelos_show', array('id' => $velo->getId()));
             }
        }

        return $this->render('EcommerceBundle:Default:publierVelos/layout/new.html.twig', array( 'utilisateur' => $utilisateur,
                                                                                                                                                                           'form' => $form->createView()));
    }

    /**
     * Finds and displays a Velos entity.
     *
     */
    public function showAction(Velos $velo)
    {
        $deleteForm = $this->createDeleteForm($velo);

        return $this->render('EcommerceBundle:Default:publierVelos/layout/show.html.twig', array(
            'velo' => $velo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Velos entity.
     *
     */
    public function editAction(Request $request, Velos $velo)
    {
        $deleteForm = $this->createDeleteForm($velo);
        $editForm = $this->createForm('Ecommerce\EcommerceBundle\Form\publierVelosType', $velo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($velo);
            $em->flush();

            return $this->redirectToRoute('publierVelos_edit', array('id' => $velo->getId()));
        }

        return $this->render('EcommerceBundle:Default:publierVelos/layout/edit.html.twig', array(
            'velo' => $velo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Velos entity.
     *
     */
    public function deleteAction(Request $request, Velos $velo)
    {
        $form = $this->createDeleteForm($velo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($velo);
            $em->flush();
        }

        return $this->redirectToRoute('publierVelos_index');
    }

    /**
     * Creates a form to delete a Velos entity.
     *
     * @param Velos $velo The Velos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Velos $velo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('publierVelos_delete', array('id' => $velo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
