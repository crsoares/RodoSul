<?php

namespace Home\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Papeis', 'choice', array(
            'property_path' => 'role',
            'choices' => array('ROLE_ADMIN' => 'ADMIN', 'ROLE_USER' => 'USER')
        ));
    }
    
    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Home\UserBundle\Entity\Role'
        ));
    }
    
    public function getName()
    {
        return "role";
    }
}

