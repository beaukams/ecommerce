<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_19c422fab80ca589ffc4425d3a4c079462a1953f1621f966dbaae0d4e17b1012 extends Twig_Template
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
        $__internal_ae512c46a324a6910bdbbd0fc9fc71a5aa15471b66ee972eee2a39b46b177397 = $this->env->getExtension("native_profiler");
        $__internal_ae512c46a324a6910bdbbd0fc9fc71a5aa15471b66ee972eee2a39b46b177397->enter($__internal_ae512c46a324a6910bdbbd0fc9fc71a5aa15471b66ee972eee2a39b46b177397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_ae512c46a324a6910bdbbd0fc9fc71a5aa15471b66ee972eee2a39b46b177397->leave($__internal_ae512c46a324a6910bdbbd0fc9fc71a5aa15471b66ee972eee2a39b46b177397_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
