<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_cc89fddbc0aeb0ad1d06bf3183fe99e9d472cf5192c5cb40012663aec5ed20c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6b922cec4788704fb4b90e822ac979012e076673e057a10c0a541a33c3372553 = $this->env->getExtension("native_profiler");
        $__internal_6b922cec4788704fb4b90e822ac979012e076673e057a10c0a541a33c3372553->enter($__internal_6b922cec4788704fb4b90e822ac979012e076673e057a10c0a541a33c3372553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b922cec4788704fb4b90e822ac979012e076673e057a10c0a541a33c3372553->leave($__internal_6b922cec4788704fb4b90e822ac979012e076673e057a10c0a541a33c3372553_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_611b0ba00f035a5aa00f84dae7c33305f86125bee686127c746eafccbeb07241 = $this->env->getExtension("native_profiler");
        $__internal_611b0ba00f035a5aa00f84dae7c33305f86125bee686127c746eafccbeb07241->enter($__internal_611b0ba00f035a5aa00f84dae7c33305f86125bee686127c746eafccbeb07241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_611b0ba00f035a5aa00f84dae7c33305f86125bee686127c746eafccbeb07241->leave($__internal_611b0ba00f035a5aa00f84dae7c33305f86125bee686127c746eafccbeb07241_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
