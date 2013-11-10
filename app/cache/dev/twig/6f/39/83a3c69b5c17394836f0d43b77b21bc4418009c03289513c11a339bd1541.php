<?php

/* HomeHomeBundle:Home:contact.html.twig */
class __TwigTemplate_6f3983a3c69b5c17394836f0d43b77b21bc4418009c03289513c11a339bd1541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p style=\"color: green\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "HomeHomeBundle:Home:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
