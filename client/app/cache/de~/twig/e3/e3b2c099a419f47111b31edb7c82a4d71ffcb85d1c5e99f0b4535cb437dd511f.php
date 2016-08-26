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
        $__internal_59860bf823875f7de8ee3004f8ed37fb2ad9fbb35ea66e8c34950fbc1ef8d48d = $this->env->getExtension("native_profiler");
        $__internal_59860bf823875f7de8ee3004f8ed37fb2ad9fbb35ea66e8c34950fbc1ef8d48d->enter($__internal_59860bf823875f7de8ee3004f8ed37fb2ad9fbb35ea66e8c34950fbc1ef8d48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:modifieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59860bf823875f7de8ee3004f8ed37fb2ad9fbb35ea66e8c34950fbc1ef8d48d->leave($__internal_59860bf823875f7de8ee3004f8ed37fb2ad9fbb35ea66e8c34950fbc1ef8d48d_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_2466cadd85b185c4e93449ef1acd5a17fbae43608e4d2d9a399f4eb82d17e967 = $this->env->getExtension("native_profiler");
        $__internal_2466cadd85b185c4e93449ef1acd5a17fbae43608e4d2d9a399f4eb82d17e967->enter($__internal_2466cadd85b185c4e93449ef1acd5a17fbae43608e4d2d9a399f4eb82d17e967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_2466cadd85b185c4e93449ef1acd5a17fbae43608e4d2d9a399f4eb82d17e967->leave($__internal_2466cadd85b185c4e93449ef1acd5a17fbae43608e4d2d9a399f4eb82d17e967_prof);

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
