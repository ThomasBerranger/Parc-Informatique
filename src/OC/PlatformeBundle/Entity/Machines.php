<?php

namespace OC\PlatformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Machines
 *
 * @ORM\Table(name="machines")
 * @ORM\Entity(repositoryClass="OC\PlatformeBundle\Repository\MachinesRepository")
 * @UniqueEntity(fields="ipMachine", message="Une machine existe déjà avec cet ip.")
 */
class Machines
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
     * @ORM\Column(name="ip_machine", type="string", length=255, unique=true)
     */
    private $ipMachine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_machine", type="datetime")
     */
    private $dateMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_machine", type="string", length=255)
     */
    private $etatMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="author_machine", type="string", length=255)
     */
    private $authorMachine;

    /**
     * @var int
     *
     * @ORM\Column(name="numsalle_machine", type="integer")
     */
    private $numsalleMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="color_machine", type="string", length=255)
     */
    private $colorMachine;


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
     * Set ipMachine
     *
     * @param string $ipMachine
     *
     * @return Machines
     */
    public function setIpMachine($ipMachine)
    {
        $this->ipMachine = $ipMachine;

        return $this;
    }

    /**
     * Get ipMachine
     *
     * @return string
     */
    public function getIpMachine()
    {
        return $this->ipMachine;
    }

    /**
     * Set dateMachine
     *
     * @param \DateTime $dateMachine
     *
     * @return Machines
     */
    public function setDateMachine($dateMachine)
    {
        $this->dateMachine = $dateMachine;

        return $this;
    }

    /**
     * Get dateMachine
     *
     * @return \DateTime
     */
    public function getDateMachine()
    {
        return $this->dateMachine;
    }

    /**
     * Set etatMachine
     *
     * @param string $etatMachine
     *
     * @return Machines
     */
    public function setEtatMachine($etatMachine)
    {
        $this->etatMachine = $etatMachine;

        return $this;
    }

    /**
     * Get etatMachine
     *
     * @return string
     */
    public function getEtatMachine()
    {
        return $this->etatMachine;
    }

    /**
     * Set authorMachine
     *
     * @param string $authorMachine
     *
     * @return Machines
     */
    public function setAuthorMachine($authorMachine)
    {
        $this->authorMachine = $authorMachine;

        return $this;
    }

    /**
     * Get authorMachine
     *
     * @return string
     */
    public function getAuthorMachine()
    {
        return $this->authorMachine;
    }


    /**
     * Set numsalleMachine
     *
     * @param integer $numsalleMachine
     *
     * @return Machines
     */
    public function setNumsalleMachine($numsalleMachine)
    {
        $this->numsalleMachine = $numsalleMachine;

        return $this;
    }

    /**
     * Get numsalleMachine
     *
     * @return int
     */
    public function getNumsalleMachine()
    {
        return $this->numsalleMachine;
    }

    /**
     * Set ipMachine
     *
     * @param string $colorMachine
     *
     * @return Machines
     */
    public function setColorMachine($colorMachine)
    {
        $this->colorMachine = $colorMachine;

        return $this;
    }

    /**
     * Get ipMachine
     *
     * @return string
     */
    public function getColorMachine()
    {
        return $this->colorMachine;
    }

}

