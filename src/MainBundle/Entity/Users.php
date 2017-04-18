<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="FK_USER_A_UN_AVATAR", columns={"AVATAR_USER"}), @ORM\Index(name="FK_USER_A_UN_ROLE", columns={"ROLE_USER"}), @ORM\Index(name="FK_USER_PEUT_APPARTENIR_A_UNE_PROMOTION", columns={"PROMO_USER"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL", type="string", length=255, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="MDP", type="text", length=65535, nullable=false)
     */
    private $mdp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NAISSANCE", type="date", nullable=false)
     */
    private $naissance;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEPHONE", type="string", length=12, nullable=true)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USER", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \MainBundle\Entity\Promotions
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Promotions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PROMO_USER", referencedColumnName="ID_PROMO")
     * })
     */
    private $promoUser;

    /**
     * @var \MainBundle\Entity\RolesUsers
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\RolesUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ROLE_USER", referencedColumnName="ID_ROLE")
     * })
     */
    private $roleUser;

    /**
     * @var \MainBundle\Entity\Photos
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Photos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AVATAR_USER", referencedColumnName="ID_IMG")
     * })
     */
    private $avatarUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MainBundle\Entity\Photos", inversedBy="likesUser")
     * @ORM\JoinTable(name="likes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="LIKES_USER", referencedColumnName="ID_USER")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="LIKES_IMG", referencedColumnName="ID_IMG")
     *   }
     * )
     */
    private $likesImg;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->likesImg = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Users
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Users
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Users
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Users
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set naissance
     *
     * @param \DateTime $naissance
     *
     * @return Users
     */
    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }

    /**
     * Get naissance
     *
     * @return \DateTime
     */
    public function getNaissance()
    {
        return $this->naissance;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Users
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set promoUser
     *
     * @param \MainBundle\Entity\Promotions $promoUser
     *
     * @return Users
     */
    public function setPromoUser(\MainBundle\Entity\Promotions $promoUser = null)
    {
        $this->promoUser = $promoUser;

        return $this;
    }

    /**
     * Get promoUser
     *
     * @return \MainBundle\Entity\Promotions
     */
    public function getPromoUser()
    {
        return $this->promoUser;
    }

    /**
     * Set roleUser
     *
     * @param \MainBundle\Entity\RolesUsers $roleUser
     *
     * @return Users
     */
    public function setRoleUser(\MainBundle\Entity\RolesUsers $roleUser = null)
    {
        $this->roleUser = $roleUser;

        return $this;
    }

    /**
     * Get roleUser
     *
     * @return \MainBundle\Entity\RolesUsers
     */
    public function getRoleUser()
    {
        return $this->roleUser;
    }

    /**
     * Set avatarUser
     *
     * @param \MainBundle\Entity\Photos $avatarUser
     *
     * @return Users
     */
    public function setAvatarUser(\MainBundle\Entity\Photos $avatarUser = null)
    {
        $this->avatarUser = $avatarUser;

        return $this;
    }

    /**
     * Get avatarUser
     *
     * @return \MainBundle\Entity\Photos
     */
    public function getAvatarUser()
    {
        return $this->avatarUser;
    }

    /**
     * Add likesImg
     *
     * @param \MainBundle\Entity\Photos $likesImg
     *
     * @return Users
     */
    public function addLikesImg(\MainBundle\Entity\Photos $likesImg)
    {
        $this->likesImg[] = $likesImg;

        return $this;
    }

    /**
     * Remove likesImg
     *
     * @param \MainBundle\Entity\Photos $likesImg
     */
    public function removeLikesImg(\MainBundle\Entity\Photos $likesImg)
    {
        $this->likesImg->removeElement($likesImg);
    }

    /**
     * Get likesImg
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikesImg()
    {
        return $this->likesImg;
    }
}
