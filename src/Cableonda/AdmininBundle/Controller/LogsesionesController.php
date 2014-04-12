<?php

namespace Cableonda\AdmininBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LogsesionesController extends Controller
{
    public function indexAction()
    {
        // $_SERVER['DOCUMENT_ROOT'].'/var/www/html/suscriptor_login/src/Cableonda/AdmininBundle/Resources/wsdl/session.wsdl'
        $server = new \SoapServer($this->container->getParameter('kernel.root_dir').'/../src/Cableonda/AdmininBundle/Resources/wsdl/session.wsdl');
        $server->setObject($this->get('logs_sesion_service'));

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $server->handle();
        $response->setContent(ob_get_clean());

        return $response;
        return $this->render('CableondaAdmininBundle:Default:index.html.twig', array('name' => 'a'));
    }
}
