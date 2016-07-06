<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5a72a5b1ef72d5694ae039081937f82cdab883c5d4aac2cf9192b44718fd36e7 extends Twig_Template
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
        $__internal_4a17b7d63894fd9f532572e3664b455f475f8f992f598520a3eaf0123c6ea7dd = $this->env->getExtension("native_profiler");
        $__internal_4a17b7d63894fd9f532572e3664b455f475f8f992f598520a3eaf0123c6ea7dd->enter($__internal_4a17b7d63894fd9f532572e3664b455f475f8f992f598520a3eaf0123c6ea7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a17b7d63894fd9f532572e3664b455f475f8f992f598520a3eaf0123c6ea7dd->leave($__internal_4a17b7d63894fd9f532572e3664b455f475f8f992f598520a3eaf0123c6ea7dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_275a8ffeaf0060ea79e407a36567ef426b0b0d897450f754704c7ad75d7f4763 = $this->env->getExtension("native_profiler");
        $__internal_275a8ffeaf0060ea79e407a36567ef426b0b0d897450f754704c7ad75d7f4763->enter($__internal_275a8ffeaf0060ea79e407a36567ef426b0b0d897450f754704c7ad75d7f4763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_275a8ffeaf0060ea79e407a36567ef426b0b0d897450f754704c7ad75d7f4763->leave($__internal_275a8ffeaf0060ea79e407a36567ef426b0b0d897450f754704c7ad75d7f4763_prof);

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
