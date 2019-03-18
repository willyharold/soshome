<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,["attr"=>[ "placeholder"=>"Nom et Prenom", "required"=> true ]])
            ->add('email',EmailType::class,["attr"=>[ "placeholder"=>"Email","required"=> true]])
            ->add('objet',TextType::class,["attr"=>[ "placeholder"=>"Objet", "required" => true ]])
            ->add('description',null,["attr"=>[ "placeholder"=>"Message","required"=> true ]])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
