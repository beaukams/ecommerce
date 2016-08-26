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
        $__internal_3c153c93905ccb7a2c7900b0b8090c3fa2834d140b40891dd5abaae8c64cb20a = $this->env->getExtension("native_profiler");
        $__internal_3c153c93905ccb7a2c7900b0b8090c3fa2834d140b40891dd5abaae8c64cb20a->enter($__internal_3c153c93905ccb7a2c7900b0b8090c3fa2834d140b40891dd5abaae8c64cb20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3c153c93905ccb7a2c7900b0b8090c3fa2834d140b40891dd5abaae8c64cb20a->leave($__internal_3c153c93905ccb7a2c7900b0b8090c3fa2834d140b40891dd5abaae8c64cb20a_prof);

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
