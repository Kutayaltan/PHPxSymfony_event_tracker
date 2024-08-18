<?php

namespace App\Form;

use App\Entity\ProductController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductControllerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ename', TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('time', null, [
                'widget' => 'single_text',
            ])
            ->add('image', TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('Type',  TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('Email',  TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('url',  TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProductController::class,
        ]);
    }
}
