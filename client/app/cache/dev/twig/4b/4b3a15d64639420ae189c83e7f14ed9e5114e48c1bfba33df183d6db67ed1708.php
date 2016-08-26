<?php

/* EcommerceUserBundle:User:modifieUser.html.twig */
class __TwigTemplate_ee49a41a654c3f9198db275116836caff5e40d01b801dc40a3051c7bf2a9ea96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceUserBundle:User:modifieUser.html.twig", 1);
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
        $__internal_6a56f4e15f59cbabcb9dc0ebc9060452c0fa550bed1716e1bd1f3a10497aa126 = $this->env->getExtension("native_profiler");
        $__internal_6a56f4e15f59cbabcb9dc0ebc9060452c0fa550bed1716e1bd1f3a10497aa126->enter($__internal_6a56f4e15f59cbabcb9dc0ebc9060452c0fa550bed1716e1bd1f3a10497aa126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:modifieUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a56f4e15f59cbabcb9dc0ebc9060452c0fa550bed1716e1bd1f3a10497aa126->leave($__internal_6a56f4e15f59cbabcb9dc0ebc9060452c0fa550bed1716e1bd1f3a10497aa126_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_02ed881a05266062dfa0a49b0768a8df906d8c3bf9cbb401e9eb0126fc7a56b4 = $this->env->getExtension("native_profiler");
        $__internal_02ed881a05266062dfa0a49b0768a8df906d8c3bf9cbb401e9eb0126fc7a56b4->enter($__internal_02ed881a05266062dfa0a49b0768a8df906d8c3bf9cbb401e9eb0126fc7a56b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifieUser", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
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
        
        $__internal_02ed881a05266062dfa0a49b0768a8df906d8c3bf9cbb401e9eb0126fc7a56b4->leave($__internal_02ed881a05266062dfa0a49b0768a8df906d8c3bf9cbb401e9eb0126fc7a56b4_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:modifieUser.html.twig";
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
/* 	<form method="POST" action="{{ path('modifieUser', {'id': id}) }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
