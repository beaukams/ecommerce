<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5b6a8e36f8cdde14f5714f3125db906e9e5903a76f4b61f67b5a6e467d86db04 extends Twig_Template
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
        $__internal_40d3f9134031ed93e56b206cb12717469f8f09fc15cc1d62c319cdc799df3425 = $this->env->getExtension("native_profiler");
        $__internal_40d3f9134031ed93e56b206cb12717469f8f09fc15cc1d62c319cdc799df3425->enter($__internal_40d3f9134031ed93e56b206cb12717469f8f09fc15cc1d62c319cdc799df3425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d3f9134031ed93e56b206cb12717469f8f09fc15cc1d62c319cdc799df3425->leave($__internal_40d3f9134031ed93e56b206cb12717469f8f09fc15cc1d62c319cdc799df3425_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39130f87bf68f0224e64745d68b861846353be42190a78a328cc67217744548d = $this->env->getExtension("native_profiler");
        $__internal_39130f87bf68f0224e64745d68b861846353be42190a78a328cc67217744548d->enter($__internal_39130f87bf68f0224e64745d68b861846353be42190a78a328cc67217744548d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_39130f87bf68f0224e64745d68b861846353be42190a78a328cc67217744548d->leave($__internal_39130f87bf68f0224e64745d68b861846353be42190a78a328cc67217744548d_prof);

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
