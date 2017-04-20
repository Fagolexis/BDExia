<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;

class ConnexionController extends DefaultController
{
    /**
     * @Route("/")
     */
    public function ConnexionAction(Request $request)
    {
		$errorMessage = '';
    	if (isset($_POST['submitConnexion'])) {
		       	$mailUser = $request->request->get('mail');
		    	$pswrdUser = $request->request->get('password');


		    	$user = $this->getDoctrine()
		        ->getRepository('MainBundle:Users')
		        ->findOneBy(array('mail' => $mailUser));

		        $errorMessage ='';

		    	if ($pswrdUser!='' && $mailUser!='') {	    		
		        	if ($user!='') {
		        		if ($user->getMdp()==$pswrdUser) {

					    	session_name('$user->getIdUser()');
					    	$_SESSION['idUser'] = $user->getIdUser();
					    	$_SESSION['roleUser'] = $user->getRoleUser();
				    		session_start();
						    return $this->render('MainBundle:Accueil:accueil.html.twig', array(
				        	'user'=>$user
				        	)); 
		        		}   
		        		else {
			    			$errorMessage = 'mauvais mot de passe';
				    		return $this->render('MainBundle:Connexion:connexion.html.twig', array(
			        		'errormessage' => $errorMessage
				        	)); 
		        		}	
		       		}
			        else {
		    			$errorMessage = 'cet utilisateur n\'existe pas';
			    		return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		        		'errormessage' => $errorMessage
			        	)); 
			        }
		    	}
    	}
    	
    	elseif (isset($_POST['submitInscription'])) {
		       	$NomlUser = $request->request->get('Nom');
		    	$PrenomUser = $request->request->get('Prenom');
		       	$EmailUser = $request->request->get('Email');
		    	$PswrdUser = $request->request->get('Password');
		    	$PromoUser = $request->request->get('Promotion');
		       	$AvatarUser = $request->request->get('Avatar');
		       	$PhoneUser = $request->request->get('Telephone');

		    	$user = $this->getDoctrine()
		        ->getRepository('MainBundle:Users')
		        ->findOneBy(array('mail' => $EmailUser));

		    	if ($NomlUser!='' && $PrenomUser!='' && $EmailUser!='' && $PswrdUser!='') {

					session_name('$user->getIdUser()');
					$_SESSION['idUser'] = $user->getIdUser();
					$_SESSION['roleUser'] = $user->getRoleUser();

		    		return $this->render('MainBundle:Gestion:profil.html.twig', array(
		        	'user'=>$user
		        	));     		
		    	}
		    	else {
		    		$errorMessage = 'non valide';
			    	return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		        	'errormessage' => $errorMessage
			       	)); 
		    	}
    		}	
		return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		'errormessage' => $errorMessage
		)); 
    }
}
