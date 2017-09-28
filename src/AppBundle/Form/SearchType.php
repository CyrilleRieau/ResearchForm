<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class SearchType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ref')->add('name')->add('description')->add('isEnabled')->add('isPremium')->add('price')->add('note')->add('createdAt')->add('updatedAt');
    }
    /**
     * {@inheritdoc}
     */
     public function configureOptions(OptionsResolver $resolver)
     {
         $resolver->setDefaults(array(
             'data_class' => 'AppBundle\Entity\Product'
         ));
     }
 
     /**
      * {@inheritdoc}
      */
     public function getBlockPrefix()
     {
         return 'appbundle_product';
     }
   
}
