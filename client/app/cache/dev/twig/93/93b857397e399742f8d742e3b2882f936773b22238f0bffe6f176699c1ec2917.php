<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e333dbfb75e214c4fb400fc6c0ecff82b6af67a56af6af00fb9a32c40ed3919f extends Twig_Template
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
        $__internal_132ed297779d8d92e823125b7f783bf23d90f10a6607e64e7641bd4d94f059d0 = $this->env->getExtension("native_profiler");
        $__internal_132ed297779d8d92e823125b7f783bf23d90f10a6607e64e7641bd4d94f059d0->enter($__internal_132ed297779d8d92e823125b7f783bf23d90f10a6607e64e7641bd4d94f059d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132ed297779d8d92e823125b7f783bf23d90f10a6607e64e7641bd4d94f059d0->leave($__internal_132ed297779d8d92e823125b7f783bf23d90f10a6607e64e7641bd4d94f059d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4273115968f584f6cff37b2ab6f16518eb525414659bd958091fc398baf0879a = $this->env->getExtension("native_profiler");
        $__internal_4273115968f584f6cff37b2ab6f16518eb525414659bd958091fc398baf0879a->enter($__internal_4273115968f584f6cff37b2ab6f16518eb525414659bd958091fc398baf0879a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4273115968f584f6cff37b2ab6f16518eb525414659bd958091fc398baf0879a->leave($__internal_4273115968f584f6cff37b2ab6f16518eb525414659bd958091fc398baf0879a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef43db04e3efee56d444c7671d0f1e3825a1abe838f599103498b29162048b0f = $this->env->getExtension("native_profiler");
        $__internal_ef43db04e3efee56d444c7671d0f1e3825a1abe838f599103498b29162048b0f->enter($__internal_ef43db04e3efee56d444c7671d0f1e3825a1abe838f599103498b29162048b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef43db04e3efee56d444c7671d0f1e3825a1abe838f599103498b29162048b0f->leave($__internal_ef43db04e3efee56d444c7671d0f1e3825a1abe838f599103498b29162048b0f_prof);

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
