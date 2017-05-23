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
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        
        $list = $this->getDoctrine()->getRepository("MainBundle:Users")->findAll();
        return $this->render('MainBundle:Gestion:gestion_utilisateurs.html.twig', array(
            "list" => $list
        ));
    }

    /**
     * @Route("/utilisateurs/{id}", requirements={"id": "\d+"}, name="profil")
     */
    public function showAction($id)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        
        $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($id);
        return $this->render('MainBundle:Gestion:profil.html.twig', array(
            'user'=> $user
        ));
    }

}
