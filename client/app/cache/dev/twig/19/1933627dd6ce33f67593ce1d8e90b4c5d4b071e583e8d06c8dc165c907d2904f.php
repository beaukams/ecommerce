<?php

/* EcommerceBoutiqueBundle::base.html.twig */
class __TwigTemplate_85c7b1de1f59fe59375c89886f5004ebf8b1b4a5552ece5b13404e2c3bbe8389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a59c92d6598d01d2dfcae633a03bc6ec6bcfc1d6438e18f68d6a58a51a8507b1 = $this->env->getExtension("native_profiler");
        $__internal_a59c92d6598d01d2dfcae633a03bc6ec6bcfc1d6438e18f68d6a58a51a8507b1->enter($__internal_a59c92d6598d01d2dfcae633a03bc6ec6bcfc1d6438e18f68d6a58a51a8507b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59c92d6598d01d2dfcae633a03bc6ec6bcfc1d6438e18f68d6a58a51a8507b1->leave($__internal_a59c92d6598d01d2dfcae633a03bc6ec6bcfc1d6438e18f68d6a58a51a8507b1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8549be6aa9ba9c9452a79b952cdf654e47f9f1da21836bb696c68a59708e81e7 = $this->env->getExtension("native_profiler");
        $__internal_8549be6aa9ba9c9452a79b952cdf654e47f9f1da21836bb696c68a59708e81e7->enter($__internal_8549be6aa9ba9c9452a79b952cdf654e47f9f1da21836bb696c68a59708e81e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_8549be6aa9ba9c9452a79b952cdf654e47f9f1da21836bb696c68a59708e81e7->leave($__internal_8549be6aa9ba9c9452a79b952cdf654e47f9f1da21836bb696c68a59708e81e7_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Produit: {{ parent() }} {% endblock %}*/
