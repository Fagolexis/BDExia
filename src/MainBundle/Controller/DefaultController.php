<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

abstract class DefaultController extends Controller
{

    protected function dbSave($method, $obj_record)
    {
    	$em = $this->getDoctrine()->getManager();
    	if($method == "persist") {
    		$em->persist($obj_record);
    	} else if ($method == "merge") {
    		$em->merge($obj_record);
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
