<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_135b20f46d1cab8540f7531ca103702a88fc6bf518aca9665392b308ea00f3ac extends Twig_Template
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
        $__internal_be0ae4bdd83cdb21fd04e3ce70cb3fdaa9a4a31af2e75b639bc7f080dbc4cf38 = $this->env->getExtension("native_profiler");
        $__internal_be0ae4bdd83cdb21fd04e3ce70cb3fdaa9a4a31af2e75b639bc7f080dbc4cf38->enter($__internal_be0ae4bdd83cdb21fd04e3ce70cb3fdaa9a4a31af2e75b639bc7f080dbc4cf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_be0ae4bdd83cdb21fd04e3ce70cb3fdaa9a4a31af2e75b639bc7f080dbc4cf38->leave($__internal_be0ae4bdd83cdb21fd04e3ce70cb3fdaa9a4a31af2e75b639bc7f080dbc4cf38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
