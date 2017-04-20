<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesUsers
 *
 * @ORM\Table(name="roles_users")
 * @ORM\Entity
 */
class RolesUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="ROLE", type="string", length=31, nullable=false)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ROLE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;



    /**
     * Set role
     *
     * @param string $role
     *
     * @return RolesUsers
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get idRole
     *
     * @return integer
     */
    public function getIdRole()
    {
        return $this->idRole;
    }
}
