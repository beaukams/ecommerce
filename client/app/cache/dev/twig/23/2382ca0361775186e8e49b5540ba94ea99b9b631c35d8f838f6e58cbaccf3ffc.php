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
        $__internal_2c074e7538eee60af8229e32793910638c6a4bc7700aecb409a5ce87ba6a8fe3 = $this->env->getExtension("native_profiler");
        $__internal_2c074e7538eee60af8229e32793910638c6a4bc7700aecb409a5ce87ba6a8fe3->enter($__internal_2c074e7538eee60af8229e32793910638c6a4bc7700aecb409a5ce87ba6a8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c074e7538eee60af8229e32793910638c6a4bc7700aecb409a5ce87ba6a8fe3->leave($__internal_2c074e7538eee60af8229e32793910638c6a4bc7700aecb409a5ce87ba6a8fe3_prof);

    }

    // line 3
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_6e877edce78812d3921c428c7b84939538a7633ca8b6c245bc0eebb7bc9e4ee1 = $this->env->getExtension("native_profiler");
        $__internal_6e877edce78812d3921c428c7b84939538a7633ca8b6c245bc0eebb7bc9e4ee1->enter($__internal_6e877edce78812d3921c428c7b84939538a7633ca8b6c245bc0eebb7bc9e4ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 4
        echo "

";
        
        $__internal_6e877edce78812d3921c428c7b84939538a7633ca8b6c245bc0eebb7bc9e4ee1->leave($__internal_6e877edce78812d3921c428c7b84939538a7633ca8b6c245bc0eebb7bc9e4ee1_prof);

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
