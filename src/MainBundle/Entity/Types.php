<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Types
 *
 * @ORM\Table(name="types")
 * @ORM\Entity
 */
class Types
{
    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=31, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idType;



    /**
     * Set type
     *
     * @param string $type
     *
     * @return Types
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }
}
