<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\MediaBundle\Form\Type\MediaType;

final class ContactAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('telephone')
			->add('email')
			->add('adresse')
			->add('live_chat')
			->add('latitude')
			->add('longitude')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('telephone')
			->add('email')
			->add('adresse')
			->add('live_chat')
			->add('latitude')
			->add('longitude')
            ->add('baniere')
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
			->add('telephone')
			->add('email')
			->add('adresse')
			->add('live_chat')
			->add('latitude')
			->add('longitude')
            ->add('baniere',MediaType::class,["context"=>"default","provider"=>"sonata.media.provider.image"])

        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
			->add('telephone')
			->add('email')
			->add('adresse')
			->add('live_chat')
			->add('latitude')
			->add('longitude')
            ->add('baniere')

        ;
    }
}
