<?php

namespace OC\PlatformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salles
 *
 * @ORM\Table(name="salles")
 * @ORM\Entity(repositoryClass="OC\PlatformeBundle\Repository\SallesRepository")
 */
class Salles
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
     * @var int
     *
     * @ORM\Column(name="num_salle", type="integer")
     */
    private $numSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_salle", type="string", length=255)
     */
    private $nomSalle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_salle", type="datetime")
     */
    private $dateSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="color_salle", type="string", length=255)
     */
    private $colorSalle;


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
     * Set numSalle
     *
     * @param integer $numSalle
     *
     * @return Salles
     */
    public function setNumSalle($numSalle)
    {
        $this->numSalle = $numSalle;

        return $this;
    }

    /**
     * Get numSalle
     *
     * @return int
     */
    public function getNumSalle()
    {
        return $this->numSalle;
    }

    /**
     * Set nomSalle
     *
     * @param string $nomSalle
     *
     * @return Salles
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Set dateSalle
     *
     * @param \DateTime $dateSalle
     *
     * @return Salles
     */
    public function setDateSalle($dateSalle)
    {
        $this->dateSalle = $dateSalle;

        return $this;
    }

    /**
     * Get dateSalle
     *
     * @return \DateTime
     */
    public function getDateSalle()
    {
        return $this->dateSalle;
    }

    /**
     * Set colorSalle
     *
     * @param string $colorSalle
     *
     * @return Salles
     */
    public function setColorSalle($colorSalle)
    {
        $this->colorSalle = $colorSalle;

        return $this;
    }

    /**
     * Get colorSalle
     *
     * @return string
     */
    public function getColorSalle()
    {
        return $this->colorSalle;
    }
}

