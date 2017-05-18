<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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

    protected function checkRole($wanted, $current) {
    	if($current == $wanted) {
    		return true;
    	}
    	else {
    		return false;
    	}
    }

    protected function saveImg($img) {
        $dossier = $this->get('kernel')->getRootDir() . '/../web/img/';
        $fichier = basename($img->getClientOriginalName());
        $taille_maxi = 10000000;
        $taille = $img->getClientSize();
        $extensions = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
        $extension = $img->getMimeType();
        if(!in_array($extension, $extensions)) {
            $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg.';
        }
        if($taille>$taille_maxi) {
            $erreur = 'Le fichier est trop volumineux.';
        }
        if(!isset($erreur)) {
            $fichier = strtr($fichier, 
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

            $img->move($dossier, $fichier);
            if(file_exists($dossier.$fichier)) {
                $erreur = 'Echec de l\'upload !';
            }

            return $fichier;
        }
        else {
            return $erreur;
        }
    }

    protected function insert($array) {
        $this->getDoctrine()->getConnection()->executeUpdate($array['sql'], $array['param']);
=======
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
