<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="page_connexion")
     */
    public function indexAction()
    {
        return $this->render('FOSUserBundle:security:login.html.twig', array(
            'error' => false,
            'csrf_token' => '',
            'last_username' => ''
        ));
    }
    
}