<?php

/* HomeHomeBundle:Home:fancy.html.twig */
class __TwigTemplate_eba1f551efe51fdc3c2b36aec926e0e3a9b3c9e124b401bad3e02d7029e53dd3 extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "HomeHomeBundle:Home:fancy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  49 => 10,  46 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
