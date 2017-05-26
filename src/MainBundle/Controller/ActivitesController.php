<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Model\ActiviteModel;
use MainBundle\Model\ImgModel;
use MainBundle\Model\DateModel;
use Symfony\Component\HttpFoundation\Session\Session;
use MainBundle\Entity\Commentaires;

class ActivitesController extends DefaultController
{
    /**
     * @Route("/activites", name="listAct")
     */
    public function indexAction()
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }

        if(2 == $Session->get('roleUser')) {
            $list = $this->getDoctrine()->getRepository("MainBundle:Activites")->findBy(array('etatAct' => array(1, 2, 3, 4)), array('etatAct' => 'ASC'));
        }
        else {
            $list = $this->getDoctrine()->getRepository("MainBundle:Activites")->findBy(array('etatAct' => array(2, 3, 4)), array('etatAct' => 'ASC'));
        }
        return $this->render('MainBundle:Activites:liste.html.twig', array(
            "list" => $list
        ));
    }

    /**
     * @Route("/activites/creation", name="addAct")
     */
    public function createAction(Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }

        if(2 == $Session->get('roleUser')) {
            $post = $request->request;
            if($post->get('addActForm')!=null) {
                $am = new ActiviteModel();
                $im = new ImgModel();
                $dm = new DateModel();

                $titre = $post->get('titre');
                $desc = $post->get('desc');
                $lieu = $post->get('lieu');
                $date = $post->get('date');
                $time = $post->get('time');
                $img = $request->files->get('imgActCouv');
                $dateDT = new \DateTime($date.$time);
                $age = $post->get('age');
                $prix = $post->get('prix');
                $sub = $post->get('sub');
                $chemin = $this->saveImg($img);
                //Cookie
                $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser(4);
                if(1 == $user->getRoleUser()->getIdRole()) {
                    $etat = $this->getDoctrine()->getRepository("MainBundle:EtatsActivites")->findOneByIdEtat(1);
                }else {
                    $etat = $this->getDoctrine()->getRepository("MainBundle:EtatsActivites")->findOneByIdEtat(2);
                }

                $act = $am->createActivite($titre,$desc,$prix,$lieu,$sub,$age,$user,$etat);

                $type = $this->getDoctrine()->getRepository("MainBundle:Types")->findOneByIdType(1);
                $date = $dm->createDate($type,$dateDT);
                $currdate = $dm->currentDate($type);
                $this->dbUpdate('persist', $currdate);
                $img = $im->createImg($type,$chemin,$currdate,$user);

                $this->dbUpdate('persist', $act);
                $this->dbUpdate('persist', $date);
                $this->dbUpdate('persist', $img);
                $idAct = $act->getIdActivite();
                $idImg = $img->getIdImg();
                $idDate = $date->getIdDate();
                $this->insert($am->addImg($act, $img));
                $this->insert($am->addDate($act, $date));
                return $this->forward("MainBundle:Activites:show", array(
                    "id" => $idAct));
            }
            return $this->render('MainBundle:Activites:modification_activites.html.twig');
        }
        else {
            return $this->forward("MainBundle:Activites:index");
        }
    }

    /**
     * @Route("/activites/{id}", requirements={"id": "\d+"}, name="showAct")
     */
    public function showAction($id, Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }

        $post = $request->request;
        $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($Session->get('idUser'));
        $act = $this->getDoctrine()->getRepository("MainBundle:Activites")->findOneByIdActivite($id);
        $subs = $this->getDoctrine()->getRepository("MainBundle:Inscrits")->findBy(array('inscritAct' => $act->getIdActivite(), 'inscritChoix' => $act->getEtatAct()->getIdEtat()-1));
        $img_t = $act->getImgAct();
        $date_t = $act->getIdDateAct();
        $couv;
        foreach ($img_t as $img) {
            if($img->getTypeImg()->getIdType() == 1) {
                $couv = $img;
            }
        }
        $date;
        foreach ($date_t as $dat) {
            if($dat->getTypeDate()->getIdType() == 2) {
                $date = $dat;
            }
        }
        if($post->get('subAct')!=null) {
            $am = new ActiviteModel();
            $info = $post->get('info');
            $choix = $this->getDoctrine()->getRepository("MainBundle:ChoixVote")->findOneByIdChoix($act->getEtatAct()->getIdEtat()-1); //Vote = Proposée -1 = 2-1 //Inscription = Confirmée -1 = 3-1
            $vote = $am->subAct($user,$act,$choix,$info);
            $this->dbUpdate('persist', $vote);
        }
        return $this->render('MainBundle:Activites:details.html.twig', array(
            "act" => $act,
            "couv" => $couv,
            "date" => $date,
            "subs" => $subs,
            "user" => $user
        ));
    }

    /**
     * @Route("/activites/{id}/photos", name="photosAct")
     */
    public function photosAction($id, Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }

        $post = $request->request;
        $act = $this->getDoctrine()->getRepository("MainBundle:Activites")->findOneByIdActivite($id);
        $photos = $act->getImgAct();
        $comment = array();
        if($post->get('submitComm') != null && $comment = $post->get('Commentaire')) {
            $comm = new Commentaires();
            $idImg = $post->get('idImg');
            $img = $this->getDoctrine()->getRepository('MainBundle:Photos')->findOneByIdImg($idImg);
            $user = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByIdUser($Session->get('idUser'));
            $comm->setImgComm($img)->setAuteurComm($user)->setCommentaire($comment);
            $this->dbUpdate('persist', $comm);
        }
        if($post->get('likePhoto') != null) {
            $idImg = $post->get('idImg');
            $img = $this->getDoctrine()->getRepository('MainBundle:Photos')->findOneByIdImg($idImg);
            $likes = $img->getLikesUser();
            $user = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByIdUser($Session->get('idUser'));
            if($likes->isEmpty()) {
                $img->addLikesUser($user);
                $user->addLikesImg($img);
                $this->dbUpdate('up');
            }
            else {
                foreach ($likes as $like) {
                    if($Session->get('idUser') == $like->getIdUser()) {
                        $img->removeLikesUser($user);
                        $user->removeLikesImg($img);
                        $this->dbUpdate('up');
                    }
                }
            }
        }
        if($post->get('addPhoto') != null) {
            $file = $request->files->get('imgFile');
            $chemin = $this->saveImg($file);
            $im = new ImgModel();
            $dm = new DateModel();
            $type = $this->getDoctrine()->getRepository('MainBundle:Types')->findOneByIdType(2);
            $typem = $this->getDoctrine()->getRepository('MainBundle:Types')->findOneByIdType(1);
            $auteur = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByIdUser($Session->get('idUser'));
            $date = $dm->currentDate($typem);
            $this->dbUpdate('persist', $date);
            $img = $im->createImg($type,$chemin,$date,$auteur);
            $this->dbUpdate('persist', $img);
            $act->addImgAct($img);
            $img->addIdImgAct($act);
            $this->dbUpdate('up');
        }
        $comment = $this->getDoctrine()->getRepository('MainBundle:Commentaires')->findAll();
        return $this->render('MainBundle:Activites:photos.html.twig', array(
            "act" => $act,
            "list" => $photos,
            "coms" => $comment
        ));
    }

    /**
     * @Route("/activites/{id}/inscrits", name="subAct")
     */
    public function subsAction($id)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        
        if(2 == $Session->get('roleUser')) {
            $act = $act = $this->getDoctrine()->getRepository("MainBundle:Activites")->findOneByIdActivite($id);
            $inscrits = $this->getDoctrine()->getRepository("MainBundle:Inscrits")->findBy(array('inscritAct' => $id, 'inscritChoix' => $act->getIdActivite()));
            return $this->render('MainBundle:Activites:inscrits.html.twig', array(
                "list"=>$inscrits,
                "act" => $act
            ));
        }
        else {
            return $this->forward("MainBundle:Activites:index");
        }
    }

    /**
     * @Route("/activites/{id}/modification", name="modAct")
     */
    public function modAction($id, Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        
        if(2 == $Session->get('roleUser')) {
            $act = $this->getDoctrine()->getRepository('MainBundle:Activites')->findOneByIdActivite($id);
            return $this->render('MainBundle:Activites:modification_activites.html.twig', array(
                'act' => $act
        ));
        }
        else {
            return $this->forward("MainBundle:Activites:index");
        }
    }
}
