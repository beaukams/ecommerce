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
        $__internal_9884c7cde18d0d3aeb03239bfafa3dad5d328215dc3557c6b15f90e1fb863137 = $this->env->getExtension("native_profiler");
        $__internal_9884c7cde18d0d3aeb03239bfafa3dad5d328215dc3557c6b15f90e1fb863137->enter($__internal_9884c7cde18d0d3aeb03239bfafa3dad5d328215dc3557c6b15f90e1fb863137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9884c7cde18d0d3aeb03239bfafa3dad5d328215dc3557c6b15f90e1fb863137->leave($__internal_9884c7cde18d0d3aeb03239bfafa3dad5d328215dc3557c6b15f90e1fb863137_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3acb3979a632a066c5ba02475442e2a84692dad5a5a05c62eb8c7d3193acc0ea = $this->env->getExtension("native_profiler");
        $__internal_3acb3979a632a066c5ba02475442e2a84692dad5a5a05c62eb8c7d3193acc0ea->enter($__internal_3acb3979a632a066c5ba02475442e2a84692dad5a5a05c62eb8c7d3193acc0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3acb3979a632a066c5ba02475442e2a84692dad5a5a05c62eb8c7d3193acc0ea->leave($__internal_3acb3979a632a066c5ba02475442e2a84692dad5a5a05c62eb8c7d3193acc0ea_prof);

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
