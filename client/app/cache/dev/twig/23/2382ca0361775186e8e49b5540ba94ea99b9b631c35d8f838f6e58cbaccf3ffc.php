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
        $__internal_aef31e9752719a7cb0bfc4e39ef2729ac1f16ad2d6cf6d1f986914e54b20e772 = $this->env->getExtension("native_profiler");
        $__internal_aef31e9752719a7cb0bfc4e39ef2729ac1f16ad2d6cf6d1f986914e54b20e772->enter($__internal_aef31e9752719a7cb0bfc4e39ef2729ac1f16ad2d6cf6d1f986914e54b20e772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::annonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aef31e9752719a7cb0bfc4e39ef2729ac1f16ad2d6cf6d1f986914e54b20e772->leave($__internal_aef31e9752719a7cb0bfc4e39ef2729ac1f16ad2d6cf6d1f986914e54b20e772_prof);

    }

    // line 3
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_2ba6a49d0c0b28e50b033af55f9642d9aabff9c1f1386c32a32863d5cddeac25 = $this->env->getExtension("native_profiler");
        $__internal_2ba6a49d0c0b28e50b033af55f9642d9aabff9c1f1386c32a32863d5cddeac25->enter($__internal_2ba6a49d0c0b28e50b033af55f9642d9aabff9c1f1386c32a32863d5cddeac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 4
        echo "

";
        
        $__internal_2ba6a49d0c0b28e50b033af55f9642d9aabff9c1f1386c32a32863d5cddeac25->leave($__internal_2ba6a49d0c0b28e50b033af55f9642d9aabff9c1f1386c32a32863d5cddeac25_prof);

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
