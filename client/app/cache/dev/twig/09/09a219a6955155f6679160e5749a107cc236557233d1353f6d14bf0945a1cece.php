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
        $__internal_f8c37108c5c5364f3cca2ab6ce5c46255f03f20fff89e722dcbe8c4e909c37a2 = $this->env->getExtension("native_profiler");
        $__internal_f8c37108c5c5364f3cca2ab6ce5c46255f03f20fff89e722dcbe8c4e909c37a2->enter($__internal_f8c37108c5c5364f3cca2ab6ce5c46255f03f20fff89e722dcbe8c4e909c37a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c37108c5c5364f3cca2ab6ce5c46255f03f20fff89e722dcbe8c4e909c37a2->leave($__internal_f8c37108c5c5364f3cca2ab6ce5c46255f03f20fff89e722dcbe8c4e909c37a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ba9ef18d950c15d214bd83f0d76fe7481ceb75af953a66b2acd571d9a05e180 = $this->env->getExtension("native_profiler");
        $__internal_6ba9ef18d950c15d214bd83f0d76fe7481ceb75af953a66b2acd571d9a05e180->enter($__internal_6ba9ef18d950c15d214bd83f0d76fe7481ceb75af953a66b2acd571d9a05e180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6ba9ef18d950c15d214bd83f0d76fe7481ceb75af953a66b2acd571d9a05e180->leave($__internal_6ba9ef18d950c15d214bd83f0d76fe7481ceb75af953a66b2acd571d9a05e180_prof);

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
