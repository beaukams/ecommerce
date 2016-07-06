<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_45ea360e4d93364ee0e15383fc54abe3036403770936b8b3a54a3eb30e5702e9 extends Twig_Template
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
        $__internal_ab65c014b8b2f172482db8621cf8bfc8f75979b42f4d7272c1d8f896f3a3ffc1 = $this->env->getExtension("native_profiler");
        $__internal_ab65c014b8b2f172482db8621cf8bfc8f75979b42f4d7272c1d8f896f3a3ffc1->enter($__internal_ab65c014b8b2f172482db8621cf8bfc8f75979b42f4d7272c1d8f896f3a3ffc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ab65c014b8b2f172482db8621cf8bfc8f75979b42f4d7272c1d8f896f3a3ffc1->leave($__internal_ab65c014b8b2f172482db8621cf8bfc8f75979b42f4d7272c1d8f896f3a3ffc1_prof);

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
