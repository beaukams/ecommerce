<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_507ff20b0d288a192d5b38314cbd67d1e74c87d304db2888589e348026e4ad2e extends Twig_Template
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
        $__internal_23e28667b2805ca4dcf1b7788ce6f3a45306dd0fa6bdfb602529304013a3f1f5 = $this->env->getExtension("native_profiler");
        $__internal_23e28667b2805ca4dcf1b7788ce6f3a45306dd0fa6bdfb602529304013a3f1f5->enter($__internal_23e28667b2805ca4dcf1b7788ce6f3a45306dd0fa6bdfb602529304013a3f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_23e28667b2805ca4dcf1b7788ce6f3a45306dd0fa6bdfb602529304013a3f1f5->leave($__internal_23e28667b2805ca4dcf1b7788ce6f3a45306dd0fa6bdfb602529304013a3f1f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
