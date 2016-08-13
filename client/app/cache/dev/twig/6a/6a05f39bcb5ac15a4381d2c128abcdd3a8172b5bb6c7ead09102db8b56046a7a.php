<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d669faca7fb954d53bf6a51bc9cfe65c8e6ad6bca55cf50c0758f3258408a67 extends Twig_Template
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
        $__internal_ee07cae5d6a05fe2d12ea3f3f95f0d095c0d7e5143d85495704113a287540d10 = $this->env->getExtension("native_profiler");
        $__internal_ee07cae5d6a05fe2d12ea3f3f95f0d095c0d7e5143d85495704113a287540d10->enter($__internal_ee07cae5d6a05fe2d12ea3f3f95f0d095c0d7e5143d85495704113a287540d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee07cae5d6a05fe2d12ea3f3f95f0d095c0d7e5143d85495704113a287540d10->leave($__internal_ee07cae5d6a05fe2d12ea3f3f95f0d095c0d7e5143d85495704113a287540d10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19f1ab9abf54f1cd3be024b71839f37094dfe6c88913c90bb69078525edf1b4d = $this->env->getExtension("native_profiler");
        $__internal_19f1ab9abf54f1cd3be024b71839f37094dfe6c88913c90bb69078525edf1b4d->enter($__internal_19f1ab9abf54f1cd3be024b71839f37094dfe6c88913c90bb69078525edf1b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19f1ab9abf54f1cd3be024b71839f37094dfe6c88913c90bb69078525edf1b4d->leave($__internal_19f1ab9abf54f1cd3be024b71839f37094dfe6c88913c90bb69078525edf1b4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e7b0f4ec39b95b461133e0ef192b01b6cd6ab62095cb2dca3742731e3cee810 = $this->env->getExtension("native_profiler");
        $__internal_4e7b0f4ec39b95b461133e0ef192b01b6cd6ab62095cb2dca3742731e3cee810->enter($__internal_4e7b0f4ec39b95b461133e0ef192b01b6cd6ab62095cb2dca3742731e3cee810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e7b0f4ec39b95b461133e0ef192b01b6cd6ab62095cb2dca3742731e3cee810->leave($__internal_4e7b0f4ec39b95b461133e0ef192b01b6cd6ab62095cb2dca3742731e3cee810_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b245f0b2618c814552545d31e476935c5754311b43a1541721b4bd7f3135b7d = $this->env->getExtension("native_profiler");
        $__internal_6b245f0b2618c814552545d31e476935c5754311b43a1541721b4bd7f3135b7d->enter($__internal_6b245f0b2618c814552545d31e476935c5754311b43a1541721b4bd7f3135b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b245f0b2618c814552545d31e476935c5754311b43a1541721b4bd7f3135b7d->leave($__internal_6b245f0b2618c814552545d31e476935c5754311b43a1541721b4bd7f3135b7d_prof);

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
