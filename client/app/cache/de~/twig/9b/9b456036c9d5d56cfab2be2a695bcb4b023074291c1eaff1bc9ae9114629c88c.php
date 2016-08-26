<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7d62518fb10b4993dc808d3ef0309f4259e1a6cced7a70efe34f68af096b43dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_f18a7a9c99fa4d6066fce3da788cdba5742be7640cc97ffc3c9bd489fdf3cebd = $this->env->getExtension("native_profiler");
        $__internal_f18a7a9c99fa4d6066fce3da788cdba5742be7640cc97ffc3c9bd489fdf3cebd->enter($__internal_f18a7a9c99fa4d6066fce3da788cdba5742be7640cc97ffc3c9bd489fdf3cebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f18a7a9c99fa4d6066fce3da788cdba5742be7640cc97ffc3c9bd489fdf3cebd->leave($__internal_f18a7a9c99fa4d6066fce3da788cdba5742be7640cc97ffc3c9bd489fdf3cebd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd0da9fa706c19b574bf08aa1480c3e52a668ac0a9140f1e851e322b9a2d66d6 = $this->env->getExtension("native_profiler");
        $__internal_fd0da9fa706c19b574bf08aa1480c3e52a668ac0a9140f1e851e322b9a2d66d6->enter($__internal_fd0da9fa706c19b574bf08aa1480c3e52a668ac0a9140f1e851e322b9a2d66d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fd0da9fa706c19b574bf08aa1480c3e52a668ac0a9140f1e851e322b9a2d66d6->leave($__internal_fd0da9fa706c19b574bf08aa1480c3e52a668ac0a9140f1e851e322b9a2d66d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
