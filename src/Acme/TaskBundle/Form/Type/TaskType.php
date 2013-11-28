<?php

namespace Acme\TaskBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('task')
                ->add('dueDate', null, array('widget' => 'single_text'))
                ->add('save', 'submit');
        
        $builder->add('category', new CategoryType());
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\TaskBundle\Entity\Task',
            'cascade_validation' => true
        ));
    }
    
    public function getName()
    {
        return 'task';
    }
}

