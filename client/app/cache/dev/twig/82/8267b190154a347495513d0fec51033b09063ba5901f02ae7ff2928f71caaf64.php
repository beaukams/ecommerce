<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_349b74d30c762153d21abfd6404f593c8aa3c6c302a2a756e54543d15dfef628 extends Twig_Template
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
        $__internal_d9477aa442bcf54648a68bb6eef628dbe886eb5db308bc22fbaab284e21f0a34 = $this->env->getExtension("native_profiler");
        $__internal_d9477aa442bcf54648a68bb6eef628dbe886eb5db308bc22fbaab284e21f0a34->enter($__internal_d9477aa442bcf54648a68bb6eef628dbe886eb5db308bc22fbaab284e21f0a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d9477aa442bcf54648a68bb6eef628dbe886eb5db308bc22fbaab284e21f0a34->leave($__internal_d9477aa442bcf54648a68bb6eef628dbe886eb5db308bc22fbaab284e21f0a34_prof);

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
