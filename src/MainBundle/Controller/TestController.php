<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Model\UserModel;
use MainBundle\Model\ImgModel;
use MainBundle\Model\DateModel;
use MainBundle\Model\BoutiqueModel;
use MainBundle\Model\ActiviteModel;
use MainBundle\Model\EtatsActivites;
use Doctrine\ORM\EntityManager;

class TestController extends Controller
{
    /**
     * @Route("/indexTest")
     */
    public function indexTestAction(Request $request)
    {

    	$em = $this->getDoctrine()->getManager();    	


    	// ajout d'un nouvel utilisateur

  		// $promoUser = $em->getRepository('MainBundle:Promotions')->find(1);
  		// $roleUser = $em->getRepository('MainBundle:RolesUsers')->find(1);
  		// $user = new UserModel();
  		// $test = $user->createUser('Queruel','Paul','paul.queruel@viacesi.fr','testp',new \DateTime("02-07-1993"),null,$promoUser,$roleUser);
  		// $em->persist($test);
    #####################################################################################################################

    	// suppression d'un utlisateur

    	// $userToDelete = $em->getRepository('MainBundle:Users')->find(4);
    	// $em->remove($userToDelete);
    #####################################################################################################################

    	// ajout d'une nouvelle date

  		// $dateToCreate = new \DateTime(date('Y-m-d H:i:s'));
		// $type = $em->getRepository('MainBundle:Types')->find(1);
		// $dateModel =  new DateModel();
  		// $date = $dateModel->createDate($type,$dateToCreate);
  		
  		//ou 

		// $type = $em->getRepository('MainBundle:Types')->find(1);
		// $dateModel =  new DateModel();
  		// $date = $dateModel->currentDate($type);

  		// $em->persist($date);
    #####################################################################################################################
		
		// ajout d'une nouvelle image (se fait obligatoirement avec l'ajout d'une date)

		// $user = $em->getRepository('MainBundle:Users')->find(1);
		// $image = new ImgModel();
		// $test = $image->createImg($type,'img/jetbear-mnrart.gif',$date,$user);
		// $em->persist($test);
	#####################################################################################################################

		//suppression d'une image

		// $imgToDelete = $em->getRepository('MainBundle:Photos')->find(3);
    	// $em->remove($imgToDelete);
    #####################################################################################################################


    	// commenter une image

    	// $commentaire = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat nunc eu hendrerit cursus. Nulla et pellentesque risus. Proin et orci nec massa bibendum facilisis laoreet ac est. Sed lobortis odio sed turpis commodo dignissim. Integer nec velit libero. Curabitur eu diam tempus arcu bibendum luctus. Mauris eleifend tortor ut feugiat rutrum. Donec interdum egestas dolor nec vehicula. Suspendisse tincidunt sapien luctus, mattis purus sit amet, pharetra tellus. Proin in odio nec lacus tristique posuere eu a ligula. Sed scelerisque tempus libero nec eleifend.';
    	// $img = $em->getRepository('MainBundle:Photos')->find(1);
    	// $auteur = $em->getRepository('MainBundle:Users')->find(2);
    	// $comm = new ImgModel();
    	// $test = $comm->addCommToImg($img,$commentaire,$auteur);
    	// $em->persist($test);
	#####################################################################################################################


    	// supprimer un commentaire

    	// $commToDelete = $em->getRepository('MainBundle:Commentaires')->find(7);
    	// $em->remove($commToDelete);
    #####################################################################################################################


    	// ajout d'un article (obligatoirement accompagné de ajout d'une date)

    	// $boutique = new BoutiqueModel();
  		// $test = $boutique->createArticle($date,20,'Lunette cool','protège bien du soleil et se pose devant les yeux',100);
  		// $em->persist($test);
    #####################################################################################################################


  		// suppression d'un article

  		// $articleToDelete = $em->getRepository('MainBundle:Boutique')->find(3);
  		// $em->remove($articleToDelete);
  	#####################################################################################################################

    	
    	//ajout d'une activité

  		// $user = $em->getRepository('MainBundle:Users')->find(1);
  		// $etat = $em->getRepository('MainBundle:EtatsActivites')->find(1);
    	// $activite = new ActiviteModel();
    	// $test = $activite->createActivite('journée piscine','il y a de l\'eau et du soleil',10,'dans une piscine',$date,12,16,$user,$etat);
    	// $em->persist($test);
    #####################################################################################################################


    	// vote ou inscription à une activité

  		// utiliser cette ligne pour un vote
  		// $choix = $em->getRepository('MainBundle:ChoixVote')->find(1);

  		// utiliser cette ligne pour une inscription
  		// $choix = $em->getRepository('MainBundle:ChoixVote')->find(2);

  		// $activite = $em->getRepository('MainBundle:Activites')->find(1);
  		// $user = $em->getRepository('MainBundle:Users')->find(1);
		// $subOrVote = new ActiviteModel();
		// $test = $subOrVote->voteAndSubAct($user,$activite,$choix);
		// $em->persist($test);
    #####################################################################################################################


  		//achat d'un ou plusieur objet(s)

		// $nbrAchat = 3;
  		// $articleToBuy = $em->getRepository('MainBundle:Boutique')->find(2);
  		// $articleToBuy->setStock($articleToBuy->getStock()-$nbrAchat);
  		// $em->persist($articleToBuy);
  	#####################################################################################################################


    	//modifier un article

    	$articleToModif = $em->getRepository('MainBundle:Boutique')->find(2);
    	$boutique = new BoutiqueModel();
    	$variables = array('stock' => 25 ); // exemple modifie le stock
    	$test = $boutique->modifyArticle($articleToModif,$variables);
    	$em->persist($test);
    #####################################################################################################################
    	

    	// liker une photo

    	// $img = $em->getRepository('MainBundle:Photos')->findOneByIdImg(2);

    	// $auteur = $em->getRepository('MainBundle:Users')->find(17);
    	// $image = new ImgModel();

    	// $test = $image->addLikeToImg($img,$auteur);

    	// $em->persist($test);
		

    	
		
		// $img = $this->getDoctrine()->getRepository("MainBundle:Photos")->findOneByIdImg(2);
		// $imgModel = new ImgModel();
		// $img = $imgModel->addLikeToImg($img, $auteur);
		// $users = $img->getLikesUser();
		 


		$em->flush();

		$test = 'bonjour';
        $render;
        //if connexion établie
        $render = $this->render('MainBundle:test:test.html.twig', array("test"=>$test));
        //else
    	
        return $render;
    }

}