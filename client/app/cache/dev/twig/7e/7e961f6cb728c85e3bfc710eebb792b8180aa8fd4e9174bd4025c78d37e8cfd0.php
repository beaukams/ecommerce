<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_dc3cebf98a0f5d1366fffc188a28aa54f7992d2c93b6930b10f50bb4eb63d7c2 extends Twig_Template
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
        $__internal_98d176d7a5117c3181127f646033dd5f6d6374f6c5cc67cac64ac188a75df91e = $this->env->getExtension("native_profiler");
        $__internal_98d176d7a5117c3181127f646033dd5f6d6374f6c5cc67cac64ac188a75df91e->enter($__internal_98d176d7a5117c3181127f646033dd5f6d6374f6c5cc67cac64ac188a75df91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_98d176d7a5117c3181127f646033dd5f6d6374f6c5cc67cac64ac188a75df91e->leave($__internal_98d176d7a5117c3181127f646033dd5f6d6374f6c5cc67cac64ac188a75df91e_prof);

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
