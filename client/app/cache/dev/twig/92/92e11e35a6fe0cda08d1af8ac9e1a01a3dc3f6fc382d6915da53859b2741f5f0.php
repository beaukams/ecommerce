<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_4e7a8c45366daa139e31d81c9d2e2ba5fdb30ace8f7a4d4e7b004739a4fa5d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_df9ba9c641de6866db207253f7f289f725e8077d466cccd73aa2840474999271 = $this->env->getExtension("native_profiler");
        $__internal_df9ba9c641de6866db207253f7f289f725e8077d466cccd73aa2840474999271->enter($__internal_df9ba9c641de6866db207253f7f289f725e8077d466cccd73aa2840474999271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df9ba9c641de6866db207253f7f289f725e8077d466cccd73aa2840474999271->leave($__internal_df9ba9c641de6866db207253f7f289f725e8077d466cccd73aa2840474999271_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1003c968fb4a19cf80bc1d5635d7ea6352fa4e4af337c05b8bac2280c0de6ee = $this->env->getExtension("native_profiler");
        $__internal_e1003c968fb4a19cf80bc1d5635d7ea6352fa4e4af337c05b8bac2280c0de6ee->enter($__internal_e1003c968fb4a19cf80bc1d5635d7ea6352fa4e4af337c05b8bac2280c0de6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e1003c968fb4a19cf80bc1d5635d7ea6352fa4e4af337c05b8bac2280c0de6ee->leave($__internal_e1003c968fb4a19cf80bc1d5635d7ea6352fa4e4af337c05b8bac2280c0de6ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
