<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class TemoignageAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			->add('id')
			->add('nom')
			->add('titre')
			->add('description')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			->add('id')
			->add('nom')
			->add('titre')
			->add('description')
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
			->add('nom')
			->add('titre')
			->add('description')
			;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			->add('id')
			->add('nom')
			->add('titre')
			->add('description')
			;
    }
}
