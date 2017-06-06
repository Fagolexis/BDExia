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
    public function indexAction(Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }

        $list = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findAll();
        $post = $request->request;
        if(!empty($srch = $post->get('srch'))) {
            $list = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findByNomProduit($srch);
        }

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
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        
        if(3 == $Session->get('roleUser')) {
            $post = $request->request;
            if($post->get('addProd')!=null) {
                $bm = new BoutiqueModel();
                $im = new ImgModel();
                $dm = new DateModel();

                $nom = $post->get('nom');
                $desc = $post->get('desc');
                $img = $request->files->get('prodImg');
                $prix = $post->get('prix');
                $stock = $post->get('stock');

                $chemin = $this->saveImg($img);
                $date = $dm->currentDate($type = $this->getDoctrine()->getRepository("MainBundle:Types")->findOneByIdType(1));
                $this->dbUpdate('persist', $date);
                $prod = $bm->createArticle($date,$stock,$nom,$desc,$prix);
                $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($Session->get('idUser'));
                $img = $im->createImg($type,$chemin,$date,$user);

                $this->dbUpdate('persist', $prod);
                $this->dbUpdate('persist', $date);
                $this->dbUpdate('persist', $img);
                $prod->addImgProd($img);
                $img->addIdImgProd($prod);
                $this->dbUpdate('up');
                $id = $prod->getIdProduit();
                return $this->forward("MainBundle:Boutique:show", array(
                    "id" => $id));
            }
            return $this->render('MainBundle:Boutique:modif_produit.html.twig');
        }
        else {
            return $this->forward("MainBundle:Boutique:index");
        }
        return $this->render('MainBundle:Boutique:index.html.twig', array());
    }
        

    /**
     * @Route("/boutique/{id}", requirements={"id": "\d+"}, name="produit")
     */
    public function showAction($id, Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        $post = $request->request;
        if($post->get('buyProd')!=null) {
            $qt = $post->get('Quantite');
            $id = $post->get('id');
            $cart = $Session->get('cart');
            if(empty($cart[$id])) {
                $cart[$id] = null;
            }
            $cart[$id] = (isset($qt)) ? $cart[$id]+$qt : $qt;
            $Session->set('cart', $cart);
        }
        
        $product = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
        return $this->render('MainBundle:Boutique:show.html.twig', array(
            'prod'=> $product
        ));
    }

    /**
     * @Route("/boutique/panier", name="cart")
     */
    public function cartAction()
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }
        $i=0;
        foreach ($Session->get('cart') as $id => $qt) {
            $products[$i]['prod'] = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
            $products[$i]['qt'] = $qt;
            $i++;
        }
        if(!isset($products)) {
            $products = null;
        }
        return $this->render('MainBundle:Boutique:panier.html.twig', array(
            "produits" => $products
        ));
    }

    /**
     * @Route("/boutique/{id}/modification", requirements={"id": "\d+"}, name="modProd")
     */
    public function modAction($id, Request $request)
    {
        $Session = new Session();
        if($Session->get('idUser') == null) {
            return $this->forward('MainBundle:Connexion:connexion');
        }

        $post = $request->request;
        if(3 == $Session->get('roleUser')) {
            if($post->get('delProd')!=null) {
                $prod = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
                $this->dbUpdate("remove", $prod);
                return $this->forward('MainBundle:Boutique:index');
            }
            elseif($post->get('modProd')!=null) {
                $bm = new BoutiqueModel();
                $im = new ImgModel();
                $dm = new DateModel();


                $prod = $this->getDoctrine()->getRepository('MainBundle:Boutique')->findOneByIdProduit($id);

                $nom = $post->get('nom');
                if($nom != $prod->getNomProduit()){ $prod->setNomProduit($nom); }
                $desc = $post->get('desc');
                if($desc != $prod->getdescriptionProduit()){ $prod->setdescriptionProduit($desc); }
                $img = $request->files->get('prodImg');
                $prix = $post->get('prix');
                if($prix != $prod->getPrixProduit()){ $prod->setPrixProduit($prix); }
                $stock = $post->get('stock');
                if($stock != $prod->getStock()){ $prod->setStock($stock); }
                $this->dbUpdate('up');

                if(!empty($img)) {
                    $chemin = $this->saveImg($img);
                    $prod = $this->getDoctrine()->getRepository('MainBundle:Boutique')->findOneByIdProduit($id);
                    $user = $this->getDoctrine()->getRepository("MainBundle:Users")->findOneByIdUser($Session->get('idUser'));
                    $type = $this->getDoctrine()->getRepository('MainBundle:Types')->findOneByIdType(1);
                    $date = $dm->currentDate($type);
                    $this->dbUpdate('persist', $date);
                    $img = $im->createImg($type,$chemin,$date,$user);
                    $this->dbUpdate('persist', $img);
                    foreach ($prod->getImgProd() as $imgsProd) {
                        if($imgsProd->getTypeImg()->getIdType() == 1) {
                            $imgProd = $imgsProd;
                        }
                    }
                    $imgProd->removeIdImgProd($prod);
                    $prod->removeImgProd($imgProd);
                    $prod->addImgProd($img);
                    $img->addIdImgProd($prod);
                }
                return $this->forward("MainBundle:Boutique:show", array(
                    'id' => $id
                ));
            }
        }

        $product = $this->getDoctrine()->getRepository("MainBundle:Boutique")->findOneByIdProduit($id);
        return $this->render('MainBundle:Boutique:modif_produit.html.twig', array(
            "produit" => $product
        ));
    }

}
