<?php

namespace DigitalPilot\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use DigitalPilot\CmsBundle\Document\Trader;
use DigitalPilot\CmsBundle\Document\Publicite;

use DigitalPilot\CmsBundle\Form\ProfilType;
use DigitalPilot\CmsBundle\Form\PubUpload;

use Symfony\Component\HttpFoundation\Request;

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
    
    /**
     * @Route("/backoffice/user/info/{email}", defaults={"email" = 0}, name="info_user")
     */
    public function infoAction($email)
    {
 
        $dm = $this->get('doctrine_mongodb')->getManager()->getRepository('CmsBundle:Trader');
        $allTraders = $dm->findOneByEmail($email);

 
        //var_dump($allTraders);
        return $this->render('BackOfficeBundle:Default:info_user.html.twig', array(
            'allTraders' => $allTraders,
        ));
    }
    
}
    