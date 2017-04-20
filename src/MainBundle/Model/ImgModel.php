<?php

namespace MainBundle\Model;

use MainBundle\Entity\Photos;
use MainBundle\Entity\Commentaires;


class ImgModel
{
    public function __construct() {
    }

    public function createImg($type,$chemin,$date,$auteur)
    {
        $photo = new Photos();
        $photo->setChemin($chemin)->setDateImg($date)->setTypeImg($type)->setAuteurImg($auteur);
        return $photo;
    }

    public function addCommToImg($img,$comm,$auteur)
    {
        $commentaire = new Commentaires();
        $commentaire->setCommentaire($comm)->setAuteurComm($auteur)->setImgComm($img);
        return $commentaire;
    }

    public function addLikeToImg(\MainBundle\Entity\Photos $img, \MainBundle\Entity\Users $auteur)
    {
        $img->addLikesUser($auteur);
        return $img;
    }
}