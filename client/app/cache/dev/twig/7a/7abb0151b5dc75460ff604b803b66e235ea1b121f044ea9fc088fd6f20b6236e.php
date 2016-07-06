<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_33cf58b2c45eca65a98ed2a83f850a1a0d67489d48edbceb004a58795cbabdcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f3ca31fb271c2671aa923171649ce6bf7726f4acdce2fab3dbdccdc399a017 = $this->env->getExtension("native_profiler");
        $__internal_24f3ca31fb271c2671aa923171649ce6bf7726f4acdce2fab3dbdccdc399a017->enter($__internal_24f3ca31fb271c2671aa923171649ce6bf7726f4acdce2fab3dbdccdc399a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f3ca31fb271c2671aa923171649ce6bf7726f4acdce2fab3dbdccdc399a017->leave($__internal_24f3ca31fb271c2671aa923171649ce6bf7726f4acdce2fab3dbdccdc399a017_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e23f6ae091f64215c5319cc0ed9b48a77d1de6950840ccdff5e816d67d5220e1 = $this->env->getExtension("native_profiler");
        $__internal_e23f6ae091f64215c5319cc0ed9b48a77d1de6950840ccdff5e816d67d5220e1->enter($__internal_e23f6ae091f64215c5319cc0ed9b48a77d1de6950840ccdff5e816d67d5220e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e23f6ae091f64215c5319cc0ed9b48a77d1de6950840ccdff5e816d67d5220e1->leave($__internal_e23f6ae091f64215c5319cc0ed9b48a77d1de6950840ccdff5e816d67d5220e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60bd92751c64673c2cc05ecfe6be9c30d680956f9465674970c76daca97e9bcc = $this->env->getExtension("native_profiler");
        $__internal_60bd92751c64673c2cc05ecfe6be9c30d680956f9465674970c76daca97e9bcc->enter($__internal_60bd92751c64673c2cc05ecfe6be9c30d680956f9465674970c76daca97e9bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_60bd92751c64673c2cc05ecfe6be9c30d680956f9465674970c76daca97e9bcc->leave($__internal_60bd92751c64673c2cc05ecfe6be9c30d680956f9465674970c76daca97e9bcc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aebe9fa1111498dc14553453f0bc94c11998ab33d62c9d3496c814543d3f7b05 = $this->env->getExtension("native_profiler");
        $__internal_aebe9fa1111498dc14553453f0bc94c11998ab33d62c9d3496c814543d3f7b05->enter($__internal_aebe9fa1111498dc14553453f0bc94c11998ab33d62c9d3496c814543d3f7b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aebe9fa1111498dc14553453f0bc94c11998ab33d62c9d3496c814543d3f7b05->leave($__internal_aebe9fa1111498dc14553453f0bc94c11998ab33d62c9d3496c814543d3f7b05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
