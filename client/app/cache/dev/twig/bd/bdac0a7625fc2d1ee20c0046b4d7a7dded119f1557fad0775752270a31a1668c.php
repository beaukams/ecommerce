<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_69a8eb66f6848c70664e02d6d743d9591e8c27acbba69e9df44ca4a7a75d588b extends Twig_Template
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
        $__internal_c36fd409b3f608b51645be4695bf85ace5c0c87af06316b5fceef8c25f0397e8 = $this->env->getExtension("native_profiler");
        $__internal_c36fd409b3f608b51645be4695bf85ace5c0c87af06316b5fceef8c25f0397e8->enter($__internal_c36fd409b3f608b51645be4695bf85ace5c0c87af06316b5fceef8c25f0397e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c36fd409b3f608b51645be4695bf85ace5c0c87af06316b5fceef8c25f0397e8->leave($__internal_c36fd409b3f608b51645be4695bf85ace5c0c87af06316b5fceef8c25f0397e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
