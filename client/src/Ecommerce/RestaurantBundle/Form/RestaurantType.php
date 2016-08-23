<?php

namespace Ecommerce\RestaurantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestaurantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomRestaurant')
            ->add('photoRestaurant')
            ->add('depRestaurant')
            ->add('adresseRestaurant')
            ->add('telRestaurant')
            ->add('mailRestaurant')
            ->add('fcbkRestaurant')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\RestaurantBundle\Entity\Restaurant'
        ));
    }
}
