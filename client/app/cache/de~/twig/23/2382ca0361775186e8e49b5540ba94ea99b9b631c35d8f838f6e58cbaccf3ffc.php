<?php

/* ::annonces.html.twig */
class __TwigTemplate_14fc0488fce30e80c7e02b1f97ceffd8f8b497754128e4bd55f61f86f51ac0ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "::annonces.html.twig", 1);
        $this->blocks = array(
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d22ca83781dc6ac0c912f16630f5ccbfe223d4f10e505d97c8b0ea096a2bbdc = $this->env->getExtension("native_profiler");
        $__internal_6d22ca83781dc6ac0c912f16630f5ccbfe223d4f10e505d97c8b0ea096a2bbdc->enter($__internal_6d22ca83781dc6ac0c912f16630f5ccbfe223d4f10e505d97c8b0ea096a2bbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d22ca83781dc6ac0c912f16630f5ccbfe223d4f10e505d97c8b0ea096a2bbdc->leave($__internal_6d22ca83781dc6ac0c912f16630f5ccbfe223d4f10e505d97c8b0ea096a2bbdc_prof);

    }

    // line 3
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_78dacf222ce88494ac820f273596cc3445ddbfce790c3cceb45b7abc780764f9 = $this->env->getExtension("native_profiler");
        $__internal_78dacf222ce88494ac820f273596cc3445ddbfce790c3cceb45b7abc780764f9->enter($__internal_78dacf222ce88494ac820f273596cc3445ddbfce790c3cceb45b7abc780764f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 4
        echo "

";
        
        $__internal_78dacf222ce88494ac820f273596cc3445ddbfce790c3cceb45b7abc780764f9->leave($__internal_78dacf222ce88494ac820f273596cc3445ddbfce790c3cceb45b7abc780764f9_prof);

    }

    public function getTemplateName()
    {
        return "::annonces.html.twig";
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
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
/* */
/* {% block body_content %}*/
/* */
/* */
/* {% endblock %}*/
