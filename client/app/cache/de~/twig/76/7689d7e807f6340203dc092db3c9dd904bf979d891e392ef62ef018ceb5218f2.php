<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_63e14fb88a5759d2e961f533f3b3472187c389d9b314bceede38777107672ef2 extends Twig_Template
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
        $__internal_d2c80a694b86f815351ce07c3ed4411de3cf36296459bdf1ff2e2bdf10a19cc9 = $this->env->getExtension("native_profiler");
        $__internal_d2c80a694b86f815351ce07c3ed4411de3cf36296459bdf1ff2e2bdf10a19cc9->enter($__internal_d2c80a694b86f815351ce07c3ed4411de3cf36296459bdf1ff2e2bdf10a19cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d2c80a694b86f815351ce07c3ed4411de3cf36296459bdf1ff2e2bdf10a19cc9->leave($__internal_d2c80a694b86f815351ce07c3ed4411de3cf36296459bdf1ff2e2bdf10a19cc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
