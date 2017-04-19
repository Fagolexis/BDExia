<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConnexionController extends DefaultController
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
