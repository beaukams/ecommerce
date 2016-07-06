<?php

/* EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig */
class __TwigTemplate_73749c3b7ea6a27ebe74e02505f28b2db7825db69bc92a173dfa32dbaee91499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceProduitBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98f423751a285565fbd3347c1b8e06ef9a808e0e76ef6896cea7486b8417e1c3 = $this->env->getExtension("native_profiler");
        $__internal_98f423751a285565fbd3347c1b8e06ef9a808e0e76ef6896cea7486b8417e1c3->enter($__internal_98f423751a285565fbd3347c1b8e06ef9a808e0e76ef6896cea7486b8417e1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98f423751a285565fbd3347c1b8e06ef9a808e0e76ef6896cea7486b8417e1c3->leave($__internal_98f423751a285565fbd3347c1b8e06ef9a808e0e76ef6896cea7486b8417e1c3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa59b5414a4b37a869133247d6d09ad94232926127fed6db879134719d9a7250 = $this->env->getExtension("native_profiler");
        $__internal_aa59b5414a4b37a869133247d6d09ad94232926127fed6db879134719d9a7250->enter($__internal_aa59b5414a4b37a869133247d6d09ad94232926127fed6db879134719d9a7250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifieProduit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type='submit' value='Valider'/>
\t</form>
";
        
        $__internal_aa59b5414a4b37a869133247d6d09ad94232926127fed6db879134719d9a7250->leave($__internal_aa59b5414a4b37a869133247d6d09ad94232926127fed6db879134719d9a7250_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceProduitBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<form method="POST" action="{{ path('modifieProduit', {'id': id}) }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
