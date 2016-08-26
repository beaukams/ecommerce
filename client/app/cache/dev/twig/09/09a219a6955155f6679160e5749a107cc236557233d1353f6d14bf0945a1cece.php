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
        $__internal_491baae106216ab0e2665ac77e234052137fcd6a14614bf034f26c20dc435bb5 = $this->env->getExtension("native_profiler");
        $__internal_491baae106216ab0e2665ac77e234052137fcd6a14614bf034f26c20dc435bb5->enter($__internal_491baae106216ab0e2665ac77e234052137fcd6a14614bf034f26c20dc435bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491baae106216ab0e2665ac77e234052137fcd6a14614bf034f26c20dc435bb5->leave($__internal_491baae106216ab0e2665ac77e234052137fcd6a14614bf034f26c20dc435bb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f19cf8862699cba363727f9370b77dec2c4f595e2832472a4bf5cc0c2632124e = $this->env->getExtension("native_profiler");
        $__internal_f19cf8862699cba363727f9370b77dec2c4f595e2832472a4bf5cc0c2632124e->enter($__internal_f19cf8862699cba363727f9370b77dec2c4f595e2832472a4bf5cc0c2632124e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f19cf8862699cba363727f9370b77dec2c4f595e2832472a4bf5cc0c2632124e->leave($__internal_f19cf8862699cba363727f9370b77dec2c4f595e2832472a4bf5cc0c2632124e_prof);

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
