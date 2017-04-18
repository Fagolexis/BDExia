<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ActiviteesController extends Controller
{
    /**
     * @Route("/activitees")
     */
    public function listeActiviteesAction()
    {
        return $this->render('MainBundle:Activitees:liste_activitees.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activitees/{id}")
     */
    public function detailsActiviteesAction($id)
    {
        return $this->render('MainBundle:Activitees:details_activitees.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activitees/{id}/photos")
     */
    public function photoActiviteeAction($id)
    {
        return $this->render('MainBundle:Activitees:photo_activitee.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activitees/{id}/inscrits")
     */
    public function listeInscritsAction($id)
    {
        return $this->render('MainBundle:Activitees:liste_inscrits.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activitees/{id}/modification")
     */
    public function modificationActiviteeAction($id)
    {
        return $this->render('MainBundle:Activitees:modification_activitee.html.twig', array(
            // ...
        ));
    }

}
