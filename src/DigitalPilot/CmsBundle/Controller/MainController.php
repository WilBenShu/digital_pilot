<?php

namespace DigitalPilot\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DigitalPilot\CmsBundle\Document\Customer;
use DigitalPilot\CmsBundle\Form\ProfilType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/choice", name="digital_pilot_choiceApp")
     */
    public function indexAction()
    {
        $currentUser = $this->getUser();
        
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        
        //var_dump($users);
        
        return $this->render('CmsBundle:Default:index.html.twig', array(
            'user' => $currentUser
        ));
        //return $this->render('CmsBundle:Default:index.html.twig');
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
        $currentUser = $this->getUser();
        
        return $this->render('CmsBundle:Default:customerManagement.html.twig', array(
            'user' => $currentUser
        ));
    }
    
    /**
     * @Route("/slideshow", name="slideshow")
     */
    public function slideshowAction()
    {
        $currentUser = $this->getUser();

        return $this->render('CmsBundle:Default:slideshow.html.twig', array(
            'user' => $currentUser
            ));
    }
    
        /**
     * @Route("/error403", name="error403")
     */
    public function error403Action()
    {
        return $this->render('CmsBundle:Default:error403.html.twig');
    }

    /**
     * @Route("/profil", name="digital_pilot_profil")
     */
    public function profilAction(Request $request)
    {
        $currentUser = $this->getUser();
        $customer = new Customer();
        $form = $this->createForm(new ProfilType(), $customer);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                //Actions à effecter après validation du form
                $this->get('session')->getFlashBag()->add('notice', "Votre profil a bien été modifié ! ");

                // Add le customer dans la table customer
                $em = $this->getDoctrine()->getManager();
                //$customerRepository = $em->getRepository('CmsBundle:Customer');

               // $em->persist($customer);
               // $em->flush();

                //Redirection afin d'éviter de 're-posting'
                return $this->redirect($this->generateUrl('digital_pilot_profil'));
            }
        }

        return $this->render('CmsBundle:Default:profil.html.twig', array(
            'user' => $currentUser,
            'form' => $form->createView()
        ));
    }


}