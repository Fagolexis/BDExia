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
        $list = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findAll();
        return $this->render('MainBundle:Boutique:boutique.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/boutique/{id}")
     */
    public function showAction($id)
    {
        $product = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
        return $this->render('MainBundle:Boutique:produit.html.twig', array(
            'prod'=> $product,
        ));
    }

    /**
     * @Route("/boutique/panier")
     */
    public function cartAction()
    {
        //SESSION
        $products = array();
        //foreach elements in panier
        $products[] = $this->getDoctrine()->getRepository("MainBundle:Activites")->findOneByIdActivite($id);
        return $this->render('MainBundle:Boutique:panier.html.twig', array(
            "prod" => $products
        ));
    }

    /**
     * @Route("/boutique/{id}/modification")
     */
    public function modAction($id)
    {
        $product = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
        return $this->render('MainBundle:Boutique:creation_produit.html.twig', array(
            "prod" => $product
        ));
    }

}
