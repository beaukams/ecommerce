<?php

/* EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig */
class __TwigTemplate_c055004da9340815ae1c5487825dc394779c1c26b154a7344e9ff1d975576888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig", 1);
        $this->blocks = array(
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0019bfc34d8913cab68e71bdb262df1d0d73755ab6c4b13ad12fae0d6b88f01 = $this->env->getExtension("native_profiler");
        $__internal_e0019bfc34d8913cab68e71bdb262df1d0d73755ab6c4b13ad12fae0d6b88f01->enter($__internal_e0019bfc34d8913cab68e71bdb262df1d0d73755ab6c4b13ad12fae0d6b88f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0019bfc34d8913cab68e71bdb262df1d0d73755ab6c4b13ad12fae0d6b88f01->leave($__internal_e0019bfc34d8913cab68e71bdb262df1d0d73755ab6c4b13ad12fae0d6b88f01_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_60bbc86d508f2ced847152017a71f7b3ebc05623cd79e516163e6e94e5c83b59 = $this->env->getExtension("native_profiler");
        $__internal_60bbc86d508f2ced847152017a71f7b3ebc05623cd79e516163e6e94e5c83b59->enter($__internal_60bbc86d508f2ced847152017a71f7b3ebc05623cd79e516163e6e94e5c83b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_60bbc86d508f2ced847152017a71f7b3ebc05623cd79e516163e6e94e5c83b59->leave($__internal_60bbc86d508f2ced847152017a71f7b3ebc05623cd79e516163e6e94e5c83b59_prof);

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
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
/* {% block le_contenu  %}*/
/* 	<form method="POST" action="{{ path('modifieProduit', {'id': id}) }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
