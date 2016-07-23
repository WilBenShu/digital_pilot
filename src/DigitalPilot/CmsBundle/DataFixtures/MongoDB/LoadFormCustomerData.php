<?php

// src/DigitalPilot/CmsBundle/DataFixtures/MongoDB/LoadFormCustomer.php

namespace DigitalPilot\CmsBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use DigitalPilot\CmsBundle\Document\FormCustomer;

class LoadFormCustomerData implements FixtureInterface {
    /**
     * (@inheritDoc)
     */
    public function load(ObjectManager $manager) {
        $formCustomer1 = new FormCustomer();
        $formCustomer1->setLabel("Demande du prénom");
        $formCustomer1->setType("text");
        $formCustomer1->setIsActif(true);
        $manager->persist($formCustomer1);

        $formCustomer2 = new FormCustomer();
        $formCustomer2->setLabel("Demande du nom");
        $formCustomer2->setType("text");
        $formCustomer2->setIsActif(true);
        $manager->persist($formCustomer2);

        $formCustomer3 = new FormCustomer();
        $formCustomer3->setLabel("Demande de l'âge");
        $formCustomer3->setType("number");
        $formCustomer3->setIsActif(true);
        $manager->persist($formCustomer3);

        $formCustomer4 = new FormCustomer();
        $formCustomer4->setLabel("Demande du sexe");
        $formCustomer4->setType("radio");
        $formCustomer4->setIsActif(true);
        $manager->persist($formCustomer4);

        $formCustomer5 = new FormCustomer();
        $formCustomer5->setLabel("Demande de l'email");
        $formCustomer5->setType("text");
        $formCustomer5->setIsActif(true);
        $manager->persist($formCustomer5);

        $formCustomer6 = new FormCustomer();
        $formCustomer6->setLabel("Demande du n° de téléphone");
        $formCustomer6->setType("text");
        $formCustomer6->setIsActif(true);
        $manager->persist($formCustomer6);

        $formCustomer7 = new FormCustomer();
        $formCustomer7->setLabel("Demande de la ville");
        $formCustomer7->setType("text");
        $formCustomer7->setIsActif(true);
        $manager->persist($formCustomer7);

        $formCustomer8 = new FormCustomer();
        $formCustomer8->setLabel("Zone de commentaires");
        $formCustomer8->setType("textarea");
        $formCustomer8->setIsActif(true);
        $manager->persist($formCustomer8);

        $manager->flush();
    }
}