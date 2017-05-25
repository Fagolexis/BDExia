<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class GestionController extends DefaultController
{
    /**
     * @Route("/utilisateurs", name="admin")
     */
    public function indexAction(Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        $list = $this->getDoctrine()->getRepository("MainBundle:Users")->findAll();
        $post = $request->request;
        if($post->get('idUser')) {
            $user = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByIdUser($post->get('idUser'));
            if($user->getIdUser() != $Session->get('idUser')) {
                foreach ($list as $us) {
                    $can = true;
                    if($us->getRoleUser()->getIdRole() == 3) {
                        $can = false;
                    }
                }
                if($can) {
                    if($post->get('delUser')) {
                        $this->dbUpdate('remove', $user);
                    }
                    elseif($post->get('upUser')) {
                        if($user->getRoleUser()->getIdRole() == 1) {
                            $role = $this->getDoctrine()->getRepository('MainBundle:RolesUsers')->findOneByIdRole(2);
                            $user->setRoleUser($role);
                            $this->dbUpdate('up', $user);
                        }
                        else {
                            $error = "Cet utilisateur est déjà un membre du BDE.";
                        }
                    }
                    elseif($post->get('downUser')) {
                        if($user->getRoleUser()->getIdRole() == 2) {
                            $role = $this->getDoctrine()->getRepository('MainBundle:RolesUsers')->findOneByIdRole(1);
                            $user->setRoleUser($role);
                            $this->dbUpdate('up', $user);
                        }
                        else {
                            $error = "Cet utilisateur est déjà un étudiant.";
                        }
                    }
                    else {
                        $error = "Action non reconnue.";
                    }
                }
                else {
                    $error = "Vous ne pouvez pas supprimer ni changer le rôle d'un membre du CESI.";
                }
            }
            else {
                $error = "Vous ne pouvez pas supprimer votre compte ni changer votre rôle.";
            }
        }

        if(!isset($error)) {
            $error = "";
        }
        return $this->render('MainBundle:Gestion:gestion_utilisateurs.html.twig', array(
            "list" => $list,
            "err" => $error
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
