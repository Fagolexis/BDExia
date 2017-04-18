<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotions
 *
 * @ORM\Table(name="promotions")
 * @ORM\Entity
 */
class Promotions
{
    /**
     * @var string
     *
     * @ORM\Column(name="PROMO", type="string", length=2, nullable=false)
     */
    private $promo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROMO", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromo;



    /**
     * Set promo
     *
     * @param string $promo
     *
     * @return Promotions
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Get idPromo
     *
     * @return integer
     */
    public function getIdPromo()
    {
        return $this->idPromo;
    }
}
