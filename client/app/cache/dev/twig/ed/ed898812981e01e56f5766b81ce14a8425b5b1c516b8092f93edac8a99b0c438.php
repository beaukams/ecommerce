<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0abcfaaab2b0990a7fd7f31b914b78befee5acc7aa9e84a18e2937eaa9a10ff9 extends Twig_Template
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
        $__internal_dbb99a4e7e3412aaed0869b2fddd8d01e54cad9049bfed654c8f25b0b11cd60c = $this->env->getExtension("native_profiler");
        $__internal_dbb99a4e7e3412aaed0869b2fddd8d01e54cad9049bfed654c8f25b0b11cd60c->enter($__internal_dbb99a4e7e3412aaed0869b2fddd8d01e54cad9049bfed654c8f25b0b11cd60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb99a4e7e3412aaed0869b2fddd8d01e54cad9049bfed654c8f25b0b11cd60c->leave($__internal_dbb99a4e7e3412aaed0869b2fddd8d01e54cad9049bfed654c8f25b0b11cd60c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84cb140bc176b94778db7079bbc627f91665f095524cbd36bdf4e2971fd88ab6 = $this->env->getExtension("native_profiler");
        $__internal_84cb140bc176b94778db7079bbc627f91665f095524cbd36bdf4e2971fd88ab6->enter($__internal_84cb140bc176b94778db7079bbc627f91665f095524cbd36bdf4e2971fd88ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_84cb140bc176b94778db7079bbc627f91665f095524cbd36bdf4e2971fd88ab6->leave($__internal_84cb140bc176b94778db7079bbc627f91665f095524cbd36bdf4e2971fd88ab6_prof);

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
