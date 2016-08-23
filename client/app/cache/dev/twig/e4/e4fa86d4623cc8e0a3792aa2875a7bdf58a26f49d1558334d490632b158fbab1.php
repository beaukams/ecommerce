<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d5fbc24fb7594214e3d66e8d2b86d1b66b47ec51701ead879e1b33f26142f82c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9a40ccbc6c16453ba7b4e416aeef361a4137f94ba145db31c085adbf928d6fe6 = $this->env->getExtension("native_profiler");
        $__internal_9a40ccbc6c16453ba7b4e416aeef361a4137f94ba145db31c085adbf928d6fe6->enter($__internal_9a40ccbc6c16453ba7b4e416aeef361a4137f94ba145db31c085adbf928d6fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a40ccbc6c16453ba7b4e416aeef361a4137f94ba145db31c085adbf928d6fe6->leave($__internal_9a40ccbc6c16453ba7b4e416aeef361a4137f94ba145db31c085adbf928d6fe6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab377f57265d1904d13bb4fecee63e0f0ea53dc81b7d6300bd7d534148717fd0 = $this->env->getExtension("native_profiler");
        $__internal_ab377f57265d1904d13bb4fecee63e0f0ea53dc81b7d6300bd7d534148717fd0->enter($__internal_ab377f57265d1904d13bb4fecee63e0f0ea53dc81b7d6300bd7d534148717fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab377f57265d1904d13bb4fecee63e0f0ea53dc81b7d6300bd7d534148717fd0->leave($__internal_ab377f57265d1904d13bb4fecee63e0f0ea53dc81b7d6300bd7d534148717fd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fff4d89a0b3035cdec3b540ad85648486c22bfdaecfac5be7fd3aa13c4416675 = $this->env->getExtension("native_profiler");
        $__internal_fff4d89a0b3035cdec3b540ad85648486c22bfdaecfac5be7fd3aa13c4416675->enter($__internal_fff4d89a0b3035cdec3b540ad85648486c22bfdaecfac5be7fd3aa13c4416675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fff4d89a0b3035cdec3b540ad85648486c22bfdaecfac5be7fd3aa13c4416675->leave($__internal_fff4d89a0b3035cdec3b540ad85648486c22bfdaecfac5be7fd3aa13c4416675_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
