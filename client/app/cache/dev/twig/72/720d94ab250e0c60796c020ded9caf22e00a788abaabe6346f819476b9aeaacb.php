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
        $__internal_43df65fd17b6217f26772550b8d31dc3b8d80db96c15bc19fd88fcc6794678a4 = $this->env->getExtension("native_profiler");
        $__internal_43df65fd17b6217f26772550b8d31dc3b8d80db96c15bc19fd88fcc6794678a4->enter($__internal_43df65fd17b6217f26772550b8d31dc3b8d80db96c15bc19fd88fcc6794678a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43df65fd17b6217f26772550b8d31dc3b8d80db96c15bc19fd88fcc6794678a4->leave($__internal_43df65fd17b6217f26772550b8d31dc3b8d80db96c15bc19fd88fcc6794678a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16fccbf2f4eb7236e15a66ffca9b0d084605b8dd4dc8b8ca1d553281ba4e6509 = $this->env->getExtension("native_profiler");
        $__internal_16fccbf2f4eb7236e15a66ffca9b0d084605b8dd4dc8b8ca1d553281ba4e6509->enter($__internal_16fccbf2f4eb7236e15a66ffca9b0d084605b8dd4dc8b8ca1d553281ba4e6509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_16fccbf2f4eb7236e15a66ffca9b0d084605b8dd4dc8b8ca1d553281ba4e6509->leave($__internal_16fccbf2f4eb7236e15a66ffca9b0d084605b8dd4dc8b8ca1d553281ba4e6509_prof);

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
