<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\MediaBundle\Form\Type\MediaType;

final class AboutAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('descriptionEN')
			->add('descriptionFR')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('descriptionEN')
			->add('descriptionFR')
            ->add('banniere1')
            ->add('banniere2')
            ->add('banniere3')


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
			->add('descriptionEN')
			->add('descriptionFR')
            ->add('banniere1',MediaType::class,["context"=>"banauxi","provider"=>"sonata.media.provider.image"])
            ->add('banniere2',MediaType::class,["context"=>"propos","provider"=>"sonata.media.provider.image"])
            ->add('banniere3',MediaType::class,["context"=>"propos","provider"=>"sonata.media.provider.image"])

        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
			->add('descriptionEN')
			->add('descriptionFR')
			;
    }
}
