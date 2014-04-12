<?php

namespace Cableonda\AdmininBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cableonda\AdmininBundle\Services\SesionService;

class DefaultController extends Controller
{
	
    public function indexAction()
    {
        return $this->render('CableondaAdmininBundle:Default:index.html.twig', array('name' => 'a'));
    }
}
