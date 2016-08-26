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
        $__internal_848ce2a52b5236325dbf5f7ce69533e3c260ba83eec75961fd9e0b57ad0bb25a = $this->env->getExtension("native_profiler");
        $__internal_848ce2a52b5236325dbf5f7ce69533e3c260ba83eec75961fd9e0b57ad0bb25a->enter($__internal_848ce2a52b5236325dbf5f7ce69533e3c260ba83eec75961fd9e0b57ad0bb25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848ce2a52b5236325dbf5f7ce69533e3c260ba83eec75961fd9e0b57ad0bb25a->leave($__internal_848ce2a52b5236325dbf5f7ce69533e3c260ba83eec75961fd9e0b57ad0bb25a_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_9ab58261ada714a64fb945cb8462dcee2431f004297dbbd4227ae9f1029eb108 = $this->env->getExtension("native_profiler");
        $__internal_9ab58261ada714a64fb945cb8462dcee2431f004297dbbd4227ae9f1029eb108->enter($__internal_9ab58261ada714a64fb945cb8462dcee2431f004297dbbd4227ae9f1029eb108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_9ab58261ada714a64fb945cb8462dcee2431f004297dbbd4227ae9f1029eb108->leave($__internal_9ab58261ada714a64fb945cb8462dcee2431f004297dbbd4227ae9f1029eb108_prof);

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
