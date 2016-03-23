<?php

namespace DigitalPilot\CmsBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PubUpload extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('imageName','text',array('label'=>"nom"));
        $builder->add('imageFile','File',array('input'=>"fichier"));
    }

    public function getForm()
    {
        return 'pub_form';
    }
}