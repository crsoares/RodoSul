<?php

namespace Home\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text');
        $builder->add('email', 'email');
        $builder->add('password', 'repeated', array(
            'first_name' => 'password',
            'second_name' => 'confirm',
            'type' => 'password'
        ));
        $builder->add('roles', new RoleType());
        //$builder->add('roles', 'collection', array('type' => new RoleType()));
        /*$builder->add('roles', 'collection', array(
            'type' => 'choice',
            'options' => array(
                'choices' => array(
                    'ROLE_ADMIN' => 'ADMIN',
                    'ROLE_USER' => 'USER'
                )
            )
        ));*/
        /*$builder->add('roles', 'choice', array(
            'choices' => array('ROLE_ADMIN' => 'ADMIN', 'ROLE_USER' => 'USER')
        ));*/
        /*$builder->add('Papeis', 'choice', array(
            'property_path' => 'roles',
            'choices' => array('ROLE_ADMIN' => 'ADMIN', 'ROLE_USER' => 'USER')
        ));*/
        $builder->add('Ativo', 'checkbox', array(
            'property_path' => 'isActive'
        ));
        
        $builder->add('Registrar', 'submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Home\UserBundle\Entity\User',
            //'cascade_validation' => true
        ));
    }
    
    public function getName()
    {
        return "user";
    }
}

