<?php

/* EcommerceUserBundle:User:modifieProduit.html.twig */
class __TwigTemplate_b67155ab254d77860d7de221a8c05fa334db2ccff637f48a1ae12d826b8f7542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceUserBundle:User:modifieProduit.html.twig", 1);
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
        $__internal_1ee62859f47e164acf5d87e7be0cba86ded878a1d1b12d1068ba0470f1274db7 = $this->env->getExtension("native_profiler");
        $__internal_1ee62859f47e164acf5d87e7be0cba86ded878a1d1b12d1068ba0470f1274db7->enter($__internal_1ee62859f47e164acf5d87e7be0cba86ded878a1d1b12d1068ba0470f1274db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:modifieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ee62859f47e164acf5d87e7be0cba86ded878a1d1b12d1068ba0470f1274db7->leave($__internal_1ee62859f47e164acf5d87e7be0cba86ded878a1d1b12d1068ba0470f1274db7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc6be011df6f266566e4167ccf438daecd97ab5635245eee6c3484ab05ff773 = $this->env->getExtension("native_profiler");
        $__internal_1dc6be011df6f266566e4167ccf438daecd97ab5635245eee6c3484ab05ff773->enter($__internal_1dc6be011df6f266566e4167ccf438daecd97ab5635245eee6c3484ab05ff773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1dc6be011df6f266566e4167ccf438daecd97ab5635245eee6c3484ab05ff773->leave($__internal_1dc6be011df6f266566e4167ccf438daecd97ab5635245eee6c3484ab05ff773_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:modifieProduit.html.twig";
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
/* 	<form method="POST" action="{{ path('modifieProduit', {'id': id}) }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
