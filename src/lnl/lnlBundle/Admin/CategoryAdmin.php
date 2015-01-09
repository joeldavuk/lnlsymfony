<?php

namespace lnl\lnlBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends Admin
{
    protected $formOptions = array(
        'cascade_validation' => true
    );

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General', array('class' => 'col-md-6'))
            ->add('title')
            ->end()
            ->with('Options', array('class' => 'col-md-6'))
           // ->add('position', 'integer', array('required' => false, 'data' => 0))
            ->add('parent', 'sonata_type_model', array(
            ), array(
                'placeholder' => 'No author selected'
            ))
            ->end()
        ;

        if (interface_exists('Sonata\MediaBundle\Model\MediaInterface')) {
            $formMapper
                ->with('General')
                ->add('media', 'sonata_type_model_list',
                    array('required' => false),
                    array(
                        'link_parameters' => array(
                            'provider' => 'sonata.media.provider.image',
                            'context'  => 'sonata_category',
                        )
                    )
                )
                ->end();
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            //->add('enabled')
            ->add('parent')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('slug')
            //->add('description')
           // ->add('enabled', null, array('editable' => true))
           // ->add('position')
            ->add('parent')
        ;
    }
}