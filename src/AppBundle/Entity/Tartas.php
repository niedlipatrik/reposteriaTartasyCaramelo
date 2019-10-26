<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tartas
 *
 * @ORM\Table(name="tartas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TartasRepository")
 */
class Tartas
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descrcion", type="string", length=255)
     */
    private $descrcion;

    /**
     * @var string
     *
     * @ORM\Column(name="igredientes", type="text")
     */
    private $igredientes;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="top", type="boolean")
     */
    private $top;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tartas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descrcion
     *
     * @param string $descrcion
     *
     * @return Tartas
     */
    public function setDescrcion($descrcion)
    {
        $this->descrcion = $descrcion;

        return $this;
    }

    /**
     * Get descrcion
     *
     * @return string
     */
    public function getDescrcion()
    {
        return $this->descrcion;
    }

    /**
     * Set igredientes
     *
     * @param string $igredientes
     *
     * @return Tartas
     */
    public function setIgredientes($igredientes)
    {
        $this->igredientes = $igredientes;

        return $this;
    }

    /**
     * Get igredientes
     *
     * @return string
     */
    public function getIgredientes()
    {
        return $this->igredientes;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Tartas
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Tartas
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set top
     *
     * @param boolean $top
     *
     * @return Tartas
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get top
     *
     * @return bool
     */
    public function getTop()
    {
        return $this->top;
    }
}

