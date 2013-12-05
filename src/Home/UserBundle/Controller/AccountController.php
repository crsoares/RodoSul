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
        $form = $this->createForm(new UserType());
        
        return $this->render('HomeUserBundle:Account:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function createAction(Request $request)
    {
        $factory = $this->get('security.encoder_factory');
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new UserType());
        $form->handleRequest($request);
        
        if($form->isValid()) {
            $user = $form->getData();
            $role = $user->getRoles()->toArray();
            $role[0]->setName(str_replace("ROLE_", "", $role[0]->getRole()));
            
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword('ryanpass', $user->getSalt());
            $user->setPassword($password);
            
            $em->persist($user);
            $em->flush();
            
            return $this->redirect($this->generateUrl('account_success'));
        }
        
        return $this->render('HomeUserBundle:Account:register.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
