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
        $__internal_761188bd37fdc099a269fc4e9492e508b4eb8a3cc748aebe1b50d97ecdc66cae = $this->env->getExtension("native_profiler");
        $__internal_761188bd37fdc099a269fc4e9492e508b4eb8a3cc748aebe1b50d97ecdc66cae->enter($__internal_761188bd37fdc099a269fc4e9492e508b4eb8a3cc748aebe1b50d97ecdc66cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Commande:ajoutCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_761188bd37fdc099a269fc4e9492e508b4eb8a3cc748aebe1b50d97ecdc66cae->leave($__internal_761188bd37fdc099a269fc4e9492e508b4eb8a3cc748aebe1b50d97ecdc66cae_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_77c21b683c9519564344a4f58f813912b662b59cc1522c96d29389ca21739d77 = $this->env->getExtension("native_profiler");
        $__internal_77c21b683c9519564344a4f58f813912b662b59cc1522c96d29389ca21739d77->enter($__internal_77c21b683c9519564344a4f58f813912b662b59cc1522c96d29389ca21739d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_77c21b683c9519564344a4f58f813912b662b59cc1522c96d29389ca21739d77->leave($__internal_77c21b683c9519564344a4f58f813912b662b59cc1522c96d29389ca21739d77_prof);

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
