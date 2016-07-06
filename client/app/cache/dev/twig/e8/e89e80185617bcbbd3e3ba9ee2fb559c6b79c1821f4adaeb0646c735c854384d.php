<?php

/* EcommerceUserBundle:User:ajoutUser.html.twig */
class __TwigTemplate_40981250dd0dd1e95987bd2f6101c5f4224275477fe6ad5dbcde3e193546216c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceUserBundle:User:ajoutUser.html.twig", 1);
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
        $__internal_3d2153d079b66a57b7799210a982fadd772488cdeabae76486a51058ba29d62b = $this->env->getExtension("native_profiler");
        $__internal_3d2153d079b66a57b7799210a982fadd772488cdeabae76486a51058ba29d62b->enter($__internal_3d2153d079b66a57b7799210a982fadd772488cdeabae76486a51058ba29d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:ajoutUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2153d079b66a57b7799210a982fadd772488cdeabae76486a51058ba29d62b->leave($__internal_3d2153d079b66a57b7799210a982fadd772488cdeabae76486a51058ba29d62b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dff9b4508a35e6c5ad0af8c9ffe12e9e70637c60cddf5f89a4aac457a239658 = $this->env->getExtension("native_profiler");
        $__internal_2dff9b4508a35e6c5ad0af8c9ffe12e9e70637c60cddf5f89a4aac457a239658->enter($__internal_2dff9b4508a35e6c5ad0af8c9ffe12e9e70637c60cddf5f89a4aac457a239658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2dff9b4508a35e6c5ad0af8c9ffe12e9e70637c60cddf5f89a4aac457a239658->leave($__internal_2dff9b4508a35e6c5ad0af8c9ffe12e9e70637c60cddf5f89a4aac457a239658_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:ajoutUser.html.twig";
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
/* {% extends "EcommerceProduitBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<form method="POST" action="{{ path('ajouteProduit') }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
/* */
