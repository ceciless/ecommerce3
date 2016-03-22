<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PanierController extends Controller
{
    
    public function supprimerAction($id)
    {
        $session = $this->getRequest() -> getSession();
        $panier = $session ->get('panier');
         if (array_key_exists($id, $panier))
         {
                unset($panier[$id]);
                $session->set('panier', $panier);
                $this->get('session')->getFlashBag()->add('success','Reserve supprime avec succes');
         }
          return $this->redirect($this->generateUrl('panier'));
    }




    public function ajouterAction($id)
    {

        $session = $this->getRequest() -> getSession();

        if (!$session->has('panier'))  
            $session-> set('panier',array());
        $panier = $session ->get('panier');
        //$panier[ID DU VELO] => QUANTITE

        if (array_key_exists($id, $panier)){
                if ($this->getRequest()->query->get('qte') !=null) 
                        $panier[$id] = $this->getRequest()->query->get('qte');
                        $this->get('session')->getFlashBag()->add('success','Reserve change avec succes');
            }
        else{
                 if($this->getRequest()->query->get('qte') !=null)
                        $panier[$id] = $this->getRequest()->query->get('qte');
                 else
                        $panier[$id] = 1;
                $this->get('session')->getFlashBag()->add('success','Reserve ajoute avec succes');
        }
        $session->set('panier', $panier);
 

        return $this->redirect($this->generateUrl('panier'));
    }




    public function panierAction()

    {
        $session = $this->getRequest() -> getSession();
        //$session->remove('panier');
        //die();
        if (!$session->has('panier'))  
            $session-> set('panier',array());
        $em= $this->getDoctrine()->getManager();
        $velos=$em->getRepository('EcommerceBundle:Velos')->findArray(array_keys($session->get('panier')));
        //var_dump($session->get('panier'));
        //die();

        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig', array('velos'=> $velos,
                                                                                                                                                                    'panier' => $session->get('panier')));
    }



    public function validationAction()
    {
       // if ($this->get('request')->getMethod() == 'POST')
       //     $this->setPanierOnSession();

         $session = $this->getRequest() -> getSession();
        //$session->remove('panier');
        //die();
        if (!$session->has('panier'))  
            $session-> set('panier',array());
        $em= $this->getDoctrine()->getManager();
        $velos=$em->getRepository('EcommerceBundle:Velos')->findArray(array_keys($session->get('panier')));
        //var_dump($session->get('panier'));
        //die();

        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig',array('velos'=> $velos,
                                                                                                                                                                         'panier' => $session->get('panier')));
    }

}
