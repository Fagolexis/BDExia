<?php

namespace MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Model\BoutiqueModel;
use MainBundle\Model\ImgModel;
use MainBundle\Model\DateModel;
use Symfony\Component\HttpFoundation\Session\Session;

class BoutiqueController extends DefaultController
{
    /**
     * @Route("/boutique", name="boutique")
     */
    public function indexAction()
    {
        $list = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findAll();
        return $this->render('MainBundle:Boutique:index.html.twig', array(
            "list" => $list
        ));
    }

    /**
     * @Route("/boutique/creation", name="addProd")
     */
    public function addAction(Request $request)
    {
        $Session = new Session();
        if($this->checkRole(3,$Session->get('roleUser'))) {
            $post = $request->request;
            if($post->get('addProd')!=null) {
                $bm = new BoutiqueModel();
                $im = new ImgModel();
                $dm = new DateModel();

                $titre = $post->get('titre');
                $desc = $post->get('desc');
                $img = $request->files->get('prodImg');
                $prix = $post->get('prix');
                $chemin = $this->saveImg($img);
                $date = $dm->currentDate($type = $this->getDoctrine()->getRepository("MainBundle:Types")->findOneByIdType(1));
                $this->dbUpdate('persist', $currdate);
                $prod = $bm->createArticle($date,$stock,$nom,$description,$prix);
                $img = $im->createImg($type,$chemin,$currdate,$user);

                $this->dbUpdate('persist', $prod);
                $this->dbUpdate('persist', $date);
                $this->dbUpdate('persist', $img);
                $this->insert($am->addImg($prod, $img));
                return $this->forward("MainBundle:Activites:show", array(
                    "id" => $idAct));
            }
            return $this->render('MainBundle:Boutique:modif_produit.html.twig');
        }
        else {
            return $this->forward("MainBundle:Boutique:index");
        }
        return $this->render('MainBundle:Boutique:index.html.twig', array());
    }
        

    /**
     * @Route("/boutique/{id}", name="produit")
     */
    public function showAction($id)
    {
        $product = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
        return $this->render('MainBundle:Boutique:show.html.twig', array(
            'prod'=> $product,
        ));
    }

    /**
     * @Route("/boutique/panier")
     */
    public function cartAction()
    {
        $products[] = $this->getDoctrine()->getRepository("MainBundle:Activites")->findOneByIdActivite($id);
        return $this->render('MainBundle:Boutique:panier.html.twig', array(
            "produits" => $produits
        ));
    }

    /**
     * @Route("/boutique/{id}/modification")
     */
    public function modAction($id)
    {
        $product = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
        return $this->render('MainBundle:Boutique:modif_produit.html.twig', array(
            "produit" => $product
        ));
    }

}
