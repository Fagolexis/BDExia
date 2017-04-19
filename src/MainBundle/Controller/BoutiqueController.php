<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BoutiqueController extends DefaultController
{
    /**
     * @Route("/boutique")
     */
    public function indexAction()
    {
        return $this->render('MainBundle:Boutique:boutique.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/boutique/{id}")
     */
    public function showAction($id)
    {
        $idUser = $id;
        return $this->render('MainBundle:Boutique:produit.html.twig', array(
            'user'=> $idUser,
        ));
    }

    /**
     * @Route("/boutique/panier")
     */
    public function cartAction()
    {
        return $this->render('MainBundle:Boutique:panier.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/boutique/{id}/modification")
     */
    public function modAction($id)
    {
        return $this->render('MainBundle:Boutique:modification_produit.html.twig', array(
            'id'=> $id,
        ));
    }

}
