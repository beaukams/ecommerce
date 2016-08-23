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
        $__internal_e4d3f6e5d9769c756737b943a0aa82baa2790902117c9d81d217e0823de7ba2d = $this->env->getExtension("native_profiler");
        $__internal_e4d3f6e5d9769c756737b943a0aa82baa2790902117c9d81d217e0823de7ba2d->enter($__internal_e4d3f6e5d9769c756737b943a0aa82baa2790902117c9d81d217e0823de7ba2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d3f6e5d9769c756737b943a0aa82baa2790902117c9d81d217e0823de7ba2d->leave($__internal_e4d3f6e5d9769c756737b943a0aa82baa2790902117c9d81d217e0823de7ba2d_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_f1bdc004e770b112b3dee0b02bf8e326e24257c83ade5d8adf014fb342b6dcf0 = $this->env->getExtension("native_profiler");
        $__internal_f1bdc004e770b112b3dee0b02bf8e326e24257c83ade5d8adf014fb342b6dcf0->enter($__internal_f1bdc004e770b112b3dee0b02bf8e326e24257c83ade5d8adf014fb342b6dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_f1bdc004e770b112b3dee0b02bf8e326e24257c83ade5d8adf014fb342b6dcf0->leave($__internal_f1bdc004e770b112b3dee0b02bf8e326e24257c83ade5d8adf014fb342b6dcf0_prof);

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
