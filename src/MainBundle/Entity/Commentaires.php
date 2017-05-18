<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires", indexes={@ORM\Index(name="FK_UNE_PHOTO_PEUT_AVOIR_DES_COMMENTAIRES", columns={"IMG_COMM"}), @ORM\Index(name="FK_USER_PEUT_METTRE_PLUSIEURS_COMMENTAIRES", columns={"AUTEUR_COMM"})})
 * @ORM\Entity
 */
class Commentaires
{
    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTAIRE", type="text", length=65535, nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COMMENTAIRE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var \MainBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AUTEUR_COMM", referencedColumnName="ID_USER")
     * })
     */
    private $auteurComm;

    /**
     * @var \MainBundle\Entity\Photos
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Photos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IMG_COMM", referencedColumnName="ID_IMG")
     * })
     */
    private $imgComm;



    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Commentaires
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Get idCommentaire
     *
     * @return integer
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set auteurComm
     *
     * @param \MainBundle\Entity\Users $auteurComm
     *
     * @return Commentaires
     */
    public function setAuteurComm(\MainBundle\Entity\Users $auteurComm = null)
    {
        $this->auteurComm = $auteurComm;
    
        return $this;
    }

    /**
     * Get auteurComm
     *
     * @return \MainBundle\Entity\Users
     */
    public function getAuteurComm()
    {
        return $this->auteurComm;
    }

    /**
     * Set imgComm
     *
     * @param \MainBundle\Entity\Photos $imgComm
     *
     * @return Commentaires
     */
    public function setImgComm(\MainBundle\Entity\Photos $imgComm = null)
    {
        $this->imgComm = $imgComm;
    
        return $this;
    }

    /**
     * Get imgComm
     *
     * @return \MainBundle\Entity\Photos
     */
    public function getImgComm()
    {
        return $this->imgComm;
    }
}
