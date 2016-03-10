<?php

namespace DigitalPilot\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BackOfficeController extends Controller
{
    /**
     * @Route("/backoffice", name="userBundle_backoffice")
     */
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Default:index.html.twig');
    }
}
