<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e3072772193e10f2a4cffe6372bbf9e5c868f60b1b96969d9f6849af37d8f10f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a8fa0d8a8f5f563f74a57728be6ea5b266b2185797c7ff24fce0a50ede1439fc = $this->env->getExtension("native_profiler");
        $__internal_a8fa0d8a8f5f563f74a57728be6ea5b266b2185797c7ff24fce0a50ede1439fc->enter($__internal_a8fa0d8a8f5f563f74a57728be6ea5b266b2185797c7ff24fce0a50ede1439fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fa0d8a8f5f563f74a57728be6ea5b266b2185797c7ff24fce0a50ede1439fc->leave($__internal_a8fa0d8a8f5f563f74a57728be6ea5b266b2185797c7ff24fce0a50ede1439fc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13a163bd12f65070bc2387aff0a24d9e2b9dd0d2a3383bbcb7237116ce4ef6a4 = $this->env->getExtension("native_profiler");
        $__internal_13a163bd12f65070bc2387aff0a24d9e2b9dd0d2a3383bbcb7237116ce4ef6a4->enter($__internal_13a163bd12f65070bc2387aff0a24d9e2b9dd0d2a3383bbcb7237116ce4ef6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13a163bd12f65070bc2387aff0a24d9e2b9dd0d2a3383bbcb7237116ce4ef6a4->leave($__internal_13a163bd12f65070bc2387aff0a24d9e2b9dd0d2a3383bbcb7237116ce4ef6a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe496a3b6c45fe2ce7a77f66a81ede58ce1145c78882dc24dc2d09a7729e1642 = $this->env->getExtension("native_profiler");
        $__internal_fe496a3b6c45fe2ce7a77f66a81ede58ce1145c78882dc24dc2d09a7729e1642->enter($__internal_fe496a3b6c45fe2ce7a77f66a81ede58ce1145c78882dc24dc2d09a7729e1642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe496a3b6c45fe2ce7a77f66a81ede58ce1145c78882dc24dc2d09a7729e1642->leave($__internal_fe496a3b6c45fe2ce7a77f66a81ede58ce1145c78882dc24dc2d09a7729e1642_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90c5a903f5ca3c2135d76f072ba80c1647553f21e2cae6b1a008dfc212f9ae59 = $this->env->getExtension("native_profiler");
        $__internal_90c5a903f5ca3c2135d76f072ba80c1647553f21e2cae6b1a008dfc212f9ae59->enter($__internal_90c5a903f5ca3c2135d76f072ba80c1647553f21e2cae6b1a008dfc212f9ae59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90c5a903f5ca3c2135d76f072ba80c1647553f21e2cae6b1a008dfc212f9ae59->leave($__internal_90c5a903f5ca3c2135d76f072ba80c1647553f21e2cae6b1a008dfc212f9ae59_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
