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
        $__internal_82b6c7ce08cfe1e80418c253476815c77f7d20407f18d6e6321020b6e22ab501 = $this->env->getExtension("native_profiler");
        $__internal_82b6c7ce08cfe1e80418c253476815c77f7d20407f18d6e6321020b6e22ab501->enter($__internal_82b6c7ce08cfe1e80418c253476815c77f7d20407f18d6e6321020b6e22ab501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b6c7ce08cfe1e80418c253476815c77f7d20407f18d6e6321020b6e22ab501->leave($__internal_82b6c7ce08cfe1e80418c253476815c77f7d20407f18d6e6321020b6e22ab501_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a49aef3d0da12a6ad657cf1f629fc1611e34e49a2d86017c0ac44729ef32c8ab = $this->env->getExtension("native_profiler");
        $__internal_a49aef3d0da12a6ad657cf1f629fc1611e34e49a2d86017c0ac44729ef32c8ab->enter($__internal_a49aef3d0da12a6ad657cf1f629fc1611e34e49a2d86017c0ac44729ef32c8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a49aef3d0da12a6ad657cf1f629fc1611e34e49a2d86017c0ac44729ef32c8ab->leave($__internal_a49aef3d0da12a6ad657cf1f629fc1611e34e49a2d86017c0ac44729ef32c8ab_prof);

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
