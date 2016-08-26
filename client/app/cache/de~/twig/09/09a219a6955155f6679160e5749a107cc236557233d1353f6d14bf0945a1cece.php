<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5e5c0b1fe8dc7f831d886758dfde134c20190b64632e9155fe4c7035f3b2d042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3bb9070721d4d7660aa262abb0548fbabcac8d3dd6256282e0cf399c568320a6 = $this->env->getExtension("native_profiler");
        $__internal_3bb9070721d4d7660aa262abb0548fbabcac8d3dd6256282e0cf399c568320a6->enter($__internal_3bb9070721d4d7660aa262abb0548fbabcac8d3dd6256282e0cf399c568320a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb9070721d4d7660aa262abb0548fbabcac8d3dd6256282e0cf399c568320a6->leave($__internal_3bb9070721d4d7660aa262abb0548fbabcac8d3dd6256282e0cf399c568320a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1440be8866d213a2a181c2a7edcd265276f6e29b7b42b042983f05f96f4f64c3 = $this->env->getExtension("native_profiler");
        $__internal_1440be8866d213a2a181c2a7edcd265276f6e29b7b42b042983f05f96f4f64c3->enter($__internal_1440be8866d213a2a181c2a7edcd265276f6e29b7b42b042983f05f96f4f64c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1440be8866d213a2a181c2a7edcd265276f6e29b7b42b042983f05f96f4f64c3->leave($__internal_1440be8866d213a2a181c2a7edcd265276f6e29b7b42b042983f05f96f4f64c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
