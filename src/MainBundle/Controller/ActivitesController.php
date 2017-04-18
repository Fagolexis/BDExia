<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     * @Route("/activites/{id}/inscrits")
     */
    public function listeInscritsAction($idActivite)
    {
        return $this->render('MainBundle:Activites:liste_inscrits.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activites/{id}/modification")
     */
    public function modificationActivitesAction($idActivite)
    {
        return $this->render('MainBundle:Activites:modification_activites.html.twig', array(
            // ...
        ));
    }

}
