<?php

namespace DigitalPilot\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DigitalPilot\CmsBundle\Document\Trader;
use DigitalPilot\CmsBundle\Document\Publicite;

use DigitalPilot\CmsBundle\Form\ProfilType;
use DigitalPilot\CmsBundle\Form\PubUpload;

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
     * @Route("/slideshow", name="digital_pilot_slideshow")
     */
    public function slideshowAction()
    {
        $currentUser = $this->getUser();
        $pub = new Publicite();
        $form = $this->createForm(new PubUpload(), $pub);

        return $this->render('CmsBundle:Default:slideshow.html.twig', array(
            'user' => $currentUser,
            'form' => $form->createView()
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
        $dm = $this->get('doctrine_mongodb')->getManager()->getRepository('CmsBundle:Trader');

        $currentUser = $this->getUser();
        $currentTrader = $dm->findOneByEmail($currentUser->getEmail());

        // IF CUSTOMER DON'T EXIST
        // ADD NEW CUSTOMER WITH EMAIL ONLY IF NOT EXIST
        if($currentTrader == NULL) {
            $dm2 = $this->get('doctrine_mongodb')->getManager();

            $trader = new Trader();
            $trader->setFirstName('');
            $trader->setLastName('');
            $trader->setEmail($currentUser->getEmail());
            $trader->setPhone('');
            $trader->setPortable('');
            $trader->setAddress('');
            $trader->setCompany('');
            $trader->setCompanySize('');
            $trader->setCompanyAddress('');

            $currentTrader = $trader;

            // Add le customer dans la table customer
            $dm2->persist($trader);
            $dm2->flush();
        }


        $trader = new Trader();
        $form = $this->createForm(new ProfilType(), $trader);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                //Actions à effecter après validation du form
                $this->get('session')->getFlashBag()->add('notice', "Votre profil a bien été modifié ! ");

                // Update le customer dans la table customer
                $currentTrader = $dm->updateOneByMail($currentUser->getEmail(),
                    $trader->getFirstName(),
                    $trader->getLastName(),
                    $trader->getPhone(),
                    $trader->getPortable(),
                    $trader->getAddress(),
                    $trader->getCompany(),
                    $trader->getCompanySize(),
                    $trader->getCompanyAddress());
            }
        }

        return $this->render('CmsBundle:Default:profil.html.twig', array(
            'user' => $currentUser,
            'customer' => $currentTrader,
            'form' => $form->createView()
        ));
    }


}