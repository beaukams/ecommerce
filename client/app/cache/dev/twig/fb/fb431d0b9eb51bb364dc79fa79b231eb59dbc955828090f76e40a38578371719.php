<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_478e0f9f9f6d72ce602cda82741f2516ebc284769c9dcc5276bc1d5dc0889092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f9a83547807f34b1a9c30c770b2ae878e5855e51486304c479b1daf9c0c78e0 = $this->env->getExtension("native_profiler");
        $__internal_9f9a83547807f34b1a9c30c770b2ae878e5855e51486304c479b1daf9c0c78e0->enter($__internal_9f9a83547807f34b1a9c30c770b2ae878e5855e51486304c479b1daf9c0c78e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9a83547807f34b1a9c30c770b2ae878e5855e51486304c479b1daf9c0c78e0->leave($__internal_9f9a83547807f34b1a9c30c770b2ae878e5855e51486304c479b1daf9c0c78e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cede64c19b6add24e1273625dea27141265d2c60f62d03a6af69dbc6be87161 = $this->env->getExtension("native_profiler");
        $__internal_6cede64c19b6add24e1273625dea27141265d2c60f62d03a6af69dbc6be87161->enter($__internal_6cede64c19b6add24e1273625dea27141265d2c60f62d03a6af69dbc6be87161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6cede64c19b6add24e1273625dea27141265d2c60f62d03a6af69dbc6be87161->leave($__internal_6cede64c19b6add24e1273625dea27141265d2c60f62d03a6af69dbc6be87161_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbc8975e4bb4bdec190e9e8e17c5d208191521cb1b04f85239d9acdd3ca3b982 = $this->env->getExtension("native_profiler");
        $__internal_dbc8975e4bb4bdec190e9e8e17c5d208191521cb1b04f85239d9acdd3ca3b982->enter($__internal_dbc8975e4bb4bdec190e9e8e17c5d208191521cb1b04f85239d9acdd3ca3b982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbc8975e4bb4bdec190e9e8e17c5d208191521cb1b04f85239d9acdd3ca3b982->leave($__internal_dbc8975e4bb4bdec190e9e8e17c5d208191521cb1b04f85239d9acdd3ca3b982_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_deadedaf0cab36818cf4a255d2f0e2dbea34238ff7643d2220d375c475159644 = $this->env->getExtension("native_profiler");
        $__internal_deadedaf0cab36818cf4a255d2f0e2dbea34238ff7643d2220d375c475159644->enter($__internal_deadedaf0cab36818cf4a255d2f0e2dbea34238ff7643d2220d375c475159644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_deadedaf0cab36818cf4a255d2f0e2dbea34238ff7643d2220d375c475159644->leave($__internal_deadedaf0cab36818cf4a255d2f0e2dbea34238ff7643d2220d375c475159644_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
