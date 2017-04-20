<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activites
 *
 * @ORM\Table(name="activites", indexes={@ORM\Index(name="FK_ACTIVITE_A_UN_AUTEUR", columns={"AUTEUR_ACT"}), @ORM\Index(name="FK_ACTIVITE_A_UN_ETAT", columns={"ETAT_ACT"})})
 * @ORM\Entity
 */
class Activites
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOM_ACTIVITE", type="string", length=255, nullable=false)
     */
    private $nomActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_ACTIVITE", type="text", length=65535, nullable=false)
     */
    private $descriptionActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX_ACTIVITE", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $prixActivite;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEU", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="INSCRITS_MAX", type="integer", nullable=true)
     */
    private $inscritsMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="AGE_MIN", type="integer", nullable=true)
     */
    private $ageMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ACTIVITE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActivite;

    /**
     * @var \MainBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AUTEUR_ACT", referencedColumnName="ID_USER")
     * })
     */
    private $auteurAct;

    /**
     * @var \MainBundle\Entity\EtatsActivites
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\EtatsActivites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ETAT_ACT", referencedColumnName="ID_ETAT")
     * })
     */
    private $etatAct;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Photos", inversedBy="idImgAct")
     * @ORM\JoinTable(name="im_act",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_IMG_ACT", referencedColumnName="ID_ACTIVITE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IMG_ACT", referencedColumnName="ID_IMG")
     *   }
     * )
     */
    private $imgAct;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Dates", mappedBy="dateAct")
     */
    private $idDateAct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imgAct = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idDateAct = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nomActivite
     *
     * @param string $nomActivite
     *
     * @return Activites
     */
    public function setNomActivite($nomActivite)
    {
        $this->nomActivite = $nomActivite;
    
        return $this;
    }

    /**
     * Get nomActivite
     *
     * @return string
     */
    public function getNomActivite()
    {
        return $this->nomActivite;
    }

    /**
     * Set descriptionActivite
     *
     * @param string $descriptionActivite
     *
     * @return Activites
     */
    public function setDescriptionActivite($descriptionActivite)
    {
        $this->descriptionActivite = $descriptionActivite;
    
        return $this;
    }

    /**
     * Get descriptionActivite
     *
     * @return string
     */
    public function getDescriptionActivite()
    {
        return $this->descriptionActivite;
    }

    /**
     * Set prixActivite
     *
     * @param string $prixActivite
     *
     * @return Activites
     */
    public function setPrixActivite($prixActivite)
    {
        $this->prixActivite = $prixActivite;
    
        return $this;
    }

    /**
     * Get prixActivite
     *
     * @return string
     */
    public function getPrixActivite()
    {
        return $this->prixActivite;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Activites
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set inscritsMax
     *
     * @param integer $inscritsMax
     *
     * @return Activites
     */
    public function setInscritsMax($inscritsMax)
    {
        $this->inscritsMax = $inscritsMax;
    
        return $this;
    }

    /**
     * Get inscritsMax
     *
     * @return integer
     */
    public function getInscritsMax()
    {
        return $this->inscritsMax;
    }

    /**
     * Set ageMin
     *
     * @param integer $ageMin
     *
     * @return Activites
     */
    public function setAgeMin($ageMin)
    {
        $this->ageMin = $ageMin;
    
        return $this;
    }

    /**
     * Get ageMin
     *
     * @return integer
     */
    public function getAgeMin()
    {
        return $this->ageMin;
    }

    /**
     * Get idActivite
     *
     * @return integer
     */
    public function getIdActivite()
    {
        return $this->idActivite;
    }

    /**
     * Set auteurAct
     *
     * @param \MainBundle\Entity\Users $auteurAct
     *
     * @return Activites
     */
    public function setAuteurAct(\MainBundle\Entity\Users $auteurAct = null)
    {
        $this->auteurAct = $auteurAct;
    
        return $this;
    }

    /**
     * Get auteurAct
     *
     * @return \MainBundle\Entity\Users
     */
    public function getAuteurAct()
    {
        return $this->auteurAct;
    }

    /**
     * Set etatAct
     *
     * @param \MainBundle\Entity\EtatsActivites $etatAct
     *
     * @return Activites
     */
    public function setEtatAct(\MainBundle\Entity\EtatsActivites $etatAct = null)
    {
        $this->etatAct = $etatAct;
    
        return $this;
    }

    /**
     * Get etatAct
     *
     * @return \MainBundle\Entity\EtatsActivites
     */
    public function getEtatAct()
    {
        return $this->etatAct;
    }

    /**
     * Add imgAct
     *
     * @param \MainBundle\Entity\Photos $imgAct
     *
     * @return Activites
     */
    public function addImgAct(\MainBundle\Entity\Photos $imgAct)
    {
        $this->imgAct[] = $imgAct;
    
        return $this;
    }

    /**
     * Remove imgAct
     *
     * @param \MainBundle\Entity\Photos $imgAct
     */
    public function removeImgAct(\MainBundle\Entity\Photos $imgAct)
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
     * Add idDateAct
     *
     * @param \MainBundle\Entity\Dates $idDateAct
     *
     * @return Activites
     */
    public function addIdDateAct(\MainBundle\Entity\Dates $idDateAct)
    {
        $this->idDateAct[] = $idDateAct;
    
        return $this;
    }

    /**
     * Remove idDateAct
     *
     * @param \MainBundle\Entity\Dates $idDateAct
     */
    public function removeIdDateAct(\MainBundle\Entity\Dates $idDateAct)
    {
        $this->idDateAct->removeElement($idDateAct);
    }

    /**
     * Get idDateAct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdDateAct()
    {
        return $this->idDateAct;
    }
}
