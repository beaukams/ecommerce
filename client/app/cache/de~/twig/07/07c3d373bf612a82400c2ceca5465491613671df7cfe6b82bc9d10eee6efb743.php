<?php

/* ::casa.html.twig */
class __TwigTemplate_ee97df4b2b651925e6b80c446d66c041514692133467d6dc9086244173d44c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::casa.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'barre_menu' => array($this, 'block_barre_menu'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5235e148c2ec9b99e511250c8ee5c2b2be61a2dcd568b1f877fed11f2ae1fac8 = $this->env->getExtension("native_profiler");
        $__internal_5235e148c2ec9b99e511250c8ee5c2b2be61a2dcd568b1f877fed11f2ae1fac8->enter($__internal_5235e148c2ec9b99e511250c8ee5c2b2be61a2dcd568b1f877fed11f2ae1fac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::casa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5235e148c2ec9b99e511250c8ee5c2b2be61a2dcd568b1f877fed11f2ae1fac8->leave($__internal_5235e148c2ec9b99e511250c8ee5c2b2be61a2dcd568b1f877fed11f2ae1fac8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e264a8202f61bb3e64e6f26ba96749fd9c420cec8eb306e1163ea18bff606eeb = $this->env->getExtension("native_profiler");
        $__internal_e264a8202f61bb3e64e6f26ba96749fd9c420cec8eb306e1163ea18bff606eeb->enter($__internal_e264a8202f61bb3e64e6f26ba96749fd9c420cec8eb306e1163ea18bff606eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Casamance";
        
        $__internal_e264a8202f61bb3e64e6f26ba96749fd9c420cec8eb306e1163ea18bff606eeb->leave($__internal_e264a8202f61bb3e64e6f26ba96749fd9c420cec8eb306e1163ea18bff606eeb_prof);

    }

    // line 4
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_1e84f0470de21ff3308f8694b160b61e4f00eb32fca1dc7a7ea0a0173f0cb42e = $this->env->getExtension("native_profiler");
        $__internal_1e84f0470de21ff3308f8694b160b61e4f00eb32fca1dc7a7ea0a0173f0cb42e->enter($__internal_1e84f0470de21ff3308f8694b160b61e4f00eb32fca1dc7a7ea0a0173f0cb42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_1e84f0470de21ff3308f8694b160b61e4f00eb32fca1dc7a7ea0a0173f0cb42e->leave($__internal_1e84f0470de21ff3308f8694b160b61e4f00eb32fca1dc7a7ea0a0173f0cb42e_prof);

    }

    // line 7
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_6086c80ae597857592fe55f67e6d708061b199506f5cbe287f86e85cbde1dbc6 = $this->env->getExtension("native_profiler");
        $__internal_6086c80ae597857592fe55f67e6d708061b199506f5cbe287f86e85cbde1dbc6->enter($__internal_6086c80ae597857592fe55f67e6d708061b199506f5cbe287f86e85cbde1dbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 8
        echo "\tllk
";
        
        $__internal_6086c80ae597857592fe55f67e6d708061b199506f5cbe287f86e85cbde1dbc6->leave($__internal_6086c80ae597857592fe55f67e6d708061b199506f5cbe287f86e85cbde1dbc6_prof);

    }

    // line 11
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_862f24622730f399f652dfd09125103014a92c0c52dde8d140e9ab369e94f019 = $this->env->getExtension("native_profiler");
        $__internal_862f24622730f399f652dfd09125103014a92c0c52dde8d140e9ab369e94f019->enter($__internal_862f24622730f399f652dfd09125103014a92c0c52dde8d140e9ab369e94f019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 12
        echo "\tlkk
";
        
        $__internal_862f24622730f399f652dfd09125103014a92c0c52dde8d140e9ab369e94f019->leave($__internal_862f24622730f399f652dfd09125103014a92c0c52dde8d140e9ab369e94f019_prof);

    }

    public function getTemplateName()
    {
        return "::casa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  74 => 11,  66 => 8,  60 => 7,  49 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}La Casamance{% endblock %}*/
/* */
/* {% block barre_menu %}*/
/* {% endblock %}*/
/* */
/* {% block menu_nav %}*/
/* 	llk*/
/* {% endblock %}*/
/* */
/* {% block body_content %}*/
/* 	lkk*/
/* {% endblock %}*/
