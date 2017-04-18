<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos", indexes={@ORM\Index(name="FK_PHOTO_A_UNE_DATE_DE_PUBLICATION", columns={"DATE_IMG"}), @ORM\Index(name="FK_UNE_PHOTO_A_UN_TYPE", columns={"TYPE_IMG"}), @ORM\Index(name="FK_UNE_PHOTO_PEUT_AVOIR_UN_AUTEUR", columns={"AUTEUR_IMG"})})
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var string
     *
     * @ORM\Column(name="CHEMIN", type="string", length=127, nullable=false)
     */
    private $chemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_IMG", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImg;

    /**
     * @var \MainBundle\Entity\Dates
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Dates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DATE_IMG", referencedColumnName="ID_DATE")
     * })
     */
    private $dateImg;

    /**
     * @var \MainBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AUTEUR_IMG", referencedColumnName="ID_USER")
     * })
     */
    private $auteurImg;

    /**
     * @var \MainBundle\Entity\Types
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Types")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TYPE_IMG", referencedColumnName="ID_TYPE")
     * })
     */
    private $typeImg;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Users", mappedBy="likesImg")
     */
    private $likesUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Activites", inversedBy="idImgAct")
     * @ORM\JoinTable(name="im_act",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_IMG_ACT", referencedColumnName="ID_IMG")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IMG_ACT", referencedColumnName="ID_ACTIVITE")
     *   }
     * )
     */
    private $imgAct;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Boutique", inversedBy="idImgProd")
     * @ORM\JoinTable(name="im_prod",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_IMG_PROD", referencedColumnName="ID_IMG")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IMG_PROD", referencedColumnName="ID_PRODUIT")
     *   }
     * )
     */
    private $imgProd;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->likesUser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->imgAct = new \Doctrine\Common\Collections\ArrayCollection();
        $this->imgProd = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Photos
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Get idImg
     *
     * @return integer
     */
    public function getIdImg()
    {
        return $this->idImg;
    }

    /**
     * Set dateImg
     *
     * @param \MainBundle\Entity\Dates $dateImg
     *
     * @return Photos
     */
    public function setDateImg(\MainBundle\Entity\Dates $dateImg = null)
    {
        $this->dateImg = $dateImg;

        return $this;
    }

    /**
     * Get dateImg
     *
     * @return \MainBundle\Entity\Dates
     */
    public function getDateImg()
    {
        return $this->dateImg;
    }

    /**
     * Set auteurImg
     *
     * @param \MainBundle\Entity\Users $auteurImg
     *
     * @return Photos
     */
    public function setAuteurImg(\MainBundle\Entity\Users $auteurImg = null)
    {
        $this->auteurImg = $auteurImg;

        return $this;
    }

    /**
     * Get auteurImg
     *
     * @return \MainBundle\Entity\Users
     */
    public function getAuteurImg()
    {
        return $this->auteurImg;
    }

    /**
     * Set typeImg
     *
     * @param \MainBundle\Entity\Types $typeImg
     *
     * @return Photos
     */
    public function setTypeImg(\MainBundle\Entity\Types $typeImg = null)
    {
        $this->typeImg = $typeImg;

        return $this;
    }

    /**
     * Get typeImg
     *
     * @return \MainBundle\Entity\Types
     */
    public function getTypeImg()
    {
        return $this->typeImg;
    }

    /**
     * Add likesUser
     *
     * @param \MainBundle\Entity\Users $likesUser
     *
     * @return Photos
     */
    public function addLikesUser(\MainBundle\Entity\Users $likesUser)
    {
        $this->likesUser[] = $likesUser;

        return $this;
    }

    /**
     * Remove likesUser
     *
     * @param \MainBundle\Entity\Users $likesUser
     */
    public function removeLikesUser(\MainBundle\Entity\Users $likesUser)
    {
        $this->likesUser->removeElement($likesUser);
    }

    /**
     * Get likesUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikesUser()
    {
        return $this->likesUser;
    }

    /**
     * Add imgAct
     *
     * @param \MainBundle\Entity\Activites $imgAct
     *
     * @return Photos
     */
    public function addImgAct(\MainBundle\Entity\Activites $imgAct)
    {
        $this->imgAct[] = $imgAct;

        return $this;
    }

    /**
     * Remove imgAct
     *
     * @param \MainBundle\Entity\Activites $imgAct
     */
    public function removeImgAct(\MainBundle\Entity\Activites $imgAct)
    {
        $this->imgAct->removeElement($imgAct);
    }

    /**
     * Get imgAct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImgAct()
    {
        return $this->imgAct;
    }

    /**
     * Add imgProd
     *
     * @param \MainBundle\Entity\Boutique $imgProd
     *
     * @return Photos
     */
    public function addImgProd(\MainBundle\Entity\Boutique $imgProd)
    {
        $this->imgProd[] = $imgProd;

        return $this;
    }

    /**
     * Remove imgProd
     *
     * @param \MainBundle\Entity\Boutique $imgProd
     */
    public function removeImgProd(\MainBundle\Entity\Boutique $imgProd)
    {
        $this->imgProd->removeElement($imgProd);
    }

    /**
     * Get imgProd
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImgProd()
    {
        return $this->imgProd;
    }
}
