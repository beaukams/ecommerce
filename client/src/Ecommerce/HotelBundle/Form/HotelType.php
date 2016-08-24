<?php

namespace Ecommerce\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
/**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    $builder
            ->add('nomHotel')
            ->add('photoHotel')
            ->add('departementHotel')
            ->add('adresseHotel')
            ->add('telephoneHotel')
            ->add('mailHotel')
            ->add('facebookHotel')
        ;
    }	

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\HotelBundle\Entity\Hotel'
        ));
    }
}