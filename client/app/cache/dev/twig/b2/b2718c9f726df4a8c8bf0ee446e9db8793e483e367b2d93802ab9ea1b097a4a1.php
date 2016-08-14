<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3072772193e10f2a4cffe6372bbf9e5c868f60b1b96969d9f6849af37d8f10f extends Twig_Template
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
        $__internal_7e1a0e4701ff414cd4a2c9de47b08357198f7634e20a3cd2ed01807ae808b034 = $this->env->getExtension("native_profiler");
        $__internal_7e1a0e4701ff414cd4a2c9de47b08357198f7634e20a3cd2ed01807ae808b034->enter($__internal_7e1a0e4701ff414cd4a2c9de47b08357198f7634e20a3cd2ed01807ae808b034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1a0e4701ff414cd4a2c9de47b08357198f7634e20a3cd2ed01807ae808b034->leave($__internal_7e1a0e4701ff414cd4a2c9de47b08357198f7634e20a3cd2ed01807ae808b034_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91128868058edfaaf3c7d4a15113cf43399799a07079d3e172090588251e9d9e = $this->env->getExtension("native_profiler");
        $__internal_91128868058edfaaf3c7d4a15113cf43399799a07079d3e172090588251e9d9e->enter($__internal_91128868058edfaaf3c7d4a15113cf43399799a07079d3e172090588251e9d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_91128868058edfaaf3c7d4a15113cf43399799a07079d3e172090588251e9d9e->leave($__internal_91128868058edfaaf3c7d4a15113cf43399799a07079d3e172090588251e9d9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0b8487ef0e05339cb5ad8dcf41fc3dff8e4a45f545a3eeec0eacd0f0b639e22 = $this->env->getExtension("native_profiler");
        $__internal_e0b8487ef0e05339cb5ad8dcf41fc3dff8e4a45f545a3eeec0eacd0f0b639e22->enter($__internal_e0b8487ef0e05339cb5ad8dcf41fc3dff8e4a45f545a3eeec0eacd0f0b639e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0b8487ef0e05339cb5ad8dcf41fc3dff8e4a45f545a3eeec0eacd0f0b639e22->leave($__internal_e0b8487ef0e05339cb5ad8dcf41fc3dff8e4a45f545a3eeec0eacd0f0b639e22_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ba202cc952bd132e2ba6de1e91e701d6fea291aded7cae5e4c468e750bdd384 = $this->env->getExtension("native_profiler");
        $__internal_0ba202cc952bd132e2ba6de1e91e701d6fea291aded7cae5e4c468e750bdd384->enter($__internal_0ba202cc952bd132e2ba6de1e91e701d6fea291aded7cae5e4c468e750bdd384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ba202cc952bd132e2ba6de1e91e701d6fea291aded7cae5e4c468e750bdd384->leave($__internal_0ba202cc952bd132e2ba6de1e91e701d6fea291aded7cae5e4c468e750bdd384_prof);

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
