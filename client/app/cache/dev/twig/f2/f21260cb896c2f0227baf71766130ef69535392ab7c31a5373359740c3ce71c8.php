<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d45515094fd26b321771deecdc29fa9d16d2803a6c70a74715fd1b722518383b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6ba9391df63670e56ed4084fee19fe0c8cf23fa84437760dfc203728431fbcad = $this->env->getExtension("native_profiler");
        $__internal_6ba9391df63670e56ed4084fee19fe0c8cf23fa84437760dfc203728431fbcad->enter($__internal_6ba9391df63670e56ed4084fee19fe0c8cf23fa84437760dfc203728431fbcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ba9391df63670e56ed4084fee19fe0c8cf23fa84437760dfc203728431fbcad->leave($__internal_6ba9391df63670e56ed4084fee19fe0c8cf23fa84437760dfc203728431fbcad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15e6079a943edbb65659d83db2e680f328671463559b09fded1aa025d74c4fcf = $this->env->getExtension("native_profiler");
        $__internal_15e6079a943edbb65659d83db2e680f328671463559b09fded1aa025d74c4fcf->enter($__internal_15e6079a943edbb65659d83db2e680f328671463559b09fded1aa025d74c4fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_15e6079a943edbb65659d83db2e680f328671463559b09fded1aa025d74c4fcf->leave($__internal_15e6079a943edbb65659d83db2e680f328671463559b09fded1aa025d74c4fcf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
