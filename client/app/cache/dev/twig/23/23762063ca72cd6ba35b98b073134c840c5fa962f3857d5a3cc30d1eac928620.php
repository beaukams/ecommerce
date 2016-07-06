<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4c612fc4afa33ed4ef5cdf6e90fa6d06cda74c83975779ca93661dfc11f3a788 extends Twig_Template
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
        $__internal_1640ac4bdd55e26e7c1893601392047414469f9692315fd7dd9fb3f4b3f22fd9 = $this->env->getExtension("native_profiler");
        $__internal_1640ac4bdd55e26e7c1893601392047414469f9692315fd7dd9fb3f4b3f22fd9->enter($__internal_1640ac4bdd55e26e7c1893601392047414469f9692315fd7dd9fb3f4b3f22fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1640ac4bdd55e26e7c1893601392047414469f9692315fd7dd9fb3f4b3f22fd9->leave($__internal_1640ac4bdd55e26e7c1893601392047414469f9692315fd7dd9fb3f4b3f22fd9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
