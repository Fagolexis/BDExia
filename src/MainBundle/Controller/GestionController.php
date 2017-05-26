<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use MainBundle\Model\ImgModel;
use MainBundle\Model\DateModel;

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
        $list = $this->getDoctrine()->getRepository("MainBundle:Users")->findAll();
        return $this->render('MainBundle:Gestion:gestion_utilisateurs.html.twig', array(
            "list" => $list,
            "err" => $error
        ));
    }

    /**
     * @Route("/utilisateurs/{id}", requirements={"id": "\d+"}, name="profil")
     */
    public function showAction($id, Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        
        if($Session->get('idUser') != $id) {
            $attr = "disabled";
            $attr2 = "disabled";
        }
        else {
            $attr = "required";
            $attr2 = "";
        }
        $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($id);
        $post = $request->request;
        if($post->get('discard') != null) {
            return $this->forward('MainBundle:Connexion:index');
        }
        elseif($post->get('saveProfil') != null) {
            $Nom = $post->get('Nom');
            $Prenom = $post->get('Prenom');
            $Email = $post->get('Email');
            $Pswd = $post->get('Mdp');
            $Date = $post->get('Naissance');
            $Promo = $post->get('Promo');
            $Avatar = $request->files->get('Avatar');
            $Phone = $post->get('Telephone');
            if(isset($Nom) && !empty($Nom) && $Nom != $user->getNom()) {
                $user->setNom($Nom);
            }
            if(isset($Prenom) && !empty($Prenom) && $Prenom != $user->getPrenom()) {
                $user->setPrenom($Prenom);
            }
            if(isset($Email) && !empty($Email) && $Email != $user->getMail()) {
                $user->setMail($Email);
            }
            if(isset($Date) && !empty($Date) && $Date != $user->getNaissance()->format('Y-m-d')) {
                $date = new \DateTime($Date);
                $user->setNaissance($date);
            }
            if(isset($Promo) && !empty($Promo) && $Promo != $user->getPromoUser()) {
                $promo = $this->getDoctrine()->getRepository('MainBundle:Promotions')->findOneByIdPromo($Promo);
                $user->setPromoUser($promo);
            }
            if($user->getAvatarUser() != null) {
                if(isset($Avatar) && !empty($Avatar) && $Avatar != $user->getAvatarUser()->getChemin()) {
                    $img = $user->getAvatarUser();
                    $file = saveImg($Avatar);
                    $img->setChemin($file);
                    $user->setAvatarUser($img);
                    $this->dbUpdate('up');
                }
            }
            else {
                if(isset($Avatar) && !empty($Avatar)) {
                    $iM = new ImgModel();
                    $dM = new DateModel();
                    $type = $this->getDoctrine()->getRepository('MainBundle:Types')->findOneByIdType(1);
                    $date = $dM->currentDate($type);
                    $this->dbUpdate('persist', $date);
                    $chemin = $this->saveImg($Avatar);
                    $img = $iM->createImg($type,$chemin,$date,$user);
                    $this->dbUpdate('persist', $img);
                    $user->setAvatarUser($img);
                    $this->dbUpdate('up');
                }
            }
            if(isset($Phone) && !empty($Phone) && $Phone != $user->getTelephone()) {
                $user->setTelephone($Phone);
            }
            if(isset($Pswd) && !empty($Pswd) && $Pswd != $user->getMdp()) {
                $user->setMdp($Pswd);
            }
            $this->dbUpdate('up', $user);
        }
        
        $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($id);
        return $this->render('MainBundle:Gestion:profil.html.twig', array(
            'user'=> $user,
            'attr' => $attr,
            'attr2' => $attr2
        ));
    }

}
