<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GestionController extends DefaultController
{
    /**
     * @Route("/utilisateurs")
     */
    public function indexAction()
    {
        $list = $this->getDoctrine()->getRepository("MainBundle:Users")->findAll();
        return $this->render('MainBundle:Gestion:gestion_utilisateurs.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/utilisateurs/{id}")
     */
    public function showAction($id)
    {
        $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($id);
        return $this->render('MainBundle:Gestion:profil.html.twig', array(
            'user'=> $user,
        ));
    }

}
