<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_eaf2dd3aefe1f6ccdbb4e8b42a45e271418e1e9880b1e52437845de2ccdc5538 extends Twig_Template
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
        $__internal_bb45f28b4ea873629da13a130c2a584051ed126c8ffee1d5c45970cc983b3f7f = $this->env->getExtension("native_profiler");
        $__internal_bb45f28b4ea873629da13a130c2a584051ed126c8ffee1d5c45970cc983b3f7f->enter($__internal_bb45f28b4ea873629da13a130c2a584051ed126c8ffee1d5c45970cc983b3f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb45f28b4ea873629da13a130c2a584051ed126c8ffee1d5c45970cc983b3f7f->leave($__internal_bb45f28b4ea873629da13a130c2a584051ed126c8ffee1d5c45970cc983b3f7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24d2bb95a699d177accacb23561e2953504e4dfd3de8fd157456b11812c1189f = $this->env->getExtension("native_profiler");
        $__internal_24d2bb95a699d177accacb23561e2953504e4dfd3de8fd157456b11812c1189f->enter($__internal_24d2bb95a699d177accacb23561e2953504e4dfd3de8fd157456b11812c1189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_24d2bb95a699d177accacb23561e2953504e4dfd3de8fd157456b11812c1189f->leave($__internal_24d2bb95a699d177accacb23561e2953504e4dfd3de8fd157456b11812c1189f_prof);

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
