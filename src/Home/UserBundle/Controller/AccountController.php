<?php

namespace Home\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Home\UserBundle\Form\Type\RegistrationType;
use Home\UserBundle\Form\Model\Registration;
use Home\UserBundle\Form\Type\UserType;
use Home\UserBundle\Entity\User;
//use Home\UserBundle\Entity\Role;

class AccountController extends Controller
{
    public function registerAction()
    {
        /*$registration = new Registration();
        
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create')
        ));*/
        //$user = new User();
        
        $form = $this->createForm(new UserType());
        
        return $this->render('HomeUserBundle:Account:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function createAction(Request $request)
    {
        $factory = $this->get('security.encoder_factory');
        
        $em = $this->getDoctrine()->getManager();
        
        //$role = new Role();
        
        $form = $this->createForm(new UserType());
        
        $form->handleRequest($request);
        
        if($form->isValid()) {
            /*$registration = $form->getData();
            //print_r($registration->getRole());die;
            $role = str_replace("ROLE_", "", $registration->getRole()->getRole());
            //echo $role;die;
            $registration->getRole()->setName($role);
            $encoder = $factory->getEncoder($registration->getUser());
            $password = $encoder->encodePassword('ryanpass', $registration->getUser()->getSalt());
            $registration->getUser()->setPassword($password);
            
            $registration->getUser()
                         ->setRoles($registration->getRole());
            $em->persist($registration->getUser());
            $em->flush();*/
            $user = $form->getData();
            //var_dump($user);die;
            //print_r($user->getRoles()->toArray());die;
            $role = $user->getRoles()->toArray();
            //echo $teste['role'];die;
            //echo $user->getEmail();die;
            //echo $role->getRole();die;
            $role[0]->setName(str_replace("ROLE_", "", $role[0]->getRole()));
            //$user->setRoles($role);
            
            //print_r($role);die;
            //$role->setRole($role['role']);
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword('ryanpass', $user->getSalt());
            $user->setPassword($password);
            
            /*$registration->getUser()
                         ->setRoles($registration->getRole());*/
            //print_r($user);die;
            //echo $user;die;
            //exit('akiii');
            $em->persist($user);
            $em->flush();
            
            return $this->redirect($this->generateUrl('account_success'));
        }
        
        return $this->render('HomeUserBundle:Account:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
