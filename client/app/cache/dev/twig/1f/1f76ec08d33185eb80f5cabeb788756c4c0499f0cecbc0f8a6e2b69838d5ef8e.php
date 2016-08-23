<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c1c905686d9ca37085973422867e79b805a2fafd100aeefc8935f4fcb4b80ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_41ab67e90b7b9acd5cdfc0ec2087fff3ca08cad7e370616be78fff59352f5701 = $this->env->getExtension("native_profiler");
        $__internal_41ab67e90b7b9acd5cdfc0ec2087fff3ca08cad7e370616be78fff59352f5701->enter($__internal_41ab67e90b7b9acd5cdfc0ec2087fff3ca08cad7e370616be78fff59352f5701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ab67e90b7b9acd5cdfc0ec2087fff3ca08cad7e370616be78fff59352f5701->leave($__internal_41ab67e90b7b9acd5cdfc0ec2087fff3ca08cad7e370616be78fff59352f5701_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ee172d4a8ffe0c299c6da2faa88e94b39d6f9643b3b993fe4d9d2eec2f77426 = $this->env->getExtension("native_profiler");
        $__internal_9ee172d4a8ffe0c299c6da2faa88e94b39d6f9643b3b993fe4d9d2eec2f77426->enter($__internal_9ee172d4a8ffe0c299c6da2faa88e94b39d6f9643b3b993fe4d9d2eec2f77426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_9ee172d4a8ffe0c299c6da2faa88e94b39d6f9643b3b993fe4d9d2eec2f77426->leave($__internal_9ee172d4a8ffe0c299c6da2faa88e94b39d6f9643b3b993fe4d9d2eec2f77426_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
