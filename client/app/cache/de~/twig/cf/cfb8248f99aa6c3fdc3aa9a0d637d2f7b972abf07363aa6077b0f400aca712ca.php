<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ccd12076fb4a6e682b65843501639aebd161cdf7402164f92c34dc721182883b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_37de9e23c6ca9de39ebd5fbc6802ebc85a9eb1672005c7ab46816a07a9e17f7d = $this->env->getExtension("native_profiler");
        $__internal_37de9e23c6ca9de39ebd5fbc6802ebc85a9eb1672005c7ab46816a07a9e17f7d->enter($__internal_37de9e23c6ca9de39ebd5fbc6802ebc85a9eb1672005c7ab46816a07a9e17f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37de9e23c6ca9de39ebd5fbc6802ebc85a9eb1672005c7ab46816a07a9e17f7d->leave($__internal_37de9e23c6ca9de39ebd5fbc6802ebc85a9eb1672005c7ab46816a07a9e17f7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d1af55dfcab24d0ffc168e2dcc756ccccf318f237a21436446e83e11e39cf82 = $this->env->getExtension("native_profiler");
        $__internal_6d1af55dfcab24d0ffc168e2dcc756ccccf318f237a21436446e83e11e39cf82->enter($__internal_6d1af55dfcab24d0ffc168e2dcc756ccccf318f237a21436446e83e11e39cf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6d1af55dfcab24d0ffc168e2dcc756ccccf318f237a21436446e83e11e39cf82->leave($__internal_6d1af55dfcab24d0ffc168e2dcc756ccccf318f237a21436446e83e11e39cf82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
