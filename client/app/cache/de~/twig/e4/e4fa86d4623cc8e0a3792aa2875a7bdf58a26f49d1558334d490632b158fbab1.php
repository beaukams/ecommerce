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
        $__internal_6164cfb232992f180b7259b9263238905e6bd2545841bbde879ebc7fb04b40c3 = $this->env->getExtension("native_profiler");
        $__internal_6164cfb232992f180b7259b9263238905e6bd2545841bbde879ebc7fb04b40c3->enter($__internal_6164cfb232992f180b7259b9263238905e6bd2545841bbde879ebc7fb04b40c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6164cfb232992f180b7259b9263238905e6bd2545841bbde879ebc7fb04b40c3->leave($__internal_6164cfb232992f180b7259b9263238905e6bd2545841bbde879ebc7fb04b40c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6cd6955a160c10469df0e8f15f55b182d25d8df50bce5851d23bfd631f041ca = $this->env->getExtension("native_profiler");
        $__internal_c6cd6955a160c10469df0e8f15f55b182d25d8df50bce5851d23bfd631f041ca->enter($__internal_c6cd6955a160c10469df0e8f15f55b182d25d8df50bce5851d23bfd631f041ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c6cd6955a160c10469df0e8f15f55b182d25d8df50bce5851d23bfd631f041ca->leave($__internal_c6cd6955a160c10469df0e8f15f55b182d25d8df50bce5851d23bfd631f041ca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fc44fecaeff8e17e494227ef76249327f31f26e78d8725b1b14473372540a0f = $this->env->getExtension("native_profiler");
        $__internal_3fc44fecaeff8e17e494227ef76249327f31f26e78d8725b1b14473372540a0f->enter($__internal_3fc44fecaeff8e17e494227ef76249327f31f26e78d8725b1b14473372540a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3fc44fecaeff8e17e494227ef76249327f31f26e78d8725b1b14473372540a0f->leave($__internal_3fc44fecaeff8e17e494227ef76249327f31f26e78d8725b1b14473372540a0f_prof);

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
