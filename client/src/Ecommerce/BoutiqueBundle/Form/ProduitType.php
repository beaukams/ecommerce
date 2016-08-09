<?php

namespace Ecommerce\BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_produit', 'text', array('required' => true))
            ->add('details_produit', 'text')
            ->add('prix_unitaire', 'number', array('required' => true))
            ->add('photo_produit', 'text')
            ->add('id_typeproduit', 'choice', array('choices' => array(1 => 'kams', 2 => 'moustapha')))
            ->add('id_departement', 'choice', array('choices' => array(1 => 'kams', 2 => 'moustapha')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\BoutiqueBundle\Entity\Produit'
        ));
    }

    public function getName()
    {
        return 'ecommerce_boutiquebundle_produittype';
    }
}
