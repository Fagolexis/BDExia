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
        return $this->render('MainBundle:Gestion:gestion_utilisateurs.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/utilisateurs/{id}")
     */
    public function showAction($id)
    {
        return $this->render('MainBundle:Gestion:profil.html.twig', array(
            'user'=> $id,
        ));
    }

}
