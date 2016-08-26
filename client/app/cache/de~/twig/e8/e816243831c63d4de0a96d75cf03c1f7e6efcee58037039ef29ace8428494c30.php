<?php

/* EcommerceUserBundle::base.html.twig */
class __TwigTemplate_ab450cccd886d251fc30f5dfaca0c6ac9be5b51db608321e7431a471c42ec30b extends Twig_Template
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
        $__internal_f6cadca7e9d6dddc7fbad60939f90bb1193ffbe72d9c708a590a96ee79e3d382 = $this->env->getExtension("native_profiler");
        $__internal_f6cadca7e9d6dddc7fbad60939f90bb1193ffbe72d9c708a590a96ee79e3d382->enter($__internal_f6cadca7e9d6dddc7fbad60939f90bb1193ffbe72d9c708a590a96ee79e3d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6cadca7e9d6dddc7fbad60939f90bb1193ffbe72d9c708a590a96ee79e3d382->leave($__internal_f6cadca7e9d6dddc7fbad60939f90bb1193ffbe72d9c708a590a96ee79e3d382_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_09bee5afa5383808039080308656a1ad83b46e97ae0605f647b0ebb3a2081b5a = $this->env->getExtension("native_profiler");
        $__internal_09bee5afa5383808039080308656a1ad83b46e97ae0605f647b0ebb3a2081b5a->enter($__internal_09bee5afa5383808039080308656a1ad83b46e97ae0605f647b0ebb3a2081b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_09bee5afa5383808039080308656a1ad83b46e97ae0605f647b0ebb3a2081b5a->leave($__internal_09bee5afa5383808039080308656a1ad83b46e97ae0605f647b0ebb3a2081b5a_prof);

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
