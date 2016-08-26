<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_dabea78c5489ce0faf605ab5eabc20da9eef8783918184e83d1296fa71ec7127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_5433a7a3fd9b3242452aca1f2dd68824760f310c6dbaf8166531611e00b7cab9 = $this->env->getExtension("native_profiler");
        $__internal_5433a7a3fd9b3242452aca1f2dd68824760f310c6dbaf8166531611e00b7cab9->enter($__internal_5433a7a3fd9b3242452aca1f2dd68824760f310c6dbaf8166531611e00b7cab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5433a7a3fd9b3242452aca1f2dd68824760f310c6dbaf8166531611e00b7cab9->leave($__internal_5433a7a3fd9b3242452aca1f2dd68824760f310c6dbaf8166531611e00b7cab9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8e494832e551954e5772c7f514b25653764b83b579a7f007c603a6ffccc491a = $this->env->getExtension("native_profiler");
        $__internal_a8e494832e551954e5772c7f514b25653764b83b579a7f007c603a6ffccc491a->enter($__internal_a8e494832e551954e5772c7f514b25653764b83b579a7f007c603a6ffccc491a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a8e494832e551954e5772c7f514b25653764b83b579a7f007c603a6ffccc491a->leave($__internal_a8e494832e551954e5772c7f514b25653764b83b579a7f007c603a6ffccc491a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
