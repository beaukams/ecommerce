<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_659b8c9a9686d90b728f56a9ed36437fd37f3deaeb105c19c753d266ab5e7490 extends Twig_Template
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
        $__internal_dcb0821132dcfc90a68e524b49ce34811e2224fe4dfd126611bb815e8d424163 = $this->env->getExtension("native_profiler");
        $__internal_dcb0821132dcfc90a68e524b49ce34811e2224fe4dfd126611bb815e8d424163->enter($__internal_dcb0821132dcfc90a68e524b49ce34811e2224fe4dfd126611bb815e8d424163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dcb0821132dcfc90a68e524b49ce34811e2224fe4dfd126611bb815e8d424163->leave($__internal_dcb0821132dcfc90a68e524b49ce34811e2224fe4dfd126611bb815e8d424163_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
