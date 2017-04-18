<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatsActivites
 *
 * @ORM\Table(name="etats_activites")
 * @ORM\Entity
 */
class EtatsActivites
{
    /**
     * @var string
     *
     * @ORM\Column(name="ETAT", type="string", length=31, nullable=false)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ETAT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtat;



    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return EtatsActivites
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Get idEtat
     *
     * @return integer
     */
    public function getIdEtat()
    {
        return $this->idEtat;
    }
}
