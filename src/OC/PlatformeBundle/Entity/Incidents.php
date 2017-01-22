<?php

namespace OC\PlatformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidents
 *
 * @ORM\Table(name="incidents")
 * @ORM\Entity(repositoryClass="OC\PlatformeBundle\Repository\IncidentsRepository")
 */
class Incidents
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="modif", type="string", length=255)
     */
    private $modif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set type
     *
     * @param string $type
     *
     * @return Incidents
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
     * Set icon
     *
     * @param string $icon
     *
     * @return Incidents
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set identifiant
     *
     * @param integer $identifiant
     *
     * @return Incidents
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set modif
     *
     * @param string $modif
     *
     * @return Incidents
     */
    public function setModif($modif)
    {
        $this->modif = $modif;

        return $this;
    }

    /**
     * Get modif
     *
     * @return string
     */
    public function getModif()
    {
        return $this->modif;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Incidents
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
}

