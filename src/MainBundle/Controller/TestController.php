<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MainBundle\Model\UserModel;

class TestController extends DefaultController
{
    /**
     * @Route("/indexTest")
     */
    public function indexTestAction()
    {
        return $this->render('MainBundle:Test:index_test.html.twig', array(
        ));
    }

}
