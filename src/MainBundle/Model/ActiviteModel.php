<?php

namespace MainBundle\Model;

use MainBundle\Entity\Inscrits;
use MainBundle\Entity\Activites;
use Doctrine\ORM\EntityManager;


class ActiviteModel
{
    public function __construct() {
    }
    
    public function createActivite($nom,$description,$prix,$lieu,$inscritsMax,$ageMin,$user,$etat)
    {
        $activite = new Activites();
        $activite->setNomActivite($nom)->setDescriptionActivite($description)->setPrixActivite($prix)->setLieu($lieu)->setInscritsMax($inscritsMax)->setAgeMin($ageMin)->setAuteurAct($user)->setEtatAct($etat);
        return $activite;
    }

    public function voteAndSubAct($user,$activite,$choix)
    {
    	$vote = new Inscrits();
    	$vote->setInscritAct($activite)->setIdInscrit($user)->setInscritChoix($choix);
    	return $vote;
    }
}