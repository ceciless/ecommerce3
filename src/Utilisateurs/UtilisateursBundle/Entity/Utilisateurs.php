<?php


namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this -> reserver = new \Doctrine\Common\Collections\ArrayCollection();
        $this -> profiles = new \Doctrine\Common\Collections\ArrayCollection();
        $this -> velos = new \Doctrine\Common\Collections\ArrayCollection();
        // your own logic
    }

     /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Reserver",  mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $reserver;

     /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Velos",  mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $velos;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\UtilisateursProfiles",  mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $profiles;



    /**
     * Add reserver
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Reserver $reserver
     * @return Utilisateurs
     */
    public function addReserver(\Ecommerce\EcommerceBundle\Entity\Reserver $reserver)
    {
        $this->reserver[] = $reserver;

        return $this;
    }

    /**
     * Remove reserver
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Reserver $reserver
     */
    public function removeReserver(\Ecommerce\EcommerceBundle\Entity\Reserver $reserver)
    {
        $this->reserver->removeElement($reserver);
    }

    /**
     * Get reserver
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReserver()
    {
        return $this->reserver;
    }

    /**
     * Add profiles
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateursProfiles $profiles
     * @return Utilisateurs
     */
    public function addProfile(\Ecommerce\EcommerceBundle\Entity\UtilisateursProfiles $profiles)
    {
        $this->profiles[] = $profiles;

        return $this;
    }

    /**
     * Remove profiles
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateursProfiles $profiles
     */
    public function removeProfile(\Ecommerce\EcommerceBundle\Entity\UtilisateursProfiles $profiles)
    {
        $this->profiles->removeElement($profiles);
    }

    /**
     * Get profiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Add velos
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Velos $velos
     * @return Utilisateurs
     */
    public function addVelo(\Ecommerce\EcommerceBundle\Entity\Velos $velos)
    {
        $this->velos[] = $velos;

        return $this;
    }

    /**
     * Remove velos
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Velos $velos
     */
    public function removeVelo(\Ecommerce\EcommerceBundle\Entity\Velos $velos)
    {
        $this->velos->removeElement($velos);
    }

    /**
     * Get velos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVelos()
    {
        return $this->velos;
    }
}
