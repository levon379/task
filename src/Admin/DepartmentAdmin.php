<?php
// src/Admin/CategoryAdmin.php

namespace App\Admin;

use App\Entity\Category;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class DepartmentAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper->add('name', TextType::class)
            ->add('head', TextType::class)
            ->add('phone', TextType::class)
            ->add('address', TextType::class)
            ->add('logo', TextType::class);

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('name')
            ->add('head')
            ->add('phone')
            ->add('address')
            ->add('logo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('name')
            ->add('head')
            ->add('phone')
            ->add('address')
            ->add('logo')
        ;
    }
}

