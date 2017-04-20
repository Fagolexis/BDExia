<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dates
 *
 * @ORM\Table(name="dates", indexes={@ORM\Index(name="FK_UN_DATE_A_UN_TYPE", columns={"TYPE_DATE"})})
 * @ORM\Entity
 */
class Dates
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DATE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDate;

    /**
     * @var \MainBundle\Entity\Types
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Types")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TYPE_DATE", referencedColumnName="ID_TYPE")
     * })
     */
    private $typeDate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Activites", inversedBy="idDateAct")
     * @ORM\JoinTable(name="date_act",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_DATE_ACT", referencedColumnName="ID_DATE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="DATE_ACT", referencedColumnName="ID_ACTIVITE")
     *   }
     * )
     */
    private $dateAct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateAct = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Dates
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get idDate
     *
     * @return integer
     */
    public function getIdDate()
    {
        return $this->idDate;
    }

    /**
     * Set typeDate
     *
     * @param \MainBundle\Entity\Types $typeDate
     *
     * @return Dates
     */
    public function setTypeDate(\MainBundle\Entity\Types $typeDate = null)
    {
        $this->typeDate = $typeDate;
    
        return $this;
    }

    /**
     * Get typeDate
     *
     * @return \MainBundle\Entity\Types
     */
    public function getTypeDate()
    {
        return $this->typeDate;
    }

    /**
     * Add dateAct
     *
     * @param \MainBundle\Entity\Activites $dateAct
     *
     * @return Dates
     */
    public function addDateAct(\MainBundle\Entity\Activites $dateAct)
    {
        $this->dateAct[] = $dateAct;
    
        return $this;
    }

    /**
     * Remove dateAct
     *
     * @param \MainBundle\Entity\Activites $dateAct
     */
    public function removeDateAct(\MainBundle\Entity\Activites $dateAct)
    {
        $this->dateAct->removeElement($dateAct);
    }

    /**
     * Get dateAct
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDateAct()
    {
        return $this->dateAct;
    }
}
