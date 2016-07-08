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
        $__internal_abfb15c0c071ce2c8ca8e4f437901e953297bc5efd2c5e584a34f8f9109b6dc0 = $this->env->getExtension("native_profiler");
        $__internal_abfb15c0c071ce2c8ca8e4f437901e953297bc5efd2c5e584a34f8f9109b6dc0->enter($__internal_abfb15c0c071ce2c8ca8e4f437901e953297bc5efd2c5e584a34f8f9109b6dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abfb15c0c071ce2c8ca8e4f437901e953297bc5efd2c5e584a34f8f9109b6dc0->leave($__internal_abfb15c0c071ce2c8ca8e4f437901e953297bc5efd2c5e584a34f8f9109b6dc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aeddd66fb0493460bf5a47d373eedcfb020ae6b9762c9b9d3e8b930fb40b88c0 = $this->env->getExtension("native_profiler");
        $__internal_aeddd66fb0493460bf5a47d373eedcfb020ae6b9762c9b9d3e8b930fb40b88c0->enter($__internal_aeddd66fb0493460bf5a47d373eedcfb020ae6b9762c9b9d3e8b930fb40b88c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aeddd66fb0493460bf5a47d373eedcfb020ae6b9762c9b9d3e8b930fb40b88c0->leave($__internal_aeddd66fb0493460bf5a47d373eedcfb020ae6b9762c9b9d3e8b930fb40b88c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f9eb6fb7e996640696e14ae4b13be29fa4ba8a4c35df87fb70a4e15f2a75245 = $this->env->getExtension("native_profiler");
        $__internal_0f9eb6fb7e996640696e14ae4b13be29fa4ba8a4c35df87fb70a4e15f2a75245->enter($__internal_0f9eb6fb7e996640696e14ae4b13be29fa4ba8a4c35df87fb70a4e15f2a75245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f9eb6fb7e996640696e14ae4b13be29fa4ba8a4c35df87fb70a4e15f2a75245->leave($__internal_0f9eb6fb7e996640696e14ae4b13be29fa4ba8a4c35df87fb70a4e15f2a75245_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25887b23a40100f93876b4b18c269ba12f533f45428f059b7c61730825891c95 = $this->env->getExtension("native_profiler");
        $__internal_25887b23a40100f93876b4b18c269ba12f533f45428f059b7c61730825891c95->enter($__internal_25887b23a40100f93876b4b18c269ba12f533f45428f059b7c61730825891c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_25887b23a40100f93876b4b18c269ba12f533f45428f059b7c61730825891c95->leave($__internal_25887b23a40100f93876b4b18c269ba12f533f45428f059b7c61730825891c95_prof);

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
