<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Model\ActiviteModel;
use MainBundle\Model\ImgModel;
use MainBundle\Model\DateModel;

class ActivitesController extends DefaultController
{
    /**
     * @Route("/activites", name="listAct")
     */
    public function indexAction()
    {
        $list = $this->getDoctrine()->getRepository("MainBundle:Activites")->findAll(); //Need order by ASC
        return $this->render('MainBundle:Activites:liste_activites.html.twig', array(
            "list" => $list
        ));
    }

    /**
     * @Route("/activites/creation", name="createtAct")
     */
    public function createAction(Request $request)
    {
        if($this->checkRole(2,2)) {
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
                if($this->checkRole(1, $user->getRoleUser()->getIdRole())) {
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
            return $this->render('MainBundle:Activites:create_activite.html.twig');
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
        $post = $request->request;
        //Cookie
        $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser(4);
        $act = $this->getDoctrine()->getRepository("MainBundle:Activites")->findOneByIdActivite($id);
        $subs = $this->getDoctrine()->getRepository("MainBundle:Inscrits")->findBy(array('inscritAct' => $act->getIdActivite(), 'inscritChoix' => $act->getEtatAct()->getIdEtat()-1));
        if($post->get('subAct')!=null) {
            $am = new ActiviteModel();
            $info = $post->get('info');
            $choix = $this->getDoctrine()->getRepository("MainBundle:ChoixVote")->findOneByIdChoix($act->getEtatAct()->getIdEtat()-1); //Vote = Proposée -1 = 2-1 //Inscription = Confirmée -1 = 3-1
            $vote = $am->subAct($user,$act,$choix,$info);
            $this->dbUpdate('persist', $vote);

        }
        return $this->render('MainBundle:Activites:details_activite.html.twig', array(
            "act" => $act,
            "subs" => $subs,
            "user" => $user
        ));
    }

    /**
     * @Route("/activites/{id}/photos", name="photostAct")
     */
    public function photosAction($id, Request $request)
    {
        $post = $request->request;
        $act = $this->getDoctrine()->getRepository("MainBundle:Activites")->findOneByIdActivite($id);
        $photos = $act->getIdImgAct();
        if($post->get('comAct')!=null) {
        }
        return $this->render('MainBundle:Activites:photo_activite.html.twig', array(
            "act" => $act,
            "photos" => $photos
        ));
    }

    /**
     * @Route("/activites/{id}/inscrits", name="subAct")
     */
    public function subsAction($id)
    {
        if($this->checkRole(2,2)) {
            $inscrits = $this->getDoctrine()->getRepository("MainBundle:Inscrits")->findByInscritAct($id);
            var_dump($inscrits);
            return $this->render('MainBundle:Activites:liste_inscrits.html.twig', array(
                "inscrits"=>$inscrits
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
        if($this->checkRole(2,1)) {
            $act = $this->getDoctrine()->getRepository('MainBundle:Users')->findOneByIdActivite($id);
            return $this->render('MainBundle:Activites:create_activite.html.twig', array(
                'act' => $act
        ));
        }
        else {
            return $this->forward("MainBundle:Activites:index");
        }
    }
}
