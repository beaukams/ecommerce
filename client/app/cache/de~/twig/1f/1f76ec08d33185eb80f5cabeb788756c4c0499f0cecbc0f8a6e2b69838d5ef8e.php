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
        $__internal_2a9ffed073078426d8c02a4da243fa32bb612cbd9ab41dadb11d5986e94f3d33 = $this->env->getExtension("native_profiler");
        $__internal_2a9ffed073078426d8c02a4da243fa32bb612cbd9ab41dadb11d5986e94f3d33->enter($__internal_2a9ffed073078426d8c02a4da243fa32bb612cbd9ab41dadb11d5986e94f3d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9ffed073078426d8c02a4da243fa32bb612cbd9ab41dadb11d5986e94f3d33->leave($__internal_2a9ffed073078426d8c02a4da243fa32bb612cbd9ab41dadb11d5986e94f3d33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1114a049020889a8347debeec4e113e771e7d340281c1dc0039c727fd73a287 = $this->env->getExtension("native_profiler");
        $__internal_b1114a049020889a8347debeec4e113e771e7d340281c1dc0039c727fd73a287->enter($__internal_b1114a049020889a8347debeec4e113e771e7d340281c1dc0039c727fd73a287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b1114a049020889a8347debeec4e113e771e7d340281c1dc0039c727fd73a287->leave($__internal_b1114a049020889a8347debeec4e113e771e7d340281c1dc0039c727fd73a287_prof);

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
