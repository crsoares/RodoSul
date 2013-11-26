<?php

namespace Home\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Home\UserBundle\Form\Type\RegistrationType;
use Home\UserBundle\Form\Model\Registration;

use Home\UserBundle\Entity\User;

class AccountController extends Controller
{
    public function registerAction()
    {
        /*$registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create')
        ));*/
        
        return $this->render(
                    'HomeUserBundle:Account:register.html.twig',
                    array()
                );
    }
    
    public function createAction(Request $request)
    {
        print_r($this->getRequest());die;
        $data = new User();
        //$request = $this->get('request');
        //$data->setEmail($request->get('email'));
        //$data->setPlainPassword($request->get('password'));
        /*$form = $this->createFormBuilder($data)
                     ->add('email', 'text')
                     ->add('plainPassword', 'password')
                     ->getForm();*/
        
        $form = $this->createFormBuilder()->getForm();
        
       /* $em = $this->getDoctrine()->getEntityManager();
        $form = $this->createForm(new RegistrationType(), new Registration());
        $form->handleRequest($request);*/
        //$request = $this->get('request');
        //echo $request->get('email'); die;
       // print_r($request);die;
        
        if($request->isMethod('POST')){
        //if($request->getMethod() == 'POST'){
           //print_r($form->getData());die;
           //echo $form->getData();die;
            $form->submit($request);
           //$form->bind($request);
            //echo 'akii';die;
           // $form->bindRequest($request);
            //$form->handleRequest($request);
            if($form->isValid()){
                echo 'akii teste';
            }
            //echo 'akii';
            die;
            //$form
            $registration = $form->getData();
            
            $em->persist($registration->getUser());
            $em->flush();
            
            return $this->forward('HomeUserBundle:Account:success.html.twig', array());
        }
        
        return $this->render(
                    'HomeUserBundle:Account:register.html.twig',
                    array('form' => $form->createView())
                );
    }
}

