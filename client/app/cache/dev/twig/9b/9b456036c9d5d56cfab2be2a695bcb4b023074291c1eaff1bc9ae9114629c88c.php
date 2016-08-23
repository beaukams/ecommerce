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
        $__internal_64637cfef005021dccc4cd45a575dd1c90169e7e8f4162ca7afdf22b023dc75b = $this->env->getExtension("native_profiler");
        $__internal_64637cfef005021dccc4cd45a575dd1c90169e7e8f4162ca7afdf22b023dc75b->enter($__internal_64637cfef005021dccc4cd45a575dd1c90169e7e8f4162ca7afdf22b023dc75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64637cfef005021dccc4cd45a575dd1c90169e7e8f4162ca7afdf22b023dc75b->leave($__internal_64637cfef005021dccc4cd45a575dd1c90169e7e8f4162ca7afdf22b023dc75b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dbc44dc40bf7f87959609b6bcf06422be913db8b5642bfcbdc03706dc53b594 = $this->env->getExtension("native_profiler");
        $__internal_8dbc44dc40bf7f87959609b6bcf06422be913db8b5642bfcbdc03706dc53b594->enter($__internal_8dbc44dc40bf7f87959609b6bcf06422be913db8b5642bfcbdc03706dc53b594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8dbc44dc40bf7f87959609b6bcf06422be913db8b5642bfcbdc03706dc53b594->leave($__internal_8dbc44dc40bf7f87959609b6bcf06422be913db8b5642bfcbdc03706dc53b594_prof);

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
