<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConnexionController extends Controller
{
    /**
     * @Route("/")
     */
    public function ConnexionAction()
    {
        return $this->render('MainBundle:Connexion:connexion.html.twig', array(
            // ...
        ));
    }

}
