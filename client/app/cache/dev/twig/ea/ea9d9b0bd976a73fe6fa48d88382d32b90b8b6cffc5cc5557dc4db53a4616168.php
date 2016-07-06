<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1dab108c5dd6726251f1a432723a59b558173d4c70200a331bf1eedeaa6774c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2cadbb28dc3549c06daddc23690c2440fd9c7ec5b8e04f4eb31c5e366fbd19c2 = $this->env->getExtension("native_profiler");
        $__internal_2cadbb28dc3549c06daddc23690c2440fd9c7ec5b8e04f4eb31c5e366fbd19c2->enter($__internal_2cadbb28dc3549c06daddc23690c2440fd9c7ec5b8e04f4eb31c5e366fbd19c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cadbb28dc3549c06daddc23690c2440fd9c7ec5b8e04f4eb31c5e366fbd19c2->leave($__internal_2cadbb28dc3549c06daddc23690c2440fd9c7ec5b8e04f4eb31c5e366fbd19c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb5e67cd3bc28424fdf6f431699221c0fc713b017b3f66f3acbd647aef39647d = $this->env->getExtension("native_profiler");
        $__internal_bb5e67cd3bc28424fdf6f431699221c0fc713b017b3f66f3acbd647aef39647d->enter($__internal_bb5e67cd3bc28424fdf6f431699221c0fc713b017b3f66f3acbd647aef39647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bb5e67cd3bc28424fdf6f431699221c0fc713b017b3f66f3acbd647aef39647d->leave($__internal_bb5e67cd3bc28424fdf6f431699221c0fc713b017b3f66f3acbd647aef39647d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
