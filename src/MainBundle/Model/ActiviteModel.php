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

    public function subAct($user,$activite,$choix,$info)
    {
    	$vote = new Inscrits();
    	$vote->setInscritAct($activite)->setIdInscrit($user)->setInscritChoix($choix)->setInformations($info);
    	return $vote;
    }

    public function addImg($act, $img) {
        $sql="INSERT INTO im_act (`ID_IMG_ACT`, `IMG_ACT`) VALUES (:idAct, :idImg)";
        $param=array("idAct" => $act->getIdActivite(), "idImg" => $img->getIdImg());
        return array("sql" => $sql, "param" => $param);
    }

    public function addDate($act, $date) {
        $sql="INSERT INTO date_act (`ID_DATE_ACT`, `DATE_ACT`) VALUES (:idDate, :idAct)";
        $param=array("idAct" => $act->getIdActivite(), "idDate" => $date->getIdDate());
        return array("sql" => $sql, "param" => $param);
    }
}