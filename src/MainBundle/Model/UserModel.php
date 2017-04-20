<?php

namespace MainBundle\Model;

use MainBundle\Entity\Users;

class UserModel
{
    public function __construct() {
    }

    public function getUsers() {
        $test = $this->getDoctrine()->getRepository("MainBundle:Users")->findAll();
        return $test;
    }

    public function createUser($nom,$prenom,$mail,$mdp,$naissance,$telephone,$promoUser,$roleUser){
        $user = new Users();
        $user->setNom($nom)->setPrenom($prenom)->setMail($mail)->setMdp($mdp)->setNaissance($naissance)->setTelephone($telephone)->setPromoUser($promoUser)->setRoleUser($roleUser)->setAvatarUser(null);
        return $user;
    }
}