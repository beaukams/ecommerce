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
        $__internal_f94d6abc505b6cfb8e6a99126c9eb4dce607962c38e09bad181d21dcd9106795 = $this->env->getExtension("native_profiler");
        $__internal_f94d6abc505b6cfb8e6a99126c9eb4dce607962c38e09bad181d21dcd9106795->enter($__internal_f94d6abc505b6cfb8e6a99126c9eb4dce607962c38e09bad181d21dcd9106795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f94d6abc505b6cfb8e6a99126c9eb4dce607962c38e09bad181d21dcd9106795->leave($__internal_f94d6abc505b6cfb8e6a99126c9eb4dce607962c38e09bad181d21dcd9106795_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f76fbe786cce0523e5f13236fb61ba457d63fbf646819375c38b0b569412f6f9 = $this->env->getExtension("native_profiler");
        $__internal_f76fbe786cce0523e5f13236fb61ba457d63fbf646819375c38b0b569412f6f9->enter($__internal_f76fbe786cce0523e5f13236fb61ba457d63fbf646819375c38b0b569412f6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f76fbe786cce0523e5f13236fb61ba457d63fbf646819375c38b0b569412f6f9->leave($__internal_f76fbe786cce0523e5f13236fb61ba457d63fbf646819375c38b0b569412f6f9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f3f992fb2593671c115a758b10f27efaeb98cbb35ea55bec560014d43d9c648 = $this->env->getExtension("native_profiler");
        $__internal_2f3f992fb2593671c115a758b10f27efaeb98cbb35ea55bec560014d43d9c648->enter($__internal_2f3f992fb2593671c115a758b10f27efaeb98cbb35ea55bec560014d43d9c648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f3f992fb2593671c115a758b10f27efaeb98cbb35ea55bec560014d43d9c648->leave($__internal_2f3f992fb2593671c115a758b10f27efaeb98cbb35ea55bec560014d43d9c648_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_577ab4e11ee68c7284b30ad5b1a6bba0ffd3d542bc5e8e013f59b4dc0c27e61d = $this->env->getExtension("native_profiler");
        $__internal_577ab4e11ee68c7284b30ad5b1a6bba0ffd3d542bc5e8e013f59b4dc0c27e61d->enter($__internal_577ab4e11ee68c7284b30ad5b1a6bba0ffd3d542bc5e8e013f59b4dc0c27e61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_577ab4e11ee68c7284b30ad5b1a6bba0ffd3d542bc5e8e013f59b4dc0c27e61d->leave($__internal_577ab4e11ee68c7284b30ad5b1a6bba0ffd3d542bc5e8e013f59b4dc0c27e61d_prof);

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
