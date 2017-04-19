<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ActivitesController extends Controller
{
    /**
     * @Route("/activites")
     */
    public function listeActivitesAction()
    {
        return $this->render('MainBundle:Activites:liste_activites.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activites/{idActivite}")
     */
    public function detailsActivitesAction($idActivite)
    {
        return $this->render('MainBundle:Activites:details_activites.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activites/{idActivite}/photo")
     */
    public function photoActivitesAction($idActivite)
    {
        return $this->render('MainBundle:Activites:photo_activites.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activites/{idActivite}/inscrits")
     */
    public function listeInscritsAction($id)
    {
        return $this->render('MainBundle:Activites:liste_inscrits.html.twig', array(
            "act"=>$id
        ));
    }

    /**
     * @Route("/activites/{idActivite}/modification")
     */
    public function modificationActivitesAction($idActivite)
    {
        $users = $this->getDoctrine()
        ->getRepository('MainBundle:Users')
        ->findAll();
        // $users = var_dump($users);
        return $this->render('MainBundle:Activites:modification_activites.html.twig', array(
            'users' => $users
        ));
    }
}
