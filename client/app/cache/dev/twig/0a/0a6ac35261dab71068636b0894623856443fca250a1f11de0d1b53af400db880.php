<?php

/* ::header.html.twig */
class __TwigTemplate_fbaebe631ab44c41f8e491caaa20f73fa0d957d8e58e059939e48ea121ac6578 extends Twig_Template
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
        $__internal_f14473551627188d047d0494be4f58cb396ecc6565ebd49a42ec72470820b327 = $this->env->getExtension("native_profiler");
        $__internal_f14473551627188d047d0494be4f58cb396ecc6565ebd49a42ec72470820b327->enter($__internal_f14473551627188d047d0494be4f58cb396ecc6565ebd49a42ec72470820b327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("::menu.html.twig", "::header.html.twig", 2)->display($context);
        
        $__internal_f14473551627188d047d0494be4f58cb396ecc6565ebd49a42ec72470820b327->leave($__internal_f14473551627188d047d0494be4f58cb396ecc6565ebd49a42ec72470820b327_prof);

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
