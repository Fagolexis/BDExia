<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscrits
 *
 * @ORM\Table(name="inscrits", indexes={@ORM\Index(name="FK_USER_PEUT_PARTICIPER_A_UNE_OU_PLUSIEURS_ACTIVITES", columns={"INSCRIT_CHOIX"}), @ORM\Index(name="FK_USER_PEUT_PARTICIPER_A_UNE_OU_PLUSIEURS_ACTIVITES3", columns={"INSCRIT_ACT"}), @ORM\Index(name="IDX_2644257FBE0B757C", columns={"ID_INSCRIT"})})
 * @ORM\Entity
 */
class Inscrits
{
    /**
     * @var string
     *
     * @ORM\Column(name="INFORMATIONS", type="string", length=127, nullable=true)
     */
    private $informations;

    /**
     * @var \MainBundle\Entity\Activites
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="MainBundle\Entity\Activites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="INSCRIT_ACT", referencedColumnName="ID_ACTIVITE")
     * })
     */
    private $inscritAct;

    /**
     * @var \MainBundle\Entity\Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="MainBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_INSCRIT", referencedColumnName="ID_USER")
     * })
     */
    private $idInscrit;

    /**
     * @var \MainBundle\Entity\ChoixVote
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="MainBundle\Entity\ChoixVote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="INSCRIT_CHOIX", referencedColumnName="ID_CHOIX")
     * })
     */
    private $inscritChoix;



    /**
     * Set informations
     *
     * @param string $informations
     *
     * @return Inscrits
     */
    public function setInformations($informations)
    {
        $this->informations = $informations;
    
        return $this;
    }

    /**
     * Get informations
     *
     * @return string
     */
    public function getInformations()
    {
        return $this->informations;
    }

    /**
     * Set inscritAct
     *
     * @param \MainBundle\Entity\Activites $inscritAct
     *
     * @return Inscrits
     */
    public function setInscritAct(\MainBundle\Entity\Activites $inscritAct)
    {
        $this->inscritAct = $inscritAct;
    
        return $this;
    }

    /**
     * Get inscritAct
     *
     * @return \MainBundle\Entity\Activites
     */
    public function getInscritAct()
    {
        return $this->inscritAct;
    }

    /**
     * Set idInscrit
     *
     * @param \MainBundle\Entity\Users $idInscrit
     *
     * @return Inscrits
     */
    public function setIdInscrit(\MainBundle\Entity\Users $idInscrit)
    {
        $this->idInscrit = $idInscrit;
    
        return $this;
    }

    /**
     * Get idInscrit
     *
     * @return \MainBundle\Entity\Users
     */
    public function getIdInscrit()
    {
        return $this->idInscrit;
    }

    /**
     * Set inscritChoix
     *
     * @param \MainBundle\Entity\ChoixVote $inscritChoix
     *
     * @return Inscrits
     */
    public function setInscritChoix(\MainBundle\Entity\ChoixVote $inscritChoix)
    {
        $this->inscritChoix = $inscritChoix;
    
        return $this;
    }

    /**
     * Get inscritChoix
     *
     * @return \MainBundle\Entity\ChoixVote
     */
    public function getInscritChoix()
    {
        return $this->inscritChoix;
    }
}
