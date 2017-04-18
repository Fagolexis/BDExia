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

    /**
     * @Route("/utilisateurs/{idUser}")
     */
    public function profilAction($idUser)
    {
        $idUser = $idUser;
        return $this->render('MainBundle:Gestion:profil.html.twig', array(
            'user'=> $idUser,
        ));
    }

}
