<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_016d0d2065da79dff9f52b76309412d6bf81099896f0bcde2430ed6d9ef244d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cb0c0b45fc5aaaf8ad8c2c1a9f4520456699b566fe69030d6420fa7b77b045e = $this->env->getExtension("native_profiler");
        $__internal_7cb0c0b45fc5aaaf8ad8c2c1a9f4520456699b566fe69030d6420fa7b77b045e->enter($__internal_7cb0c0b45fc5aaaf8ad8c2c1a9f4520456699b566fe69030d6420fa7b77b045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_7cb0c0b45fc5aaaf8ad8c2c1a9f4520456699b566fe69030d6420fa7b77b045e->leave($__internal_7cb0c0b45fc5aaaf8ad8c2c1a9f4520456699b566fe69030d6420fa7b77b045e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
