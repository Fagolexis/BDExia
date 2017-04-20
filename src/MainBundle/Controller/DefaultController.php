<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use MainBundle\Model\UserModel;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MainBundle:Default:index.html.twig');
    }

    /**
     * @Route("/testage")
     */
    public function testAction()
    {
    	$theUser = new UserModel();
        $test = $theUser->getEcho();
    	// $newUser = $user->newUser('Paul','Queruel','paul.queruel@viacesi.fr','testp','2000-01-01','');
        return $this->render('MainBundle:Default:index.html.twig', array("test"=>$test));
    }
}
