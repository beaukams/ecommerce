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
        $__internal_cdd651c00431a125c0e0f86e2347c1aff596ecdc991bec7218192effe1aff5ab = $this->env->getExtension("native_profiler");
        $__internal_cdd651c00431a125c0e0f86e2347c1aff596ecdc991bec7218192effe1aff5ab->enter($__internal_cdd651c00431a125c0e0f86e2347c1aff596ecdc991bec7218192effe1aff5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_cdd651c00431a125c0e0f86e2347c1aff596ecdc991bec7218192effe1aff5ab->leave($__internal_cdd651c00431a125c0e0f86e2347c1aff596ecdc991bec7218192effe1aff5ab_prof);

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
