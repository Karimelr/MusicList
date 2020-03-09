<?php

namespace App\Form;

use App\Entity\Optreden;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OptredenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Date')
            ->add('kickoff')
            ->add('hall')
            ->add('maxSeats')
            ->add('Artist_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Optreden::class,
        ]);
    }
}
