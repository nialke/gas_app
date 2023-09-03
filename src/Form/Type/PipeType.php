<?php

namespace App\Form\Type;

use App\Entity\Pipe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PipeType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pipe::class,
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
            ->add('material', TextType::class)
            ->add('minimumYieldStrength', NumberType::class)
            ->add('tensileStrength', NumberType::class)
            ->add('outerDiameter', NumberType::class)
            ->add('nominalWallThickness', NumberType::class)
            ->add('corrosionAllowance', NumberType::class)
            ->add('save', SubmitType::class);
    }
}