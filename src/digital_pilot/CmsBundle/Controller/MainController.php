<?php

namespace digital_pilot\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/co", name="digital_pilot_index")
     */
    public function indexAction()
    {
        return $this->render('digital_pilotCmsBundle:Default:index.html.twig');
    }

     /**
     * @Route("/choice", name="digital_pilot_choiceApp")
     */
    public function choiceAction()
    {
        return $this->render('digital_pilotCmsBundle:Default:choiceApp.html.twig');
    }
}
