<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiciosRepository")
 */
class Servicios
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
     * @ORM\Column(name="peluqueria", type="string", length=255)
     */
    private $peluqueria;

    /**
     * @var string
     *
     * @ORM\Column(name="estetica", type="string", length=255)
     */
    private $estetica;

    /**
     * @var string
     *
     * @ORM\Column(name="laser", type="string", length=255)
     */
    private $laser;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set peluqueria
     *
     * @param string $peluqueria
     * @return Servicios
     */
    public function setPeluqueria($peluqueria)
    {
        $this->peluqueria = $peluqueria;

        return $this;
    }

    /**
     * Get peluqueria
     *
     * @return string 
     */
    public function getPeluqueria()
    {
        return $this->peluqueria;
    }

    /**
     * Set estetica
     *
     * @param string $estetica
     * @return Servicios
     */
    public function setEstetica($estetica)
    {
        $this->estetica = $estetica;

        return $this;
    }

    /**
     * Get estetica
     *
     * @return string 
     */
    public function getEstetica()
    {
        return $this->estetica;
    }

    /**
     * Set laser
     *
     * @param string $laser
     * @return Servicios
     */
    public function setLaser($laser)
    {
        $this->laser = $laser;

        return $this;
    }

    /**
     * Get laser
     *
     * @return string 
     */
    public function getLaser()
    {
        return $this->laser;
    }
}
