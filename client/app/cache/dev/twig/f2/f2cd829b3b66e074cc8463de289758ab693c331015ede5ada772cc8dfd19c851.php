<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_30d1ce016f64b0e4561308646c09f7dc0e7c75268700e849bbc1f82d44608598 extends Twig_Template
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
        $__internal_2f8e18f789c30c9145849a321e65140350d56cfa9ce56424efe09ec2493b127a = $this->env->getExtension("native_profiler");
        $__internal_2f8e18f789c30c9145849a321e65140350d56cfa9ce56424efe09ec2493b127a->enter($__internal_2f8e18f789c30c9145849a321e65140350d56cfa9ce56424efe09ec2493b127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2f8e18f789c30c9145849a321e65140350d56cfa9ce56424efe09ec2493b127a->leave($__internal_2f8e18f789c30c9145849a321e65140350d56cfa9ce56424efe09ec2493b127a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
