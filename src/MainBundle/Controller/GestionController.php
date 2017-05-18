<?php

namespace MainBundle\Controller;

<<<<<<< HEAD
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GestionController extends Controller
=======
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GestionController extends DefaultController
>>>>>>> models
{
    /**
     * @Route("/utilisateurs")
     */
<<<<<<< HEAD
    public function gestionUtilisateursAction()
    {
=======
    public function indexAction()
    {
        $list = $this->getDoctrine()->getRepository("MainBundle:Users")->findAll();
>>>>>>> models
        return $this->render('MainBundle:Gestion:gestion_utilisateurs.html.twig', array(
            // ...
        ));
    }

    /**
<<<<<<< HEAD
     * @Route("/utilisateurs/{idUser}")
     */
    public function profilAction($idUser)
    {
        $idUser = $idUser;
        return $this->render('MainBundle:Gestion:profil.html.twig', array(
            'user'=> $idUser,
=======
     * @Route("/utilisateurs/{id}")
     */
    public function showAction($id)
    {
        $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($id);
        return $this->render('MainBundle:Gestion:profil.html.twig', array(
            'user'=> $user,
>>>>>>> models
        ));
    }

}
