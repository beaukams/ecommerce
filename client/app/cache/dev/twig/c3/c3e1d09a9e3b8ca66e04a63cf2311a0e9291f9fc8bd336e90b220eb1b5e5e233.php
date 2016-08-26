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
        $__internal_933b09af07ad14825296a8e96be478693ec7f7bd1e08fc084843c83bd6dbc0e0 = $this->env->getExtension("native_profiler");
        $__internal_933b09af07ad14825296a8e96be478693ec7f7bd1e08fc084843c83bd6dbc0e0->enter($__internal_933b09af07ad14825296a8e96be478693ec7f7bd1e08fc084843c83bd6dbc0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933b09af07ad14825296a8e96be478693ec7f7bd1e08fc084843c83bd6dbc0e0->leave($__internal_933b09af07ad14825296a8e96be478693ec7f7bd1e08fc084843c83bd6dbc0e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54b0a47a912fdf88ecb780660a2344bdd2a082cedaf6e771e1fbccd1a0c1f2c6 = $this->env->getExtension("native_profiler");
        $__internal_54b0a47a912fdf88ecb780660a2344bdd2a082cedaf6e771e1fbccd1a0c1f2c6->enter($__internal_54b0a47a912fdf88ecb780660a2344bdd2a082cedaf6e771e1fbccd1a0c1f2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_54b0a47a912fdf88ecb780660a2344bdd2a082cedaf6e771e1fbccd1a0c1f2c6->leave($__internal_54b0a47a912fdf88ecb780660a2344bdd2a082cedaf6e771e1fbccd1a0c1f2c6_prof);

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
