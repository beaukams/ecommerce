<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ce5561d5f0e840ed51b657d5326fce535ef34d89d7fece8db4bd085ecf97d37d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6c02cab22581f5164af85ff001dd7297591afdea261befbb408522275e05ca78 = $this->env->getExtension("native_profiler");
        $__internal_6c02cab22581f5164af85ff001dd7297591afdea261befbb408522275e05ca78->enter($__internal_6c02cab22581f5164af85ff001dd7297591afdea261befbb408522275e05ca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c02cab22581f5164af85ff001dd7297591afdea261befbb408522275e05ca78->leave($__internal_6c02cab22581f5164af85ff001dd7297591afdea261befbb408522275e05ca78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c909fe1cb2520b04bb0dd6e13c91f7a3a983ec340b509bfb149a64b024b71134 = $this->env->getExtension("native_profiler");
        $__internal_c909fe1cb2520b04bb0dd6e13c91f7a3a983ec340b509bfb149a64b024b71134->enter($__internal_c909fe1cb2520b04bb0dd6e13c91f7a3a983ec340b509bfb149a64b024b71134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c909fe1cb2520b04bb0dd6e13c91f7a3a983ec340b509bfb149a64b024b71134->leave($__internal_c909fe1cb2520b04bb0dd6e13c91f7a3a983ec340b509bfb149a64b024b71134_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
