<?php

/* EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig */
class __TwigTemplate_3b4cfe886e60b53462ea9390e5df7e3b836473a383ec36e29e10b0b7d9beb0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig", 1);
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
        $__internal_56c36176209dac755f6ccebf2734fe583799ebd28258edc6718f7b43e4222972 = $this->env->getExtension("native_profiler");
        $__internal_56c36176209dac755f6ccebf2734fe583799ebd28258edc6718f7b43e4222972->enter($__internal_56c36176209dac755f6ccebf2734fe583799ebd28258edc6718f7b43e4222972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56c36176209dac755f6ccebf2734fe583799ebd28258edc6718f7b43e4222972->leave($__internal_56c36176209dac755f6ccebf2734fe583799ebd28258edc6718f7b43e4222972_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_665a08708cef4238ac6b81c7c40688bbeb280eb64ba480a1a776d2e8acaffeea = $this->env->getExtension("native_profiler");
        $__internal_665a08708cef4238ac6b81c7c40688bbeb280eb64ba480a1a776d2e8acaffeea->enter($__internal_665a08708cef4238ac6b81c7c40688bbeb280eb64ba480a1a776d2e8acaffeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ajouteCommande");
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
        
        $__internal_665a08708cef4238ac6b81c7c40688bbeb280eb64ba480a1a776d2e8acaffeea->leave($__internal_665a08708cef4238ac6b81c7c40688bbeb280eb64ba480a1a776d2e8acaffeea_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig";
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
/* 	<form method="POST" action="{{ path('ajouteCommande') }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
