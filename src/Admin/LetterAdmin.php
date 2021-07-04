<?php
// src/Admin/CategoryAdmin.php

namespace App\Admin;

use App\Entity\Category;
use App\Entity\Department;
use App\Entity\SonataUserUser;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class LetterAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('user_id', EntityType::class, [
                'class' => SonataUserUser::class,
                'choice_label' => 'username',
            ])
            ->add('department_id', EntityType::class, [
                'class' => Department::class,
                'choice_label' => 'name',
            ])
            ->add('number', NumberType::class, [
                'html5' => true
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'html5' => true
            ])
            ->add('content', TextareaType::class)
        ;


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id');

    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('id')
        ;
        $listMapper->add('_action', 'actions', array(
            'actions' => array(
                'edit' => array(),
                'delete' => array(),
            )
        ));
    }
}

