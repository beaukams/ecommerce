<?php

/* EcommerceUserBundle::base.html.twig */
class __TwigTemplate_448642e1bb174877056e80168623ec20994c36d62ceb8045e493f3980dbe3e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceUserBundle::base.html.twig", 1);
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
        $__internal_adcacbabe14f000b8270efbb00430e257e800bf3c1bf227b8e2bf02c086ddd30 = $this->env->getExtension("native_profiler");
        $__internal_adcacbabe14f000b8270efbb00430e257e800bf3c1bf227b8e2bf02c086ddd30->enter($__internal_adcacbabe14f000b8270efbb00430e257e800bf3c1bf227b8e2bf02c086ddd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adcacbabe14f000b8270efbb00430e257e800bf3c1bf227b8e2bf02c086ddd30->leave($__internal_adcacbabe14f000b8270efbb00430e257e800bf3c1bf227b8e2bf02c086ddd30_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_72f85d7465bfb2bd77dcf81bf496530b912cb1451e932607ccc1fab3ac27b7c9 = $this->env->getExtension("native_profiler");
        $__internal_72f85d7465bfb2bd77dcf81bf496530b912cb1451e932607ccc1fab3ac27b7c9->enter($__internal_72f85d7465bfb2bd77dcf81bf496530b912cb1451e932607ccc1fab3ac27b7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_72f85d7465bfb2bd77dcf81bf496530b912cb1451e932607ccc1fab3ac27b7c9->leave($__internal_72f85d7465bfb2bd77dcf81bf496530b912cb1451e932607ccc1fab3ac27b7c9_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle::base.html.twig";
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
