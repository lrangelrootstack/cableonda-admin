<?php

namespace Cableonda\AdmininBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logslogin
 */
class Logslogin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $suscriptor;

    /**
     * @var integer
     */
    private $servicio;

    /**
     * @var \DateTime
     */
    private $hora;


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
     * Set suscriptor
     *
     * @param string $suscriptor
     * @return Logslogin
     */
    public function setSuscriptor($suscriptor)
    {
        $this->suscriptor = $suscriptor;

        return $this;
    }

    /**
     * Get suscriptor
     *
     * @return string 
     */
    public function getSuscriptor()
    {
        return $this->suscriptor;
    }

    /**
     * Set servicio
     *
     * @param integer $servicio
     * @return Logslogin
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return integer 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     * @return Logslogin
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime 
     */
    public function getHora()
    {
        return $this->hora;
    }
}
