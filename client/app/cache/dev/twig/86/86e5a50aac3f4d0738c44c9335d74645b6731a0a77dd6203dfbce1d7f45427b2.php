<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7ce9158a9bc850360d51ecbf5e3d87a9ef90b87d96e458f298079e96032293f0 extends Twig_Template
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
        $__internal_6833d239cb642add2a3ef833cd75b2c45c131fd4a4e270d5b9f2cc0095cad44d = $this->env->getExtension("native_profiler");
        $__internal_6833d239cb642add2a3ef833cd75b2c45c131fd4a4e270d5b9f2cc0095cad44d->enter($__internal_6833d239cb642add2a3ef833cd75b2c45c131fd4a4e270d5b9f2cc0095cad44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6833d239cb642add2a3ef833cd75b2c45c131fd4a4e270d5b9f2cc0095cad44d->leave($__internal_6833d239cb642add2a3ef833cd75b2c45c131fd4a4e270d5b9f2cc0095cad44d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9174d40e4db8fe305725574930d256a79484e52c3d4f0264069f2ed1798481cb = $this->env->getExtension("native_profiler");
        $__internal_9174d40e4db8fe305725574930d256a79484e52c3d4f0264069f2ed1798481cb->enter($__internal_9174d40e4db8fe305725574930d256a79484e52c3d4f0264069f2ed1798481cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9174d40e4db8fe305725574930d256a79484e52c3d4f0264069f2ed1798481cb->leave($__internal_9174d40e4db8fe305725574930d256a79484e52c3d4f0264069f2ed1798481cb_prof);

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
