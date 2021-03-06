<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;


class VelosController extends Controller
{

    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $velos = $em->getRepository('EcommerceBundle:Velos')->byCategorie($categorie);
        $categorie = $em->getRepository('EcommerceBundle:Categories')->find($categorie);
         if (!$categorie) throw $this->createNotFoundException('La page \'existe pas.');
        return $this->render('EcommerceBundle:Default:velos/layout/velos.html.twig', array('velos' => $velos));
    }


    public function velosAction()
    {
        $session = $this->getRequest() -> getSession();
        $em = $this->getDoctrine()->getManager();
        $velos = $em->getRepository('EcommerceBundle:Velos')->findBy(array('disponible' => 1 ));
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier=false;

        return $this->render('EcommerceBundle:Default:velos/layout/velos.html.twig', array('velos' => $velos,
                                                                                                                                                                                'panier' => $panier));
    }


    public function presentationAction($id)
    {
        $session = $this->getRequest() -> getSession();
        $em = $this->getDoctrine()->getManager();
        $velo = $em->getRepository('EcommerceBundle:Velos')->find($id);
        
         if (!$velo) throw $this->createNotFoundException('La page \'existe pas.');
         if ($session->has('panier'))
            $panier = $session->get('panier');
        else                
            $panier=false;

        return $this->render('EcommerceBundle:Default:velos/layout/presentation.html.twig', array('velo' => $velo,
                                                                                                                                                                                                'panier' => $panier));
    }

    public function rechercheAction()
    {

        $form=$this->createForm(new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }


    public function rechercheTraitementAction()
    {
        $form=$this->createForm(new RechercheType());

        if ($this->get('request')->getMethod()  == 'POST')
        {           
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            $velos = $em->getRepository('EcommerceBundle:Velos')->recherche( $form['recherche']->getData());
         }
        else
        {
            throw $this->createNotFoundException('La page \'existe pas.');
        }
       
        return $this->render('EcommerceBundle:Default:velos/layout/velos.html.twig', array('velos' => $velos));
    }




}
