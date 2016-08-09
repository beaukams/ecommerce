<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_17f7914e55b7dad652c0288859c0968c2cc5b8fce9fba1aa3dce17e227709e21 extends Twig_Template
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
        $__internal_2a3f354cf54a6f6a63e5a4976ecf7ded7832c2b467601cb26627009f8ca18a67 = $this->env->getExtension("native_profiler");
        $__internal_2a3f354cf54a6f6a63e5a4976ecf7ded7832c2b467601cb26627009f8ca18a67->enter($__internal_2a3f354cf54a6f6a63e5a4976ecf7ded7832c2b467601cb26627009f8ca18a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3f354cf54a6f6a63e5a4976ecf7ded7832c2b467601cb26627009f8ca18a67->leave($__internal_2a3f354cf54a6f6a63e5a4976ecf7ded7832c2b467601cb26627009f8ca18a67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43f145c0c00eb79a8dee992a9a690358a5050bb68bb6807a10bd3203b26933c0 = $this->env->getExtension("native_profiler");
        $__internal_43f145c0c00eb79a8dee992a9a690358a5050bb68bb6807a10bd3203b26933c0->enter($__internal_43f145c0c00eb79a8dee992a9a690358a5050bb68bb6807a10bd3203b26933c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_43f145c0c00eb79a8dee992a9a690358a5050bb68bb6807a10bd3203b26933c0->leave($__internal_43f145c0c00eb79a8dee992a9a690358a5050bb68bb6807a10bd3203b26933c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d521542e11085554031896c40a0c73a3dc3fff1075d3f5425580799cc0f92235 = $this->env->getExtension("native_profiler");
        $__internal_d521542e11085554031896c40a0c73a3dc3fff1075d3f5425580799cc0f92235->enter($__internal_d521542e11085554031896c40a0c73a3dc3fff1075d3f5425580799cc0f92235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d521542e11085554031896c40a0c73a3dc3fff1075d3f5425580799cc0f92235->leave($__internal_d521542e11085554031896c40a0c73a3dc3fff1075d3f5425580799cc0f92235_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d2822ff008bdfb159835093b01b0c4835242ea0a0a45925cad96ca18a7b92df = $this->env->getExtension("native_profiler");
        $__internal_7d2822ff008bdfb159835093b01b0c4835242ea0a0a45925cad96ca18a7b92df->enter($__internal_7d2822ff008bdfb159835093b01b0c4835242ea0a0a45925cad96ca18a7b92df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d2822ff008bdfb159835093b01b0c4835242ea0a0a45925cad96ca18a7b92df->leave($__internal_7d2822ff008bdfb159835093b01b0c4835242ea0a0a45925cad96ca18a7b92df_prof);

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
