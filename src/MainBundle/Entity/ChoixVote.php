<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChoixVote
 *
 * @ORM\Table(name="choix_vote")
 * @ORM\Entity
 */
class ChoixVote
{
    /**
     * @var string
     *
     * @ORM\Column(name="CHOIX", type="string", length=31, nullable=false)
     */
    private $choix;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CHOIX", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChoix;



    /**
     * Set choix
     *
     * @param string $choix
     *
     * @return ChoixVote
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;

        return $this;
    }

    /**
     * Get choix
     *
     * @return string
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * Get idChoix
     *
     * @return integer
     */
    public function getIdChoix()
    {
        return $this->idChoix;
    }
}
