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
        $__internal_167763159cc09a281f8c28b1b0257a9d9b61832e83b849da9e001bebd4609d90 = $this->env->getExtension("native_profiler");
        $__internal_167763159cc09a281f8c28b1b0257a9d9b61832e83b849da9e001bebd4609d90->enter($__internal_167763159cc09a281f8c28b1b0257a9d9b61832e83b849da9e001bebd4609d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_167763159cc09a281f8c28b1b0257a9d9b61832e83b849da9e001bebd4609d90->leave($__internal_167763159cc09a281f8c28b1b0257a9d9b61832e83b849da9e001bebd4609d90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8146af9fea4ccc9c99fe3e6821c55c6362d86e2775d21bd687dbe369dd35c566 = $this->env->getExtension("native_profiler");
        $__internal_8146af9fea4ccc9c99fe3e6821c55c6362d86e2775d21bd687dbe369dd35c566->enter($__internal_8146af9fea4ccc9c99fe3e6821c55c6362d86e2775d21bd687dbe369dd35c566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8146af9fea4ccc9c99fe3e6821c55c6362d86e2775d21bd687dbe369dd35c566->leave($__internal_8146af9fea4ccc9c99fe3e6821c55c6362d86e2775d21bd687dbe369dd35c566_prof);

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
