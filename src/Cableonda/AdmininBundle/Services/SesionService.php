<?php
namespace Cableonda\AdmininBundle\Services;

use Cableonda\AdmininBundle\Entity\Logslogin;
use Cableonda\AdmininBundle\Entity\Usuario;
use Cableonda\AdmininBundle\Entity\Servicio;
use Symfony\Component\HttpFoundation\Response;

class SesionService
{
    private $doctrine;    
    private $doctrine_handler;

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
        $this->doctrine_handler = $this->doctrine->getManager();
    }

    /**
    * (+) -- LR  --  10/04/2014
    * 
    * @param servicio Es el nombre del servicio proveniente
    * de cableonda/go. Este debe ser un string.
    * @param subscriptor Es el numero de suscriptor de cableonda.
    * Este debe ser un string.
    * @param hora Es un string que contiene la estampa de tiempo,
    * en que el usuario realizo el login en cableonda/go. Desde
    * el cliente se debe enviar como: ''.time()
    * 
    * -sesion() Es el metodo que recibe el request y
    * y se encarga de hacer el insert a la BD.
    */
    public function sesion($servicio, $subscriptor, $hora)
    {
        $horat = new \DateTime();
        $horat->setTimestamp($hora);

        $servicioExists = $this->getServicioId($servicio);
        $servicio_id = ($servicioExists!=null?$servicioExists:$this->crearServicio($servicio));
        

        $logsession = new Logslogin();
        $logsession->setSuscriptor($subscriptor);
        $logsession->setServicio($servicio_id);
        $logsession->setHora($horat);        
        $this->doctrine_handler->persist($logsession);
        $this->doctrine_handler->flush();

        return ($logsession!=null && $logsession->getId()>0?'success':'fail');
    }//End:sesion

    /**
    * (+) -- LR  --  10/04/2014
    * 
    * @param nombre Es el nombre del servicio proveniente
    * de cableonda/go. Este debe ser un string.
    * 
    * -sesion() Se encarga de determinar el id del servicio,
    * en la base de datos de symfony.  Esto lo hace en base al
    * nombre del servicio enviado por el cliente que hace el request.
    */
    private function getServicioId($nombre)
    {
        $serviciodb = $this->doctrine->getRepository('CableondaAdmininBundle:Servicio')
                    ->findOneBy(array('nombre' => $nombre));
        return $serviciodb;
    }//End:getServicioId

    /**
    * (+) -- LR  --  10/04/2014
    * 
    * @param nombre_servicio Es el nombre del servicio proveniente
    * de cableonda/go. Este debe ser un string.
    * 
    * -crearServicio() Se encarga de gestionar la tabla de "servicios",
    * inserta los nuevos servicios en base al request realizado por
    * el cliente.
    */
    private function crearServicio($nombre_servicio)
    {
        $nuevoServicio = new Servicio();
        $nuevoServicio->setNombre($nombre_servicio);
        $this->doctrine_handler->persist($nuevoServicio);
        $this->doctrine_handler->flush();
        return $nuevoServicio;
    }//End:crearServicio
}
