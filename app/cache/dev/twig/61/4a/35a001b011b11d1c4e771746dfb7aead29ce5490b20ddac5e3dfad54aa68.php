<?php

/* HomeHomeBundle::layout.html.twig */
class __TwigTemplate_614a35a001b011b11d1c4e771746dfb7aead29ce5490b20ddac5e3dfad54aa68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>Home</title>
\t<meta charset=\"utf-8\" />
\t<link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/images/favicon.ico"), "html", null, true);
        echo "\" />
\t<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/images/favicon.ico"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/css/style.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/css/slider.css"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/jquery-migrate-1.1.1.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/tms-0.4.1.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/jquery.carouFredSel-6.1.0-packed.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homehome/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
</head>

<div>
\t";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "</div>

<div class=\"symfony-content\">
\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "</div>
</html>";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "\t";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t";
    }

    public function getTemplateName()
    {
        return "HomeHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  100 => 26,  96 => 22,  93 => 21,  88 => 28,  86 => 26,  81 => 23,  79 => 21,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  21 => 1,);
    }
}
