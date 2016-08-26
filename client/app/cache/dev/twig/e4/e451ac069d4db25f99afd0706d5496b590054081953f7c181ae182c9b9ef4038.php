<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6f8504d8873fa62d6972c96fee093dd22049aed6c8006546699201d7e4e8e694 extends Twig_Template
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
        $__internal_c01094c4e0b8e0f1675db7c844b73df3b62b7ef376f71b055287f9926a421180 = $this->env->getExtension("native_profiler");
        $__internal_c01094c4e0b8e0f1675db7c844b73df3b62b7ef376f71b055287f9926a421180->enter($__internal_c01094c4e0b8e0f1675db7c844b73df3b62b7ef376f71b055287f9926a421180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c01094c4e0b8e0f1675db7c844b73df3b62b7ef376f71b055287f9926a421180->leave($__internal_c01094c4e0b8e0f1675db7c844b73df3b62b7ef376f71b055287f9926a421180_prof);

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
