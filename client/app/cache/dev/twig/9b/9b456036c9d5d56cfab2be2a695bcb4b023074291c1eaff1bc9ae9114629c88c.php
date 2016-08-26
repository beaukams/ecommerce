<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7d62518fb10b4993dc808d3ef0309f4259e1a6cced7a70efe34f68af096b43dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e9461d019010e9e8a31f6633e9f95a50fca71d9c89034421b3c08375dcd718c0 = $this->env->getExtension("native_profiler");
        $__internal_e9461d019010e9e8a31f6633e9f95a50fca71d9c89034421b3c08375dcd718c0->enter($__internal_e9461d019010e9e8a31f6633e9f95a50fca71d9c89034421b3c08375dcd718c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9461d019010e9e8a31f6633e9f95a50fca71d9c89034421b3c08375dcd718c0->leave($__internal_e9461d019010e9e8a31f6633e9f95a50fca71d9c89034421b3c08375dcd718c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_220d58321d47e23633859b9baaf721b7a525ee30f9f58b0ecee87927c977d4f3 = $this->env->getExtension("native_profiler");
        $__internal_220d58321d47e23633859b9baaf721b7a525ee30f9f58b0ecee87927c977d4f3->enter($__internal_220d58321d47e23633859b9baaf721b7a525ee30f9f58b0ecee87927c977d4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_220d58321d47e23633859b9baaf721b7a525ee30f9f58b0ecee87927c977d4f3->leave($__internal_220d58321d47e23633859b9baaf721b7a525ee30f9f58b0ecee87927c977d4f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
