<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fbfa502eada4b101c3f159e6a2d7a62ab97ce51cbfb8f64bdcffc64a6af08a9d extends Twig_Template
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
        $__internal_60521249fe3d56b477f54a1180a3ee784a2c4354726e3d01c4c2cf8a2caec344 = $this->env->getExtension("native_profiler");
        $__internal_60521249fe3d56b477f54a1180a3ee784a2c4354726e3d01c4c2cf8a2caec344->enter($__internal_60521249fe3d56b477f54a1180a3ee784a2c4354726e3d01c4c2cf8a2caec344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_60521249fe3d56b477f54a1180a3ee784a2c4354726e3d01c4c2cf8a2caec344->leave($__internal_60521249fe3d56b477f54a1180a3ee784a2c4354726e3d01c4c2cf8a2caec344_prof);

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
