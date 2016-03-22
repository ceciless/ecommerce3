<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ecommerce\EcommerceBundle\Form\UtilisateursProfilesType;
use Ecommerce\EcommerceBundle\Entity\UtilisateursProfiles;


class UtilisateursProfilesController extends Controller
{

    public function utilisateurprofileAction()
    {
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $utilisateurprofile = new UtilisateursProfiles();
        $form = $this->createForm(new UtilisateursProfilesType(), $utilisateurprofile);

        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->handleRequest($this->getRequest());
            if($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $utilisateurprofile->setUtilisateur($utilisateur);
                $em->persist($utilisateurprofile);
                $em->flush();

                return $this->redirect($this->generateUrl('utilisateurprofile'));
            }
        }

        return $this->render('EcommerceBundle:Default:utilisateurprofile/layout/utilisateurprofile.html.twig', array ( 'utilisateur' => $utilisateur,
                                                                                                                                                                                                          'form' => $form->createView()));
    }


    public function profilesuppressionAction($id)
    {
       $em = $this->getDoctrine()->getManager();
       $utilisateurprofile = $em->getRepository('EcommerceBundle:UtilisateursProfiles')->find($id);
        if ($this->container->get('security.context')->getToken()->getUser() !=$utilisateurprofile->getUtilisateur() || !$utilisateurprofile)
            return ($this->redirect($this->generateUrl('utilisateurprofile')));  
       $em->remove($utilisateurprofile);
       $em->flush();
        
        return $this->redirect($this->generateUrl('utilisateurprofile'));

    }

}
