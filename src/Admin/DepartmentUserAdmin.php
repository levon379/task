<?php
// src/Admin/CategoryAdmin.php

namespace App\Admin;

use App\Entity\Department;
use App\Entity\SonataUserUser;
use App\Entity\User;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class DepartmentUserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper->add('user', EntityType::class, [
            'class' => SonataUserUser::class,
            'choice_label' => 'username',
        ]);
        $formMapper->add('department', EntityType::class, [
            'class' => Department::class,
            'choice_label' => 'name',
        ]);


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('user_id')
            ->add('department_id')
        ;

    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
            ->add('user_id')
            ->add('department_id')
        ;
        $listMapper->add('_action', 'actions', array(
            'actions' => array(
                'edit' => array(),
                'delete' => array(),
            )
        ));
    }
}

