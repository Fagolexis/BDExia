<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouteCollection;
use MainBundle\Model\UserModel;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Cookie;

class ConnexionController extends DefaultController
{
	/**
     * @Route("/", name="Accueil")
     */
    public function indexAction()
    {
		$Session = new Session();
    	if($Session->get('idUser')==null) {
    		return $this->forward('MainBundle:Connexion:connexion');
    	}
    	else {
    		$conf = $this->getDoctrine()->getRepository("MainBundle:Activites")->findBy(array('etatAct' => 3), null, 3, null);
    		$prop = $this->getDoctrine()->getRepository("MainBundle:Activites")->findBy(array('etatAct' => 2), null, 5, null);
            $user = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByIdUser($Session->get('idUser'));
            $var = $user->getRoleUser()->getIdRole();
    		return $this->render('MainBundle:Accueil:index.html.twig', array(
    			"conf" => $conf,
    			"prop" => $prop
            ));
    	}
    }

    /**
     * @Route("/connexion", name="cnx")
     */
    public function connexionAction(Request $request) {
		$Session = new Session();
		if($Session->get('idUser')!=null) {
    		return $this->forward('MainBundle:Connexion:accueil');
    	}

		$Session->clear();
		$errorMessage = '';
		$post = $request->request;
	    if ($post->get('submitConnexion')!=null) {
		    $mailUser = $post->get('Email');
		    $pswrdUser = $post->get('Mdp');
		    $user = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByMail($mailUser);
		    if (isset($user)) {
		    	if ($user->getMdp()==$pswrdUser) {
		    		$Session->start();
		    		$Session->set('idUser', $user->getIdUser());
		    		$Session->set('roleUser', $user->getRoleUser()->getIdRole());
				    return $this->forward("MainBundle:Connexion:index");
		    	}   
		    	else {
					$errorMessage = 'Mauvais mot de passe.';
					return $this->render('MainBundle:Connexion:connexion.html.twig', array(
					'errormessage' => $errorMessage
			    	)); 
		    	}	
		    }
			else {
		    	$errorMessage = 'Cet utilisateur n\'existe pas.';
				return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		    	'errormessage' => $errorMessage
				)); 
			}
	    }
	    elseif($post->get('submitInscription')!=null) {
		   	$NomUser = $request->request->get('Nom');
			$PrenomUser = $request->request->get('Prenom');
		   	$EmailUser = $request->request->get('Email');
			$PswrdUser = $request->request->get('Mdp');
			$DateUser = $request->request->get('Naissance');
			$PromoUser = $request->request->get('Promo');
		   	$AvatarUser = $request->request->get('Avatar');
		   	$PhoneUser = $request->request->get('Telephone');
			if (isset($NomUser) && isset($PrenomUser) && isset($EmailUser) && isset($PswrdUser) && isset($DateUser)) {
				$user = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByMail($EmailUser);
				if(!isset($user)) {

		    		$em = $this->getDoctrine()->getManager();
		    		$promoUser = $em->getRepository('MainBundle:Promotions')->find($PromoUser);
		    		$roleUser = $em->getRepository('MainBundle:RolesUsers')->find(1);
		    		$uM = new UserModel();
		    		$newUser = $uM->createUser($NomUser,$PrenomUser,$EmailUser,$PswrdUser, new \DateTime($DateUser),$PhoneUser,$promoUser,$roleUser);
					$this->dbUpdate("persist", $newUser);
	    			$Session->start();
	    			$Session->set('idUser', $newUser->getIdUser());
	    			$Session->set('roleUser', $newUser->getRoleUser()->getIdRole());
				    return $this->forward("MainBundle:Connexion:index");
		    	} 
				else {
					$errorMessage = 'Cette adrresse mail est déjà utilisée.';
		    		return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		    		'errormessage' => $errorMessage
		        	)); 
				}  		
			}
			else {
				$errorMessage = 'Inscription non valide.';
		    	return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		    	'errormessage' => $errorMessage
		       	)); 
			}
		}
		else {
			return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		    	'errormessage' => $errorMessage
		       	)); 
		}
	}

	/**
     * @Route("/deconnexion", name="deco")
     */
    public function deconnexionAction()
    {
		$Session = new Session();
    	$Session->clear();
    	return $this->forward("MainBundle:Connexion:index");
    }
}