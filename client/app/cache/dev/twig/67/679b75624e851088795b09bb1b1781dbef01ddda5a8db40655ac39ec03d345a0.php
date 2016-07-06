<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_2416c52317f364540bae4693f47e95cb542ace37e36d20b7510cb89a25f02ca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8d6e058f6ca88ae9df6b4df08c65157da2ffa0e5744013e044087523f792d7d1 = $this->env->getExtension("native_profiler");
        $__internal_8d6e058f6ca88ae9df6b4df08c65157da2ffa0e5744013e044087523f792d7d1->enter($__internal_8d6e058f6ca88ae9df6b4df08c65157da2ffa0e5744013e044087523f792d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6e058f6ca88ae9df6b4df08c65157da2ffa0e5744013e044087523f792d7d1->leave($__internal_8d6e058f6ca88ae9df6b4df08c65157da2ffa0e5744013e044087523f792d7d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eabe124f2111f78b60f9c630f0cd94af0969f98be2617d69a8749e10c054bbec = $this->env->getExtension("native_profiler");
        $__internal_eabe124f2111f78b60f9c630f0cd94af0969f98be2617d69a8749e10c054bbec->enter($__internal_eabe124f2111f78b60f9c630f0cd94af0969f98be2617d69a8749e10c054bbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_eabe124f2111f78b60f9c630f0cd94af0969f98be2617d69a8749e10c054bbec->leave($__internal_eabe124f2111f78b60f9c630f0cd94af0969f98be2617d69a8749e10c054bbec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
