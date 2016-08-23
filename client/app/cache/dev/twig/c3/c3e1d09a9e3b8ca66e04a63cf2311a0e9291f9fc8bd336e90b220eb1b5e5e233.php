<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_214d3839ae5f5efc6c3856c1a4650d40ba88f398ce18539be6efb30a4028faa2 extends Twig_Template
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
        $__internal_75c765806b1ced274b8c54d1ea155e95dbd05406ea6a4c1f9e0f321061d75627 = $this->env->getExtension("native_profiler");
        $__internal_75c765806b1ced274b8c54d1ea155e95dbd05406ea6a4c1f9e0f321061d75627->enter($__internal_75c765806b1ced274b8c54d1ea155e95dbd05406ea6a4c1f9e0f321061d75627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75c765806b1ced274b8c54d1ea155e95dbd05406ea6a4c1f9e0f321061d75627->leave($__internal_75c765806b1ced274b8c54d1ea155e95dbd05406ea6a4c1f9e0f321061d75627_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_906a0894e0f199e26561d5b5d80e388fc4c9f6844f1d717ed9aea066c8fad955 = $this->env->getExtension("native_profiler");
        $__internal_906a0894e0f199e26561d5b5d80e388fc4c9f6844f1d717ed9aea066c8fad955->enter($__internal_906a0894e0f199e26561d5b5d80e388fc4c9f6844f1d717ed9aea066c8fad955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_906a0894e0f199e26561d5b5d80e388fc4c9f6844f1d717ed9aea066c8fad955->leave($__internal_906a0894e0f199e26561d5b5d80e388fc4c9f6844f1d717ed9aea066c8fad955_prof);

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
