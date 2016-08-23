<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_64ea6e5641252f3ae970973b7f3e5bf584bae957a2de143c25bcb24407a2a620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_72aa6bdaf8fafd2ff9e410b1b4177d84fbcf6ed07bbce5e35131a020c810d16e = $this->env->getExtension("native_profiler");
        $__internal_72aa6bdaf8fafd2ff9e410b1b4177d84fbcf6ed07bbce5e35131a020c810d16e->enter($__internal_72aa6bdaf8fafd2ff9e410b1b4177d84fbcf6ed07bbce5e35131a020c810d16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72aa6bdaf8fafd2ff9e410b1b4177d84fbcf6ed07bbce5e35131a020c810d16e->leave($__internal_72aa6bdaf8fafd2ff9e410b1b4177d84fbcf6ed07bbce5e35131a020c810d16e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9582e404798e7f57031631026ae8c748e2e5b0b7542028efb8e05cbcef02169a = $this->env->getExtension("native_profiler");
        $__internal_9582e404798e7f57031631026ae8c748e2e5b0b7542028efb8e05cbcef02169a->enter($__internal_9582e404798e7f57031631026ae8c748e2e5b0b7542028efb8e05cbcef02169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9582e404798e7f57031631026ae8c748e2e5b0b7542028efb8e05cbcef02169a->leave($__internal_9582e404798e7f57031631026ae8c748e2e5b0b7542028efb8e05cbcef02169a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
