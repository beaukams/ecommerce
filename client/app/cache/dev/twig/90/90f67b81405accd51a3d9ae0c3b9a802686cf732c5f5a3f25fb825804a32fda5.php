<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2b937b784d7e13b769e8e2cd37186a81a30ce525e4677d017289c972fb071adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b82f6cbd1e02fdf7d3d7c75de964ff37be9983da8abd83dff9edd2fcb1b979ec = $this->env->getExtension("native_profiler");
        $__internal_b82f6cbd1e02fdf7d3d7c75de964ff37be9983da8abd83dff9edd2fcb1b979ec->enter($__internal_b82f6cbd1e02fdf7d3d7c75de964ff37be9983da8abd83dff9edd2fcb1b979ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82f6cbd1e02fdf7d3d7c75de964ff37be9983da8abd83dff9edd2fcb1b979ec->leave($__internal_b82f6cbd1e02fdf7d3d7c75de964ff37be9983da8abd83dff9edd2fcb1b979ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_410ad6aa9afb8426b7b23028a4d65a23959d27a76c103c16ad6bcc2a1cae1255 = $this->env->getExtension("native_profiler");
        $__internal_410ad6aa9afb8426b7b23028a4d65a23959d27a76c103c16ad6bcc2a1cae1255->enter($__internal_410ad6aa9afb8426b7b23028a4d65a23959d27a76c103c16ad6bcc2a1cae1255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_410ad6aa9afb8426b7b23028a4d65a23959d27a76c103c16ad6bcc2a1cae1255->leave($__internal_410ad6aa9afb8426b7b23028a4d65a23959d27a76c103c16ad6bcc2a1cae1255_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
