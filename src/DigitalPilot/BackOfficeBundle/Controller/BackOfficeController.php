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
        $currentUser = $this->getUser();
        
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        
        return $this->render('BackOfficeBundle:Default:index.html.twig', array(
            'user' => $users
        ));
    }
    
    /**
     * @Route("/backoffice/user", name="view_user")
     */
    public function userAction()
    {
        $currentUser = $this->getUser();
        
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        
        //var_dump($users);
        
        return $this->render('BackOfficeBundle:Default:view_user.html.twig', array(
            'user' => $users
        ));
    }
    
}
