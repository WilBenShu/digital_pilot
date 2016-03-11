<?php

namespace DigitalPilot\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/choice", name="digital_pilot_choiceApp")
     */
    public function indexAction()
    {
        return $this->render('CmsBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/bo_commercant", name="bo_commercant")
     */
    public function boAction()
    {
        return $this->render('CmsBundle:Default:boCommercant.html.twig');
    }
    
    /**
     * @Route("/customer_management", name="customer_management")
     */
    public function customerAction()
    {
        return $this->render('CmsBundle:Default:customerManagement.html.twig');
    }
    
    /**
     * @Route("/slideshow", name="slideshow")
     */
    public function slideshowAction()
    {
        return $this->render('CmsBundle:Default:slideshow.html.twig');
    }
    
        /**
     * @Route("/error403", name="error403")
     */
    public function error403Action()
    {
        return $this->render('CmsBundle:Default:error403.html.twig');
    }


}