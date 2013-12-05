<?php

namespace Home\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', 'text', array('label' => 'Nome de Usuario'));
        $builder->add('email', 'email');
        $builder->add('password', 'repeated', array(
            'first_name' => 'Senha',
            'second_name' => 'Confirmar_Senha',
            'type' => 'password'
        ));
        $builder->add('roles', new RoleType(), array('label' => ' '));
        
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

