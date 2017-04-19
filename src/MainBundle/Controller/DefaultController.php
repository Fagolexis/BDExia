<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

abstract class DefaultController extends Controller
{

    protected function dbUpdate($method, $obj_record)
    {
    	$em = $this->getDoctrine()->getManager();
    	switch($method) {
    		case 'persist':
    			$em->persist($obj_record);
    			break;
    		case 'merge';
    			$em->merge($obj_record);
    			break;
    		case 'remove':
    			$em->remove($obj_record);
    			break;
    		default:
    			return false;
    	}
    	$em->flush();
    }

    protected function checkRole($wanted, $curent) {
    	if($current == $wanted) {
    		return true;
    	}
    	else {
    		return false;
    	}
    }
}
