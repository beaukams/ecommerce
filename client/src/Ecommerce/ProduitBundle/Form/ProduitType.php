<?php

namespace Ecommerce\ProduitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom_produit', 'text', array('required' => true, ))
            ->add('details_produit', 'text')
            ->add('prix_unitaire', 'number', array('required' => true, ))
            ->add('photo_produit', 'text')
            ->add('id_typeproduit', 'choice', array('choices' => array('1' => 'kams', '2' => 'moustapha')))
            ->add('id_departement', 'choice')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults(array(
        'data_class' => 'Ecommerce\ProduitBundle\Entity\Produit'
        ));
    }

    public function getName()
    {
        return 'ecommerce_produitbundle_produittype';
    }
}
