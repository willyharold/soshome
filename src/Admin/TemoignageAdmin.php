<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\MediaBundle\Form\Type\MediaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class TemoignageAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('nom')
			->add('titreFr')
            ->add('titreEn')
            ->add('descriptionFr')
            ->add('descriptionEn')

        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('nom')
            ->add('titreFr')
            ->add('titreEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('image')
			->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
			->add('nom')
            ->add('titreFr')
            ->add('titreEn')
            ->add('descriptionFr',TextType::class)
            ->add('descriptionEn')
            ->add('image',MediaType::class,["context"=>"temoignage","provider"=>"sonata.media.provider.image"])
			;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
            ->add('titreFr')
            ->add('titreEn')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('image')
        ;
    }
}
