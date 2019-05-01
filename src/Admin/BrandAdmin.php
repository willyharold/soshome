<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\MediaBundle\Form\Type\MediaType;

final class BrandAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('titrefr')
			->add('titreen')
			->add('descriptionfr')
			->add('descriptionen')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('titrefr')
			->add('titreen')
			->add('descriptionfr')
			->add('descriptionen')
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
		
			->add('titrefr')
			->add('titreen')
			->add('descriptionfr')
			->add('descriptionen')
                 ->add('image',MediaType::class,["context"=>"service","provider"=>"sonata.media.provider.image"])
                  ->add('banniere',MediaType::class,["context"=>"service","provider"=>"sonata.media.provider.image"])
			;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
			->add('titrefr')
			->add('titreen')
			->add('descriptionfr')
			->add('descriptionen')
			;
    }
}
