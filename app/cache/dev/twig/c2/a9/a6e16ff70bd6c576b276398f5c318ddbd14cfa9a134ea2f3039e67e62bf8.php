<?php

/* HomeHomeBundle:Home:embedded.html.twig */
class __TwigTemplate_c2a9a6e16ff70bd6c576b276398f5c318ddbd14cfa9a134ea2f3039e67e62bf8 extends Twig_Template
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
        echo "Ola ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!";
    }

    public function getTemplateName()
    {
        return "HomeHomeBundle:Home:embedded.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  38 => 6,  35 => 5,  29 => 3,);
    }
}
