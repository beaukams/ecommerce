<?php

/* EcommerceBoutiqueBundle:Commande:modifieCommande.html.twig */
class __TwigTemplate_fca08f541d92b5ffc878f7669d81977933b8c9bdf10293a75aa37403879233c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Commande:modifieCommande.html.twig", 1);
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
        $__internal_3c83631a617f5048f25c113a2216bf8d0fa712a072280e3903e3542515c36940 = $this->env->getExtension("native_profiler");
        $__internal_3c83631a617f5048f25c113a2216bf8d0fa712a072280e3903e3542515c36940->enter($__internal_3c83631a617f5048f25c113a2216bf8d0fa712a072280e3903e3542515c36940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Commande:modifieCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c83631a617f5048f25c113a2216bf8d0fa712a072280e3903e3542515c36940->leave($__internal_3c83631a617f5048f25c113a2216bf8d0fa712a072280e3903e3542515c36940_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_339568ded160f9457c3945ed04a0df45e42828e5825974d7db6dc4d737c13883 = $this->env->getExtension("native_profiler");
        $__internal_339568ded160f9457c3945ed04a0df45e42828e5825974d7db6dc4d737c13883->enter($__internal_339568ded160f9457c3945ed04a0df45e42828e5825974d7db6dc4d737c13883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifieCommande", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
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
        
        $__internal_339568ded160f9457c3945ed04a0df45e42828e5825974d7db6dc4d737c13883->leave($__internal_339568ded160f9457c3945ed04a0df45e42828e5825974d7db6dc4d737c13883_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Commande:modifieCommande.html.twig";
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
/* 	<form method="POST" action="{{ path('modifieCommande', {'id': id}) }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
