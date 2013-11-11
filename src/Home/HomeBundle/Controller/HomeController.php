<?php

namespace Home\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
	/**
	 * @Route("/home/{name}", defaults={"_format"="xml"}, name="_home")
	 * @Template()
	 */
	public function indexAction($name){
		
		//return $this->redirect($this->generateUrl("_home_contact", array('name' => 'Lucas')));
		//return $this->forward('HomeHomeBundle:Home:fancy', array('name' => 'Crysthiano', 'color' => 'green'));
	}
	
	public function fancyAction($name, $color){
		return $this->render('HomeHomeBundle:Home:fancy.html.twig', array(
			'name' => $name,
			'color' => $color
		));
	}
	
	/**
	 * @Route("/contact/{name}", name="_home_contact")
	 * @Template()
	 */
	public function contactAction($name){
		return array("name" => $name);
	}
}