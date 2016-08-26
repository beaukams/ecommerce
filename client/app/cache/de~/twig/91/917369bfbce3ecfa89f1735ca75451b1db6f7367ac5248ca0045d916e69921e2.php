<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_eaf2dd3aefe1f6ccdbb4e8b42a45e271418e1e9880b1e52437845de2ccdc5538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d44c15a63a0373ed2279e7344bee4e059747c3ac0441736dafeca82aa6ad5376 = $this->env->getExtension("native_profiler");
        $__internal_d44c15a63a0373ed2279e7344bee4e059747c3ac0441736dafeca82aa6ad5376->enter($__internal_d44c15a63a0373ed2279e7344bee4e059747c3ac0441736dafeca82aa6ad5376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d44c15a63a0373ed2279e7344bee4e059747c3ac0441736dafeca82aa6ad5376->leave($__internal_d44c15a63a0373ed2279e7344bee4e059747c3ac0441736dafeca82aa6ad5376_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3837544e3b129231e087edec32a29df961b75e5de9b00a5ac0fdf5e790c2703 = $this->env->getExtension("native_profiler");
        $__internal_e3837544e3b129231e087edec32a29df961b75e5de9b00a5ac0fdf5e790c2703->enter($__internal_e3837544e3b129231e087edec32a29df961b75e5de9b00a5ac0fdf5e790c2703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e3837544e3b129231e087edec32a29df961b75e5de9b00a5ac0fdf5e790c2703->leave($__internal_e3837544e3b129231e087edec32a29df961b75e5de9b00a5ac0fdf5e790c2703_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
