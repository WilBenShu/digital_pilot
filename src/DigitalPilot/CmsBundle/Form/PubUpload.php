<?php

namespace DigitalPilot\CmsBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PubUpload extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
/*        $builder->add('imageName','text',array('label'=>"nom"));
        $builder->add('imageFile','FileType',array('input'=>"fichier"));
        $builder->add('imageFile', FileType::class);*/
    }

    public function getForm()
    {
        return 'pub_form';
    }
}