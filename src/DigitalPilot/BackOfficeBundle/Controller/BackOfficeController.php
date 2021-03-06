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
            'allTraders' => $allTraders
        ));
    }
    
        /**
     * @Route("/profilBo", name="profil_user")
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
        
        

        return $this->render('BackOfficeBundle:Default:profile_user.html.twig', array(
            'user' => $currentUser,
            'customer' => $currentTrader,
            'form' => $form->createView(),
        ));
    }
    

    
}
    