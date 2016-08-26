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
        $__internal_7ad84b5b16744bba8982da98263565ca5cad17b18c06bd80f4eaa6fa856b512e = $this->env->getExtension("native_profiler");
        $__internal_7ad84b5b16744bba8982da98263565ca5cad17b18c06bd80f4eaa6fa856b512e->enter($__internal_7ad84b5b16744bba8982da98263565ca5cad17b18c06bd80f4eaa6fa856b512e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Commande:modifieCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad84b5b16744bba8982da98263565ca5cad17b18c06bd80f4eaa6fa856b512e->leave($__internal_7ad84b5b16744bba8982da98263565ca5cad17b18c06bd80f4eaa6fa856b512e_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_1b27aec66411137bab1159435a2a8e562087bdd125b28ff087f5247b871925cb = $this->env->getExtension("native_profiler");
        $__internal_1b27aec66411137bab1159435a2a8e562087bdd125b28ff087f5247b871925cb->enter($__internal_1b27aec66411137bab1159435a2a8e562087bdd125b28ff087f5247b871925cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_1b27aec66411137bab1159435a2a8e562087bdd125b28ff087f5247b871925cb->leave($__internal_1b27aec66411137bab1159435a2a8e562087bdd125b28ff087f5247b871925cb_prof);

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
