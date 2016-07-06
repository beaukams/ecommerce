<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5ea552943e79562c54f39cab802ea0868300dee6bac5d76013a970ab335a7661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc32230f58e9cbb084ff1780b7540db25803d21bfb894a8110dcee74b8013837 = $this->env->getExtension("native_profiler");
        $__internal_fc32230f58e9cbb084ff1780b7540db25803d21bfb894a8110dcee74b8013837->enter($__internal_fc32230f58e9cbb084ff1780b7540db25803d21bfb894a8110dcee74b8013837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc32230f58e9cbb084ff1780b7540db25803d21bfb894a8110dcee74b8013837->leave($__internal_fc32230f58e9cbb084ff1780b7540db25803d21bfb894a8110dcee74b8013837_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3a645fdeb1f047e4dcdcc2b6441793ce12200c51b920e1af8af4763e2b62069 = $this->env->getExtension("native_profiler");
        $__internal_e3a645fdeb1f047e4dcdcc2b6441793ce12200c51b920e1af8af4763e2b62069->enter($__internal_e3a645fdeb1f047e4dcdcc2b6441793ce12200c51b920e1af8af4763e2b62069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e3a645fdeb1f047e4dcdcc2b6441793ce12200c51b920e1af8af4763e2b62069->leave($__internal_e3a645fdeb1f047e4dcdcc2b6441793ce12200c51b920e1af8af4763e2b62069_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
