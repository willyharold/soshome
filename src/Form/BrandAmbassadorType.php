<?php

namespace App\Form;

use App\Entity\BrandAmbassador;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BrandAmbassadorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,["attr"=>[ "placeholder"=>"Nom et Prenom", "required"=> true ]])
            ->add('email',EmailType::class,["attr"=>[ "placeholder"=>"Email","required"=> true]])
            ->add('telephone',null,["attr"=>[ "placeholder"=>"Téléphone","required"=> true ]])
            ->add('quartier',TextType::class,["attr"=>[ "placeholder"=>"Quartier","required"=> true ]])
            ->add('description',null,["attr"=>[ "placeholder"=>"Un mot de motivation","required"=> true ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BrandAmbassador::class,
        ]);
    }
}
