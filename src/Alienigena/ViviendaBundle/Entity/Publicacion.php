<?php

namespace Alienigena\ViviendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacion
 *
 * @ORM\Table(name="publicacion")
 * @ORM\Entity
 */
class Publicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_detalle", type="integer", nullable=false)
     */
    private $idDetalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_servicio", type="integer", nullable=false)
     */
    private $idTipoServicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_publicacion", type="integer", nullable=false)
     */
    private $idTipoPublicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_propiedad", type="integer", nullable=false)
     */
    private $idTipoPropiedad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ciudad", type="integer", nullable=false)
     */
    private $idCiudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_valor", type="integer", nullable=false)
     */
    private $idTipoValor;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_dormitorio", type="integer", nullable=false)
     */
    private $numDormitorio;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_construida", type="integer", nullable=false)
     */
    private $superficieConstruida;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie_terreno", type="integer", nullable=false)
     */
    private $superficieTerreno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime", nullable=false)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime", nullable=false)
     */
    private $fechaModificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="publicacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return Publicacion
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idDetalle
     *
     * @param integer $idDetalle
     *
     * @return Publicacion
     */
    public function setIdDetalle($idDetalle)
    {
        $this->idDetalle = $idDetalle;

        return $this;
    }

    /**
     * Get idDetalle
     *
     * @return integer
     */
    public function getIdDetalle()
    {
        return $this->idDetalle;
    }

    /**
     * Set idTipoServicio
     *
     * @param integer $idTipoServicio
     *
     * @return Publicacion
     */
    public function setIdTipoServicio($idTipoServicio)
    {
        $this->idTipoServicio = $idTipoServicio;

        return $this;
    }

    /**
     * Get idTipoServicio
     *
     * @return integer
     */
    public function getIdTipoServicio()
    {
        return $this->idTipoServicio;
    }

    /**
     * Set idTipoPublicacion
     *
     * @param integer $idTipoPublicacion
     *
     * @return Publicacion
     */
    public function setIdTipoPublicacion($idTipoPublicacion)
    {
        $this->idTipoPublicacion = $idTipoPublicacion;

        return $this;
    }

    /**
     * Get idTipoPublicacion
     *
     * @return integer
     */
    public function getIdTipoPublicacion()
    {
        return $this->idTipoPublicacion;
    }

    /**
     * Set idTipoPropiedad
     *
     * @param integer $idTipoPropiedad
     *
     * @return Publicacion
     */
    public function setIdTipoPropiedad($idTipoPropiedad)
    {
        $this->idTipoPropiedad = $idTipoPropiedad;

        return $this;
    }

    /**
     * Get idTipoPropiedad
     *
     * @return integer
     */
    public function getIdTipoPropiedad()
    {
        return $this->idTipoPropiedad;
    }

    /**
     * Set idCiudad
     *
     * @param integer $idCiudad
     *
     * @return Publicacion
     */
    public function setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;

        return $this;
    }

    /**
     * Get idCiudad
     *
     * @return integer
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * Set idTipoValor
     *
     * @param integer $idTipoValor
     *
     * @return Publicacion
     */
    public function setIdTipoValor($idTipoValor)
    {
        $this->idTipoValor = $idTipoValor;

        return $this;
    }

    /**
     * Get idTipoValor
     *
     * @return integer
     */
    public function getIdTipoValor()
    {
        return $this->idTipoValor;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return Publicacion
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Publicacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set numDormitorio
     *
     * @param integer $numDormitorio
     *
     * @return Publicacion
     */
    public function setNumDormitorio($numDormitorio)
    {
        $this->numDormitorio = $numDormitorio;

        return $this;
    }

    /**
     * Get numDormitorio
     *
     * @return integer
     */
    public function getNumDormitorio()
    {
        return $this->numDormitorio;
    }

    /**
     * Set superficieConstruida
     *
     * @param integer $superficieConstruida
     *
     * @return Publicacion
     */
    public function setSuperficieConstruida($superficieConstruida)
    {
        $this->superficieConstruida = $superficieConstruida;

        return $this;
    }

    /**
     * Get superficieConstruida
     *
     * @return integer
     */
    public function getSuperficieConstruida()
    {
        return $this->superficieConstruida;
    }

    /**
     * Set superficieTerreno
     *
     * @param integer $superficieTerreno
     *
     * @return Publicacion
     */
    public function setSuperficieTerreno($superficieTerreno)
    {
        $this->superficieTerreno = $superficieTerreno;

        return $this;
    }

    /**
     * Get superficieTerreno
     *
     * @return integer
     */
    public function getSuperficieTerreno()
    {
        return $this->superficieTerreno;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return Publicacion
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Publicacion
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
