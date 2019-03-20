<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\MediaBundle\Form\Type\MediaType;

final class ServiceAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('descriptionFr')
			->add('descriptionEn')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('descriptionFr')
			->add('descriptionEn')
            ->add('banniere')
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
		
			->add('descriptionFr')
			->add('descriptionEn')
                  ->add('image',MediaType::class,["context"=>"service","provider"=>"sonata.media.provider.image"])
                  ->add('banniere',MediaType::class,["context"=>"service","provider"=>"sonata.media.provider.image"])
			;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
			->add('descriptionFr')
			->add('descriptionEn')
			;
    }
}
