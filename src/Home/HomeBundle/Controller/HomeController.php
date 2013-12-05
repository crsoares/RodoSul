<?php

namespace Home\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
	
	public function indexAction(){
		return $this->render('HomeHomeBundle:Home:index.html.twig', array());
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