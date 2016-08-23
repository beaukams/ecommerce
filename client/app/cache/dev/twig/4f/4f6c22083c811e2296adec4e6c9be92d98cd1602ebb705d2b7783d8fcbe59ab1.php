<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_75cb3616ffeaee39519ca2fdabe1e235e671b0dfd79c9a61a31a010d9702ad1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77ec992c4a20f7292c2d840d4e8d669756923d5231a96b3b026d73462a19a456 = $this->env->getExtension("native_profiler");
        $__internal_77ec992c4a20f7292c2d840d4e8d669756923d5231a96b3b026d73462a19a456->enter($__internal_77ec992c4a20f7292c2d840d4e8d669756923d5231a96b3b026d73462a19a456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_77ec992c4a20f7292c2d840d4e8d669756923d5231a96b3b026d73462a19a456->leave($__internal_77ec992c4a20f7292c2d840d4e8d669756923d5231a96b3b026d73462a19a456_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
