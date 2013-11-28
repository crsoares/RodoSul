<?php

namespace Acme\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Acme\TaskBundle\Form\Type\TaskType;
use Acme\TaskBundle\Entity\Task;


class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        $task = new Task();
        $task->setTask('Escrever um post no blog');
        $task->setDueDate(new \DateTime('tomorrow'));
        
        $form = $this->createForm(new TaskType(), $task);
        
        $form->handleRequest($request);
        
        if($form->isValid()) {
            
            $action = $form->get('saveAndAdd')->isClicked() ? 'task_delete' : 'task_success';
            
            return $this->redirect($this->generateUrl($action));
        }
        
        return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function deleteAction()
    {
        return $this->render('AcmeTaskBundle:Default:delete.html.twig');
    }
    
    public function successAction()
    {
        return $this->render('AcmeTaskBundle:Default:success.html.twig');
    }
}
