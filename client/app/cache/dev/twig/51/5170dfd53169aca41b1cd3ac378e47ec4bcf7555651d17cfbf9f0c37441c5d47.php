<?php

/* EcommerceRestaurantBundle::index.html.twig */
class __TwigTemplate_2e9d0c041fa567e6a2f40357511bf1772a45aa02866523f33c0afb237ffd84a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceRestaurantBundle::base.html.twig", "EcommerceRestaurantBundle::index.html.twig", 1);
        $this->blocks = array(
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceRestaurantBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0c93dffab9539584a2aa564a3972a17cb53c0615e2dc7da01216d3fcbb912ec = $this->env->getExtension("native_profiler");
        $__internal_c0c93dffab9539584a2aa564a3972a17cb53c0615e2dc7da01216d3fcbb912ec->enter($__internal_c0c93dffab9539584a2aa564a3972a17cb53c0615e2dc7da01216d3fcbb912ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceRestaurantBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c93dffab9539584a2aa564a3972a17cb53c0615e2dc7da01216d3fcbb912ec->leave($__internal_c0c93dffab9539584a2aa564a3972a17cb53c0615e2dc7da01216d3fcbb912ec_prof);

    }

    // line 3
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_0b9bf5be346bfab971cf987d078391b79a1db38a26d65436c07a9d209174aaee = $this->env->getExtension("native_profiler");
        $__internal_0b9bf5be346bfab971cf987d078391b79a1db38a26d65436c07a9d209174aaee->enter($__internal_0b9bf5be346bfab971cf987d078391b79a1db38a26d65436c07a9d209174aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 4
        echo "
";
        
        $__internal_0b9bf5be346bfab971cf987d078391b79a1db38a26d65436c07a9d209174aaee->leave($__internal_0b9bf5be346bfab971cf987d078391b79a1db38a26d65436c07a9d209174aaee_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceRestaurantBundle::index.html.twig";
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
/* {% extends "EcommerceRestaurantBundle::base.html.twig" %}*/
/* */
/* {% block le_contenu %}*/
/* */
/* {% endblock %}*/
/* */
/* */
