<?php

/* ::header.html.twig */
class __TwigTemplate_275896baaa7d7f60d9406e63c7b25193a8f8cc3e47b4a86fcaa581c676ec5f8d extends Twig_Template
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
        $__internal_7906ac1c16f3cf4bcdad061011e7dac5805dc0066473baec782ef698e50c27db = $this->env->getExtension("native_profiler");
        $__internal_7906ac1c16f3cf4bcdad061011e7dac5805dc0066473baec782ef698e50c27db->enter($__internal_7906ac1c16f3cf4bcdad061011e7dac5805dc0066473baec782ef698e50c27db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("::menu.html.twig", "::header.html.twig", 2)->display($context);
        
        $__internal_7906ac1c16f3cf4bcdad061011e7dac5805dc0066473baec782ef698e50c27db->leave($__internal_7906ac1c16f3cf4bcdad061011e7dac5805dc0066473baec782ef698e50c27db_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
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
/* */
/* {% include "::menu.html.twig" %}*/
/* */
