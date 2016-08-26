<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1fbad510f19cd931c4fe9fac22dcdd7f857976d1e5d96958b8ef5932b1be847a extends Twig_Template
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
        $__internal_d6450d4bde1513ece5424320f524e430497b92e7e097d73bf3b102410ae1efab = $this->env->getExtension("native_profiler");
        $__internal_d6450d4bde1513ece5424320f524e430497b92e7e097d73bf3b102410ae1efab->enter($__internal_d6450d4bde1513ece5424320f524e430497b92e7e097d73bf3b102410ae1efab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d6450d4bde1513ece5424320f524e430497b92e7e097d73bf3b102410ae1efab->leave($__internal_d6450d4bde1513ece5424320f524e430497b92e7e097d73bf3b102410ae1efab_prof);

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
