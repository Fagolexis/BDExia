<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GestionController extends Controller
{
    /**
     * @Route("/utilisateurs")
     */
    public function gestionUtilisateursAction()
    {
        return $this->render('MainBundle:Gestion:gestion_utilisateurs.html.twig', array(
            // ...
        ));
    }

}
