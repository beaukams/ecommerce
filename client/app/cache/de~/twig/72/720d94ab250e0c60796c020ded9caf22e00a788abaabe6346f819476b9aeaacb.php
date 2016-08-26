<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_cc89fddbc0aeb0ad1d06bf3183fe99e9d472cf5192c5cb40012663aec5ed20c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ef493a0add225301a7ba7336845cbd898e7040b213eb0493659c3fd2f7b6ff0f = $this->env->getExtension("native_profiler");
        $__internal_ef493a0add225301a7ba7336845cbd898e7040b213eb0493659c3fd2f7b6ff0f->enter($__internal_ef493a0add225301a7ba7336845cbd898e7040b213eb0493659c3fd2f7b6ff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef493a0add225301a7ba7336845cbd898e7040b213eb0493659c3fd2f7b6ff0f->leave($__internal_ef493a0add225301a7ba7336845cbd898e7040b213eb0493659c3fd2f7b6ff0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dbed4618504c1bf83125c91b292ac37ef8762e8933b02dfa8900ec3034b96af = $this->env->getExtension("native_profiler");
        $__internal_5dbed4618504c1bf83125c91b292ac37ef8762e8933b02dfa8900ec3034b96af->enter($__internal_5dbed4618504c1bf83125c91b292ac37ef8762e8933b02dfa8900ec3034b96af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5dbed4618504c1bf83125c91b292ac37ef8762e8933b02dfa8900ec3034b96af->leave($__internal_5dbed4618504c1bf83125c91b292ac37ef8762e8933b02dfa8900ec3034b96af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
