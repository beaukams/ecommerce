<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6f02522995f02af1e0832e97e80675b3241d4bcb2234a643a172e29531a1dd46 extends Twig_Template
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
        $__internal_91e9b1c7d3d32e7202b4dac8cbbb1599f523057731b929dfc8bc1dd26c305a4c = $this->env->getExtension("native_profiler");
        $__internal_91e9b1c7d3d32e7202b4dac8cbbb1599f523057731b929dfc8bc1dd26c305a4c->enter($__internal_91e9b1c7d3d32e7202b4dac8cbbb1599f523057731b929dfc8bc1dd26c305a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e9b1c7d3d32e7202b4dac8cbbb1599f523057731b929dfc8bc1dd26c305a4c->leave($__internal_91e9b1c7d3d32e7202b4dac8cbbb1599f523057731b929dfc8bc1dd26c305a4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07bd5b7c76ebc77f8855ddcb184c18074f40f1bb7c058f9bfc811fa3d526aae6 = $this->env->getExtension("native_profiler");
        $__internal_07bd5b7c76ebc77f8855ddcb184c18074f40f1bb7c058f9bfc811fa3d526aae6->enter($__internal_07bd5b7c76ebc77f8855ddcb184c18074f40f1bb7c058f9bfc811fa3d526aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07bd5b7c76ebc77f8855ddcb184c18074f40f1bb7c058f9bfc811fa3d526aae6->leave($__internal_07bd5b7c76ebc77f8855ddcb184c18074f40f1bb7c058f9bfc811fa3d526aae6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7bcc608b4217f779efadd44fd3347cd8ab8fd42bad020e22c60b8d1093dad96 = $this->env->getExtension("native_profiler");
        $__internal_e7bcc608b4217f779efadd44fd3347cd8ab8fd42bad020e22c60b8d1093dad96->enter($__internal_e7bcc608b4217f779efadd44fd3347cd8ab8fd42bad020e22c60b8d1093dad96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7bcc608b4217f779efadd44fd3347cd8ab8fd42bad020e22c60b8d1093dad96->leave($__internal_e7bcc608b4217f779efadd44fd3347cd8ab8fd42bad020e22c60b8d1093dad96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_07ccce46e44bdfca97247412def785cb108c28bece325cbee06021d1288277ee = $this->env->getExtension("native_profiler");
        $__internal_07ccce46e44bdfca97247412def785cb108c28bece325cbee06021d1288277ee->enter($__internal_07ccce46e44bdfca97247412def785cb108c28bece325cbee06021d1288277ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_07ccce46e44bdfca97247412def785cb108c28bece325cbee06021d1288277ee->leave($__internal_07ccce46e44bdfca97247412def785cb108c28bece325cbee06021d1288277ee_prof);

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
