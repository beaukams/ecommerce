<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ccd12076fb4a6e682b65843501639aebd161cdf7402164f92c34dc721182883b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0d72e3a708d4634aba1f0fd879e4496448401e944a77dd012c8b2d7a2abdf4db = $this->env->getExtension("native_profiler");
        $__internal_0d72e3a708d4634aba1f0fd879e4496448401e944a77dd012c8b2d7a2abdf4db->enter($__internal_0d72e3a708d4634aba1f0fd879e4496448401e944a77dd012c8b2d7a2abdf4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d72e3a708d4634aba1f0fd879e4496448401e944a77dd012c8b2d7a2abdf4db->leave($__internal_0d72e3a708d4634aba1f0fd879e4496448401e944a77dd012c8b2d7a2abdf4db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1854030e98b9ac0716b926f798459c505d652946e6063dc699d1dd5fd9f9c78 = $this->env->getExtension("native_profiler");
        $__internal_b1854030e98b9ac0716b926f798459c505d652946e6063dc699d1dd5fd9f9c78->enter($__internal_b1854030e98b9ac0716b926f798459c505d652946e6063dc699d1dd5fd9f9c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b1854030e98b9ac0716b926f798459c505d652946e6063dc699d1dd5fd9f9c78->leave($__internal_b1854030e98b9ac0716b926f798459c505d652946e6063dc699d1dd5fd9f9c78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
