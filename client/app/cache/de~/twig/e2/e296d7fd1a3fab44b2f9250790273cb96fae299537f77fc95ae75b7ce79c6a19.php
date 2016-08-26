<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3354523364543a662807f96920a6bb273f7b0f5ceaf0a8fae8cc3869c6b7b397 extends Twig_Template
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
        $__internal_99959f12c25d0a80a17311f2f8088fad0dca9e5e8ffa6a74103a5018b3d2cdc5 = $this->env->getExtension("native_profiler");
        $__internal_99959f12c25d0a80a17311f2f8088fad0dca9e5e8ffa6a74103a5018b3d2cdc5->enter($__internal_99959f12c25d0a80a17311f2f8088fad0dca9e5e8ffa6a74103a5018b3d2cdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99959f12c25d0a80a17311f2f8088fad0dca9e5e8ffa6a74103a5018b3d2cdc5->leave($__internal_99959f12c25d0a80a17311f2f8088fad0dca9e5e8ffa6a74103a5018b3d2cdc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0488bdeb98207d0adb4485c86dfe6253e64b4db344a0b572e5707d3fcd44350f = $this->env->getExtension("native_profiler");
        $__internal_0488bdeb98207d0adb4485c86dfe6253e64b4db344a0b572e5707d3fcd44350f->enter($__internal_0488bdeb98207d0adb4485c86dfe6253e64b4db344a0b572e5707d3fcd44350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0488bdeb98207d0adb4485c86dfe6253e64b4db344a0b572e5707d3fcd44350f->leave($__internal_0488bdeb98207d0adb4485c86dfe6253e64b4db344a0b572e5707d3fcd44350f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d25f4cda35adf1f22a77f16b703ff73732ec586d5bfb9e2c30d0d855d581f69c = $this->env->getExtension("native_profiler");
        $__internal_d25f4cda35adf1f22a77f16b703ff73732ec586d5bfb9e2c30d0d855d581f69c->enter($__internal_d25f4cda35adf1f22a77f16b703ff73732ec586d5bfb9e2c30d0d855d581f69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d25f4cda35adf1f22a77f16b703ff73732ec586d5bfb9e2c30d0d855d581f69c->leave($__internal_d25f4cda35adf1f22a77f16b703ff73732ec586d5bfb9e2c30d0d855d581f69c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1cee806ebb6e61fa6aa7018ba2c78bbc3cb1056119390a49cb810b3c00c84c2 = $this->env->getExtension("native_profiler");
        $__internal_a1cee806ebb6e61fa6aa7018ba2c78bbc3cb1056119390a49cb810b3c00c84c2->enter($__internal_a1cee806ebb6e61fa6aa7018ba2c78bbc3cb1056119390a49cb810b3c00c84c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1cee806ebb6e61fa6aa7018ba2c78bbc3cb1056119390a49cb810b3c00c84c2->leave($__internal_a1cee806ebb6e61fa6aa7018ba2c78bbc3cb1056119390a49cb810b3c00c84c2_prof);

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
