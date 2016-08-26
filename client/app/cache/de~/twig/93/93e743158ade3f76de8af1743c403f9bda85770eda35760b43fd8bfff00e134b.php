<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c4fa07f5b11afdd8ce3660bc2699b383aabf17f4c40e778ead508e97a44dc0d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61d9fd37e0e77f9e90670ee9d23016eb8d484276558fd7f634d67b9850c8ec17 = $this->env->getExtension("native_profiler");
        $__internal_61d9fd37e0e77f9e90670ee9d23016eb8d484276558fd7f634d67b9850c8ec17->enter($__internal_61d9fd37e0e77f9e90670ee9d23016eb8d484276558fd7f634d67b9850c8ec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d9fd37e0e77f9e90670ee9d23016eb8d484276558fd7f634d67b9850c8ec17->leave($__internal_61d9fd37e0e77f9e90670ee9d23016eb8d484276558fd7f634d67b9850c8ec17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bd97a909f0fa59a9ef7cdc2533add9734c06430d468fce9b9c3efbf1ebe0bd6 = $this->env->getExtension("native_profiler");
        $__internal_9bd97a909f0fa59a9ef7cdc2533add9734c06430d468fce9b9c3efbf1ebe0bd6->enter($__internal_9bd97a909f0fa59a9ef7cdc2533add9734c06430d468fce9b9c3efbf1ebe0bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9bd97a909f0fa59a9ef7cdc2533add9734c06430d468fce9b9c3efbf1ebe0bd6->leave($__internal_9bd97a909f0fa59a9ef7cdc2533add9734c06430d468fce9b9c3efbf1ebe0bd6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
