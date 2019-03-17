<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\MediaBundle\Form\Type\MediaType;

final class AccueilAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('descriptionFr')
			->add('descriptionEn')
            ->add('banniere1')
            ->add('banniere2')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('descriptionFr')
			->add('descriptionEn')
            ->add('banniere1')
            ->add('banniere2')
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
			->add('id')
			->add('descriptionFr')
			->add('descriptionEn')
            ->add('banniere1',MediaType::class,["context"=>"default","provider"=>"sonata.media.provider.image"])
            ->add('banniere2',MediaType::class,["context"=>"default","provider"=>"sonata.media.provider.image"])

        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
			->add('descriptionFr')
			->add('descriptionEn')
            ->add('banniere1')
            ->add('banniere2')
			;
    }
}
