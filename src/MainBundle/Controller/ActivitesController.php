<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ActivitesController extends DefaultController
{
    /**
     * @Route("/activites")
     */
    public function indexAction()
    {
        return parent::render('MainBundle:Activites:liste_activites.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activites/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {
        return $this->render('MainBundle:Activites:details_activites.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activites/{id}/photo")
     */
    public function photosAction($id)
    {
        return $this->render('MainBundle:Activites:photo_activites.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/activites/{id}/inscrits")
     */
    public function subsAction($id)
    {
        return $this->render('MainBundle:Activites:liste_inscrits.html.twig', array(
            "act"=>$id
        ));
    }

    /**
     * @Route("/activites/{id}/modification")
     */
    public function modAction($id)
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
