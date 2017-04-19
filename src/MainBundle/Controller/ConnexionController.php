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
       	$mailUser = $request->request->get('mail');
    	$pswrdUser = $request->request->get('password');
    	session_name('utilisateur');
    	$_SESSION['mail'] = $mailUser;
    	$_SESSION['password'] = $pswrdUser;
    	$user = $this->getDoctrine()
        ->getRepository('MainBundle:Users')
        ->findOneBy(array('mail' => $_SESSION['mail']));
        $errorMessage ='';
    	if ($_SESSION['password']=='' && $_SESSION['mail']=='') {
    		return $this->render('MainBundle:Connexion:connexion.html.twig', array(
        	'mail'=>$_SESSION['mail'],
        	'password'=>$_SESSION['password'],
        	'errormessage' => $errorMessage
        	));       	
    	}
    	elseif ($_SESSION['password']!='' && $_SESSION['mail']!='') {	    		
        	if ($user!='') {
        		if ($user->getMdp()==$pswrdUser = $request->get('password')) {
		    		session_start();
				    return $this->render('MainBundle:Accueil:accueil.html.twig', array(
		        	'mail'=>$_SESSION['mail'],
		        	'password'=>$_SESSION['password']
		        	)); 
        		}   
        		else{
	    			$errorMessage = 'mauvais mot de passe';
		    		return $this->render('MainBundle:Connexion:connexion.html.twig', array(
		        	'mail'=>$_SESSION['mail']
,		        	'password'=>$_SESSION['password'],
	        		'errormessage' => $errorMessage
		        	)); 
        		}	
       		}   
	        else {
    			$errorMessage = 'cet utilisateur n\'existe pas';
	    		return $this->render('MainBundle:Connexion:connexion.html.twig', array(
	        	'mail'=>$_SESSION['mail'],
	        	'password'=>$_SESSION['password'],
        		'errormessage' => $errorMessage
	        	)); 
	        }
    	} 
    	session_write_close();
    }
}
