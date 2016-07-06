<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cf506e23d416a57451cd449f3f5029d1f8439acd08da4751741ceb5ea20e6574 extends Twig_Template
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
        $__internal_741034ed2592bbf596bda8669895674a4b992bfe49fa06efe65b39b6cad75bb7 = $this->env->getExtension("native_profiler");
        $__internal_741034ed2592bbf596bda8669895674a4b992bfe49fa06efe65b39b6cad75bb7->enter($__internal_741034ed2592bbf596bda8669895674a4b992bfe49fa06efe65b39b6cad75bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_741034ed2592bbf596bda8669895674a4b992bfe49fa06efe65b39b6cad75bb7->leave($__internal_741034ed2592bbf596bda8669895674a4b992bfe49fa06efe65b39b6cad75bb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
