<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_df02e975f97818db738780f54581404b13a0aab0a4ad5d06f18a6db5a71b742b extends Twig_Template
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
        $__internal_ae24dc13d4048fe62af226acbcf18e1095054cc46b1f0294a02ca3ca2f495337 = $this->env->getExtension("native_profiler");
        $__internal_ae24dc13d4048fe62af226acbcf18e1095054cc46b1f0294a02ca3ca2f495337->enter($__internal_ae24dc13d4048fe62af226acbcf18e1095054cc46b1f0294a02ca3ca2f495337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae24dc13d4048fe62af226acbcf18e1095054cc46b1f0294a02ca3ca2f495337->leave($__internal_ae24dc13d4048fe62af226acbcf18e1095054cc46b1f0294a02ca3ca2f495337_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e68d695db96baef257cf2645bbd81ff13aac752f22d5b7ef32acc76dc4acf0bf = $this->env->getExtension("native_profiler");
        $__internal_e68d695db96baef257cf2645bbd81ff13aac752f22d5b7ef32acc76dc4acf0bf->enter($__internal_e68d695db96baef257cf2645bbd81ff13aac752f22d5b7ef32acc76dc4acf0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e68d695db96baef257cf2645bbd81ff13aac752f22d5b7ef32acc76dc4acf0bf->leave($__internal_e68d695db96baef257cf2645bbd81ff13aac752f22d5b7ef32acc76dc4acf0bf_prof);

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
