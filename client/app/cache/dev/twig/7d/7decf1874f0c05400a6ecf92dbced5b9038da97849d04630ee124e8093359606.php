<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_15bf83a41ed9028a61e4b59fabe10a97b89f76fe6619cecc817a35f68b89638c extends Twig_Template
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
        $__internal_33828d646246f01ffb124d7d3220f7245ab398760a70b1cc5201d754df6c38b5 = $this->env->getExtension("native_profiler");
        $__internal_33828d646246f01ffb124d7d3220f7245ab398760a70b1cc5201d754df6c38b5->enter($__internal_33828d646246f01ffb124d7d3220f7245ab398760a70b1cc5201d754df6c38b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_33828d646246f01ffb124d7d3220f7245ab398760a70b1cc5201d754df6c38b5->leave($__internal_33828d646246f01ffb124d7d3220f7245ab398760a70b1cc5201d754df6c38b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
