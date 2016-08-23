<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_90984959a1c55312ac442906a0318d8c44c9402868f18cc14acfac9dc26fd2f3 extends Twig_Template
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
        $__internal_d5323d8a1e13a3005a3195ab971b2e0df18e0ac5beb3b02c7c9382b13bddbd41 = $this->env->getExtension("native_profiler");
        $__internal_d5323d8a1e13a3005a3195ab971b2e0df18e0ac5beb3b02c7c9382b13bddbd41->enter($__internal_d5323d8a1e13a3005a3195ab971b2e0df18e0ac5beb3b02c7c9382b13bddbd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d5323d8a1e13a3005a3195ab971b2e0df18e0ac5beb3b02c7c9382b13bddbd41->leave($__internal_d5323d8a1e13a3005a3195ab971b2e0df18e0ac5beb3b02c7c9382b13bddbd41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
