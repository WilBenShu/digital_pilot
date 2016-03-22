<?php

namespace DigitalPilot\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text', array('label' => "Prénom"));
        $builder->add('lastName', 'text', array('label' => "Nom"));
        $builder->add('email', 'email', array('label' => "Email"));
        $builder->add('phone', 'text', array('label' => "N° de téléphone"));
        $builder->add('portable', 'text', array('label' => "N° de portable"));
        $builder->add('address', 'text', array('label' => "Adresse"));
        $builder->add('company', 'text', array('label' => "Entreprise"));
        $builder->add('companySize', 'text', array('label' => "Taille de l'entreprise"));
        $builder->add('companyAddress', 'text', array('label' => "Adresse de l'entreprise"));
    }

    public function getName()
    {
        return 'profil_form';
    }
}