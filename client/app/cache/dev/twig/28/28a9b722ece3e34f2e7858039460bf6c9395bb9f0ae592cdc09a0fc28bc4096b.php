<?php

/* EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig */
class __TwigTemplate_73bc4451c5e82c5c818dd14edb873cf22f9a147f04c1f18b8346ca97100b58d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8dcec307ed9735f1e01fe1ac7d9ffd31f6f03f04295de25dab3c68e222c11db = $this->env->getExtension("native_profiler");
        $__internal_e8dcec307ed9735f1e01fe1ac7d9ffd31f6f03f04295de25dab3c68e222c11db->enter($__internal_e8dcec307ed9735f1e01fe1ac7d9ffd31f6f03f04295de25dab3c68e222c11db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8dcec307ed9735f1e01fe1ac7d9ffd31f6f03f04295de25dab3c68e222c11db->leave($__internal_e8dcec307ed9735f1e01fe1ac7d9ffd31f6f03f04295de25dab3c68e222c11db_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e91b46f36b692cfcd911cc24cfd4f7bd62fe31dd9608007bcbaeeddbcc9e49a8 = $this->env->getExtension("native_profiler");
        $__internal_e91b46f36b692cfcd911cc24cfd4f7bd62fe31dd9608007bcbaeeddbcc9e49a8->enter($__internal_e91b46f36b692cfcd911cc24cfd4f7bd62fe31dd9608007bcbaeeddbcc9e49a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ajouteProduit");
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
        
        $__internal_e91b46f36b692cfcd911cc24cfd4f7bd62fe31dd9608007bcbaeeddbcc9e49a8->leave($__internal_e91b46f36b692cfcd911cc24cfd4f7bd62fe31dd9608007bcbaeeddbcc9e49a8_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig";
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
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<form method="POST" action="{{ path('ajouteProduit') }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
