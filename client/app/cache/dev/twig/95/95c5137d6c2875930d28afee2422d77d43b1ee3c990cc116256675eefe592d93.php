<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0922c0f2aa37e6cfa37164d03ce3ebca6ae7665815e909198099c0fe1115b5c0 extends Twig_Template
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
        $__internal_ca64e02d27d56ae78f2af17f460b63ca882bf3e4137871064b1ea7853138d4ef = $this->env->getExtension("native_profiler");
        $__internal_ca64e02d27d56ae78f2af17f460b63ca882bf3e4137871064b1ea7853138d4ef->enter($__internal_ca64e02d27d56ae78f2af17f460b63ca882bf3e4137871064b1ea7853138d4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca64e02d27d56ae78f2af17f460b63ca882bf3e4137871064b1ea7853138d4ef->leave($__internal_ca64e02d27d56ae78f2af17f460b63ca882bf3e4137871064b1ea7853138d4ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_461931abc8bf6c28287567d0865bbc6d6f9b6d060b47f6e7e0e72c5ce0093a24 = $this->env->getExtension("native_profiler");
        $__internal_461931abc8bf6c28287567d0865bbc6d6f9b6d060b47f6e7e0e72c5ce0093a24->enter($__internal_461931abc8bf6c28287567d0865bbc6d6f9b6d060b47f6e7e0e72c5ce0093a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_461931abc8bf6c28287567d0865bbc6d6f9b6d060b47f6e7e0e72c5ce0093a24->leave($__internal_461931abc8bf6c28287567d0865bbc6d6f9b6d060b47f6e7e0e72c5ce0093a24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_483f5d172967ad11d21e716091668af404b1e0845f0259c91144c2209683e706 = $this->env->getExtension("native_profiler");
        $__internal_483f5d172967ad11d21e716091668af404b1e0845f0259c91144c2209683e706->enter($__internal_483f5d172967ad11d21e716091668af404b1e0845f0259c91144c2209683e706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_483f5d172967ad11d21e716091668af404b1e0845f0259c91144c2209683e706->leave($__internal_483f5d172967ad11d21e716091668af404b1e0845f0259c91144c2209683e706_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_670dbe7efb001a0c09d3548b3a8b7066cdcff3e3552cd826d3eca918ab053c16 = $this->env->getExtension("native_profiler");
        $__internal_670dbe7efb001a0c09d3548b3a8b7066cdcff3e3552cd826d3eca918ab053c16->enter($__internal_670dbe7efb001a0c09d3548b3a8b7066cdcff3e3552cd826d3eca918ab053c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_670dbe7efb001a0c09d3548b3a8b7066cdcff3e3552cd826d3eca918ab053c16->leave($__internal_670dbe7efb001a0c09d3548b3a8b7066cdcff3e3552cd826d3eca918ab053c16_prof);

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
