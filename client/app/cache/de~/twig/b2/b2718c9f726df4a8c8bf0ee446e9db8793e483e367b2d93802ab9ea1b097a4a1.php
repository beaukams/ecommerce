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
        $__internal_2c9614d2ff1321d5ca40d2716d8beddab133c192122a5b76116d2984235f7c19 = $this->env->getExtension("native_profiler");
        $__internal_2c9614d2ff1321d5ca40d2716d8beddab133c192122a5b76116d2984235f7c19->enter($__internal_2c9614d2ff1321d5ca40d2716d8beddab133c192122a5b76116d2984235f7c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9614d2ff1321d5ca40d2716d8beddab133c192122a5b76116d2984235f7c19->leave($__internal_2c9614d2ff1321d5ca40d2716d8beddab133c192122a5b76116d2984235f7c19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad796d132e2c3490fa9286c485bdcb45a6ca67336f9d10efcccb4346d3350027 = $this->env->getExtension("native_profiler");
        $__internal_ad796d132e2c3490fa9286c485bdcb45a6ca67336f9d10efcccb4346d3350027->enter($__internal_ad796d132e2c3490fa9286c485bdcb45a6ca67336f9d10efcccb4346d3350027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad796d132e2c3490fa9286c485bdcb45a6ca67336f9d10efcccb4346d3350027->leave($__internal_ad796d132e2c3490fa9286c485bdcb45a6ca67336f9d10efcccb4346d3350027_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e128f4a3b29da0a1795615191a5e96e4cf5fa8ad7f4536ce999df038a03b81b = $this->env->getExtension("native_profiler");
        $__internal_3e128f4a3b29da0a1795615191a5e96e4cf5fa8ad7f4536ce999df038a03b81b->enter($__internal_3e128f4a3b29da0a1795615191a5e96e4cf5fa8ad7f4536ce999df038a03b81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e128f4a3b29da0a1795615191a5e96e4cf5fa8ad7f4536ce999df038a03b81b->leave($__internal_3e128f4a3b29da0a1795615191a5e96e4cf5fa8ad7f4536ce999df038a03b81b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ac59a48345e3c788d34c35e50c3afdac60349ceb171fd7c10084b7032d49481 = $this->env->getExtension("native_profiler");
        $__internal_3ac59a48345e3c788d34c35e50c3afdac60349ceb171fd7c10084b7032d49481->enter($__internal_3ac59a48345e3c788d34c35e50c3afdac60349ceb171fd7c10084b7032d49481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ac59a48345e3c788d34c35e50c3afdac60349ceb171fd7c10084b7032d49481->leave($__internal_3ac59a48345e3c788d34c35e50c3afdac60349ceb171fd7c10084b7032d49481_prof);

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
