<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8446603e63cd7225eb11819d458f249831342b09429aa88007223273227417f5 extends Twig_Template
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
        $__internal_e5d92c3e4226b2cd4f147cf523b0190efa891d64092db7d7a4c9f15d76b20b3e = $this->env->getExtension("native_profiler");
        $__internal_e5d92c3e4226b2cd4f147cf523b0190efa891d64092db7d7a4c9f15d76b20b3e->enter($__internal_e5d92c3e4226b2cd4f147cf523b0190efa891d64092db7d7a4c9f15d76b20b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5d92c3e4226b2cd4f147cf523b0190efa891d64092db7d7a4c9f15d76b20b3e->leave($__internal_e5d92c3e4226b2cd4f147cf523b0190efa891d64092db7d7a4c9f15d76b20b3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4af145d941e2de7731b8644b7583ea5832233831198330c97967f72746f1731 = $this->env->getExtension("native_profiler");
        $__internal_a4af145d941e2de7731b8644b7583ea5832233831198330c97967f72746f1731->enter($__internal_a4af145d941e2de7731b8644b7583ea5832233831198330c97967f72746f1731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a4af145d941e2de7731b8644b7583ea5832233831198330c97967f72746f1731->leave($__internal_a4af145d941e2de7731b8644b7583ea5832233831198330c97967f72746f1731_prof);

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
