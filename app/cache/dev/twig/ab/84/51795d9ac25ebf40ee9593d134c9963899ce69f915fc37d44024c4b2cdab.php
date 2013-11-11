<?php

/* HomeHomeBundle:Home:index.html.twig */
class __TwigTemplate_ab8451795d9ac25ebf40ee9593d134c9963899ce69f915fc37d44024c4b2cdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HomeHomeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HomeHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Ola " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HomeHomeBundle:Home:fancy", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "color" => "green")));
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<h1>";
        echo twig_include($this->env, $context, "HomeHomeBundle:Home:embedded.html.twig");
        echo "</h1>
\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_home_contact", array("name" => "Crysthiano de Aguiar Soares"));
        echo "\">link utiliando a função path do Symfony</a>
\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("_home_contact", array("name" => "Heloisa eu te amo muitoooo"));
        echo "\">url absouto com a função url do Symfony</a>
";
    }

    public function getTemplateName()
    {
        return "HomeHomeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  54 => 11,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
