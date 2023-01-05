<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchTerrainType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder    
            // ->add('intitule')
            // ->add('descriptif')
            // Form fields
            // ->add('minprice',IntegerType::class,[
                
            //     'label' => false,
            //     'attr'  => [
            //         'placeholder' =>'prix min'
            //     ]
            // ])
            // ->add('maxprice',IntegerType::class,[
               
            //     'label' => false,
            //     'attr'  => [
            //         'placeholder' =>'prix max'
            //     ]
            // ])
            ->add('prix')
            ->add('localisation');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
