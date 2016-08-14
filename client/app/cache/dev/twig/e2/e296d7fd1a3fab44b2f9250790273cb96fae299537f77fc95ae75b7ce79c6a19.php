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
        $__internal_d9fa9d44edb5fbc3238bc1a35d133cf625bc61b19a0b2c5e330b30c9742ec28c = $this->env->getExtension("native_profiler");
        $__internal_d9fa9d44edb5fbc3238bc1a35d133cf625bc61b19a0b2c5e330b30c9742ec28c->enter($__internal_d9fa9d44edb5fbc3238bc1a35d133cf625bc61b19a0b2c5e330b30c9742ec28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9fa9d44edb5fbc3238bc1a35d133cf625bc61b19a0b2c5e330b30c9742ec28c->leave($__internal_d9fa9d44edb5fbc3238bc1a35d133cf625bc61b19a0b2c5e330b30c9742ec28c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d7eee712990d6e90fe6615a7fe5097473079092d1c81de9e4ce319fd6ad068c = $this->env->getExtension("native_profiler");
        $__internal_4d7eee712990d6e90fe6615a7fe5097473079092d1c81de9e4ce319fd6ad068c->enter($__internal_4d7eee712990d6e90fe6615a7fe5097473079092d1c81de9e4ce319fd6ad068c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4d7eee712990d6e90fe6615a7fe5097473079092d1c81de9e4ce319fd6ad068c->leave($__internal_4d7eee712990d6e90fe6615a7fe5097473079092d1c81de9e4ce319fd6ad068c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3833ca995d765db47eabde99b5d0d601bb7027166ec7effb44fe8dda81352f6c = $this->env->getExtension("native_profiler");
        $__internal_3833ca995d765db47eabde99b5d0d601bb7027166ec7effb44fe8dda81352f6c->enter($__internal_3833ca995d765db47eabde99b5d0d601bb7027166ec7effb44fe8dda81352f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3833ca995d765db47eabde99b5d0d601bb7027166ec7effb44fe8dda81352f6c->leave($__internal_3833ca995d765db47eabde99b5d0d601bb7027166ec7effb44fe8dda81352f6c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0c19e9cc96402418d2d42924276e08e14f8b9a76c709e475cc4850d1eec37b4 = $this->env->getExtension("native_profiler");
        $__internal_f0c19e9cc96402418d2d42924276e08e14f8b9a76c709e475cc4850d1eec37b4->enter($__internal_f0c19e9cc96402418d2d42924276e08e14f8b9a76c709e475cc4850d1eec37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f0c19e9cc96402418d2d42924276e08e14f8b9a76c709e475cc4850d1eec37b4->leave($__internal_f0c19e9cc96402418d2d42924276e08e14f8b9a76c709e475cc4850d1eec37b4_prof);

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
