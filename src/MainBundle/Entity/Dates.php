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
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Activites", mappedBy="dateAct")
     */
    private $idDateAct;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDateAct = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add idDateAct
     *
     * @param \MainBundle\Entity\Activites $idDateAct
     *
     * @return Dates
     */
    public function addIdDateAct(\MainBundle\Entity\Activites $idDateAct)
    {
        $this->idDateAct[] = $idDateAct;

        return $this;
    }

    /**
     * Remove idDateAct
     *
     * @param \MainBundle\Entity\Activites $idDateAct
     */
    public function removeIdDateAct(\MainBundle\Entity\Activites $idDateAct)
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
