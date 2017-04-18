<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BoutiqueController extends Controller
{
    /**
     * @Route("/boutique")
     */
    public function boutiqueAction()
    {
        return $this->render('MainBundle:Boutique:boutique.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/boutique/{id}")
     */
    public function produitAction($id)
    {
        $idUser = $id;
        return $this->render('MainBundle:Boutique:produit.html.twig', array(
            'user'=> $idUser,
        ));
    }

    /**
     * @Route("/boutique/panier")
     */
    public function panierAction()
    {
        return $this->render('MainBundle:Boutique:panier.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/boutique/{id}/modification")
     */
    public function modificationProduitAction($id)
    {
        $idProduit = $id;
        return $this->render('MainBundle:Boutique:modification_produit.html.twig', array(
            'idProduit'=> $idProduit,
        ));
    }

}
