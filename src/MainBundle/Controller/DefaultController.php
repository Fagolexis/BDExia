<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

abstract class DefaultController extends Controller
{
	$em = $this->getDoctrine()->getManager();

    protected function dbSave($method, $obj_record)
    {
    	if($method == "persist") {
    		$this->em->persist($obj_record);
    	} else if ($method == "merge") {
    		$this->em->merge($obj_record);
    	} else {
    		return "Error : unknown method";
    	}
    }

    protected function checkRole($wanted, $cookie) {
    	//if cookie role == wanted role
    	//return true
    	//else
    	//return false
    }
}
