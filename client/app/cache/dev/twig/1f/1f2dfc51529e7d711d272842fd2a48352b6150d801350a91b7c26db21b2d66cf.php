<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_36466984aa3f10d06ef7c2395f2fff21685ee5f2d0255bb26543ec1ab0b9b5c9 extends Twig_Template
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
        $__internal_f73d336d47ebcc28bff4a1b3fa1de31f2ea0730853e0456829478a4c6069a5e2 = $this->env->getExtension("native_profiler");
        $__internal_f73d336d47ebcc28bff4a1b3fa1de31f2ea0730853e0456829478a4c6069a5e2->enter($__internal_f73d336d47ebcc28bff4a1b3fa1de31f2ea0730853e0456829478a4c6069a5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupname" => (isset($context["groupname"]) ? $context["groupname"] : $this->getContext($context, "groupname")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_f73d336d47ebcc28bff4a1b3fa1de31f2ea0730853e0456829478a4c6069a5e2->leave($__internal_f73d336d47ebcc28bff4a1b3fa1de31f2ea0730853e0456829478a4c6069a5e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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
/* <form action="{{ path('fos_user_group_edit', {'groupname': groupname} ) }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */