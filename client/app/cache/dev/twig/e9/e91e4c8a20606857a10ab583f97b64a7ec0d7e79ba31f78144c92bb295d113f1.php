<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_fc91136475c927fdcb019a0e432f4c421a7618e45c9a2b5ea010c2a0c7a1cc6b extends Twig_Template
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
        $__internal_5343a4df866129c1dc94abe4a2bd178c520634c3dc3aa1c3808e9c5d07a04036 = $this->env->getExtension("native_profiler");
        $__internal_5343a4df866129c1dc94abe4a2bd178c520634c3dc3aa1c3808e9c5d07a04036->enter($__internal_5343a4df866129c1dc94abe4a2bd178c520634c3dc3aa1c3808e9c5d07a04036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5343a4df866129c1dc94abe4a2bd178c520634c3dc3aa1c3808e9c5d07a04036->leave($__internal_5343a4df866129c1dc94abe4a2bd178c520634c3dc3aa1c3808e9c5d07a04036_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fa93cfdfdc4287cf59d76d1e65889e837ee0915d84e01ae9ceec5be62ff96bb = $this->env->getExtension("native_profiler");
        $__internal_6fa93cfdfdc4287cf59d76d1e65889e837ee0915d84e01ae9ceec5be62ff96bb->enter($__internal_6fa93cfdfdc4287cf59d76d1e65889e837ee0915d84e01ae9ceec5be62ff96bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_6fa93cfdfdc4287cf59d76d1e65889e837ee0915d84e01ae9ceec5be62ff96bb->leave($__internal_6fa93cfdfdc4287cf59d76d1e65889e837ee0915d84e01ae9ceec5be62ff96bb_prof);

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
