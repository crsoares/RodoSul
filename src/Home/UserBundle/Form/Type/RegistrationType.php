<?php

namespace Home\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', new UserType());
        $builder->add('role', new RoleType());
        /*$builder->add('Papeis', 'choice', array(
            //'property_path' => 'roles',
            'choices' => new RoleType()
        ));*/
        $builder->add('Registrar', 'submit');
    }
    
    public function getName()
    {
        return "registration";
    }
}

