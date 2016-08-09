<?php

/* EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig */
class __TwigTemplate_b1b75b8887d2e5630c0dcbeda54d8f22fbc21ac7ef1285422f52cb651052993b extends Twig_Template
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
        $__internal_c2a7d63942586e0b3e0281221d6ba0eedb754a76ca7257c26d89d3868c87bb57 = $this->env->getExtension("native_profiler");
        $__internal_c2a7d63942586e0b3e0281221d6ba0eedb754a76ca7257c26d89d3868c87bb57->enter($__internal_c2a7d63942586e0b3e0281221d6ba0eedb754a76ca7257c26d89d3868c87bb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2a7d63942586e0b3e0281221d6ba0eedb754a76ca7257c26d89d3868c87bb57->leave($__internal_c2a7d63942586e0b3e0281221d6ba0eedb754a76ca7257c26d89d3868c87bb57_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f55ecc6204f8d241d6514bfe72e2e5a5fc90d815882e777894333222d59b2a4 = $this->env->getExtension("native_profiler");
        $__internal_5f55ecc6204f8d241d6514bfe72e2e5a5fc90d815882e777894333222d59b2a4->enter($__internal_5f55ecc6204f8d241d6514bfe72e2e5a5fc90d815882e777894333222d59b2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f55ecc6204f8d241d6514bfe72e2e5a5fc90d815882e777894333222d59b2a4->leave($__internal_5f55ecc6204f8d241d6514bfe72e2e5a5fc90d815882e777894333222d59b2a4_prof);

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
