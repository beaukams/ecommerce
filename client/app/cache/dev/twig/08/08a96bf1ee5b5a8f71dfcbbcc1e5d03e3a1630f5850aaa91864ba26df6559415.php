<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a5b031b713367a47a607e4a09703d907853adf09c40823482be80c01437c3c63 extends Twig_Template
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
        $__internal_3339a875582ce49a9ae870b2c5eccf7ec32e0d12b8c6d206e234e7d55fd9e3e2 = $this->env->getExtension("native_profiler");
        $__internal_3339a875582ce49a9ae870b2c5eccf7ec32e0d12b8c6d206e234e7d55fd9e3e2->enter($__internal_3339a875582ce49a9ae870b2c5eccf7ec32e0d12b8c6d206e234e7d55fd9e3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3339a875582ce49a9ae870b2c5eccf7ec32e0d12b8c6d206e234e7d55fd9e3e2->leave($__internal_3339a875582ce49a9ae870b2c5eccf7ec32e0d12b8c6d206e234e7d55fd9e3e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
