<?php

/* EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig */
class __TwigTemplate_97e07d8d9ddc5e648d62dfa8cf79f4035275dc94602cf928d680b6af2b71c42b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifieProduit", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t<input type='submit' value='Valider'/>
\t</form>
";
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
        return array (  38 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceProduitBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<form method="POST" action="{{ path('modifieProduit', {'id': id}) }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
