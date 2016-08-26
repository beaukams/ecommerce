<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_cf6775f9a18a0ec2d2211217454fe4fd9d029051199d43856166976c4d7f94c3 extends Twig_Template
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
        $__internal_ba3a897b0c12e47f6104ed1724f851ac0f8783340f7a87c9e3cb5f9c1098b6f8 = $this->env->getExtension("native_profiler");
        $__internal_ba3a897b0c12e47f6104ed1724f851ac0f8783340f7a87c9e3cb5f9c1098b6f8->enter($__internal_ba3a897b0c12e47f6104ed1724f851ac0f8783340f7a87c9e3cb5f9c1098b6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ba3a897b0c12e47f6104ed1724f851ac0f8783340f7a87c9e3cb5f9c1098b6f8->leave($__internal_ba3a897b0c12e47f6104ed1724f851ac0f8783340f7a87c9e3cb5f9c1098b6f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
