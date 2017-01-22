<?php

namespace OC\PlatformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="OC\PlatformeBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string")
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string")
     */
    private $mdp;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Admin
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Admin
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
}

