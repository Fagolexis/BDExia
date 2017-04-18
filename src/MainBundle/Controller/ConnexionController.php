<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConnexionController extends Controller
{
    /**
     * @Route("/connexion")
     */
    public function connexionAction()
    {
        return $this->render('MainBundle:Connexion:connexion.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/profil_{id}")
     */
    public function profilAction($id)
    {
        $idUser = $id;
        return $this->render('MainBundle:Connexion:profil.html.twig', array(
            'user'=> $idUser,
        ));
    }

}
