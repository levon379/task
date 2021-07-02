<?php
// src/Admin/CategoryAdmin.php

namespace App\Admin;

use App\Entity\Department;
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
        $formMapper->add('user_id', EntityType::class, [
            'class' => User::class,
            'choice_label' => 'username',
        ]);
        $formMapper->add('department_id', EntityType::class, [
            'class' => Department::class,
            'choice_label' => 'name',
        ]);


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('number');

    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('name')

        ;
    }
}

