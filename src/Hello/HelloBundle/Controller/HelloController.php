<?php

namespace Hello\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render("HelloHelloBundle:Hello:index.html.twig", array(
            "name" => $name
        ));
    }
}
