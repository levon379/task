<?php
// src/Admin/BlogPostAdmin.php

namespace App\Admin;

use App\Entity\Category;
use Cassandra\Tinyint;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

final class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            // ...
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
            ])
            ->add('title', TextType::class)
            ->add('body', TextareaType::class)
            ->add('draft', TextType::class)
        ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('title')
            ->add('body')
            ->add('draft')
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('title')
            ->add('body')
            ->add('draft')
    ;
    }
}
