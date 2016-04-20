<?php

namespace DigitalPilot\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text', array('label' => "Prénom"));
        $builder->add('lastName', 'text', array('label' => "Nom"));
        $builder->add('sexe', 'choice', array(
            'label' => 'Sexe ?',
            'choices' => array(1 => 'Homme', 0 => 'Femme'),
            'expanded' => true,
            'multiple' => false,
            'required' => true));
        $builder->add('age', 'int', array('label' => "Nom"));
        $builder->add('email', 'email', array('label' => "Email"));
        $builder->add('phone', 'text', array('label' => "N° de téléphone"));
        $builder->add('country', 'text', array('label' => "Ville"));
        $builder->add('question1', 'text', array('label' => "Question :"));
        $builder->add('commentary', 'textarea', array('label' => "Commentaires :"));

    }

    public function getName()
    {
        return 'customer_form';
    }
}