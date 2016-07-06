<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_bc0f3bc00a756e394a0bce09c9e17a530d1f85541774d4e950001a0320380901 extends Twig_Template
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
        $__internal_ed6f7164afe9bae14eb547194326a373f7f340098807781f935cfa21e4851412 = $this->env->getExtension("native_profiler");
        $__internal_ed6f7164afe9bae14eb547194326a373f7f340098807781f935cfa21e4851412->enter($__internal_ed6f7164afe9bae14eb547194326a373f7f340098807781f935cfa21e4851412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6f7164afe9bae14eb547194326a373f7f340098807781f935cfa21e4851412->leave($__internal_ed6f7164afe9bae14eb547194326a373f7f340098807781f935cfa21e4851412_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a04c96e6ff3303874827823b7eb02174396643d4c77ebf46fa86b5e35981967 = $this->env->getExtension("native_profiler");
        $__internal_9a04c96e6ff3303874827823b7eb02174396643d4c77ebf46fa86b5e35981967->enter($__internal_9a04c96e6ff3303874827823b7eb02174396643d4c77ebf46fa86b5e35981967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9a04c96e6ff3303874827823b7eb02174396643d4c77ebf46fa86b5e35981967->leave($__internal_9a04c96e6ff3303874827823b7eb02174396643d4c77ebf46fa86b5e35981967_prof);

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
