<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class TartasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('descrcion', CKEditorType::class)
            ->add('igredientes', CKEditorType::class)
            ->add('foto', FileType::class, array('attr'=>array('onchange'=>'onChange(event)')))
            ->add('top')
            ->add('salvar', SubmitType::class, ['label' => 'Nueva Tarta'])
        ;
    }
}