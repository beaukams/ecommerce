<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d4c9dfdac1d087f455f0303cd5c7b02c77c6fa69c789de33e51f0b7b2023f59a extends Twig_Template
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
        $__internal_f8fdfd0e1bb4b7fcbaa0b3067b1a21812a12be80a5a590c8bbe91870bc9bcb88 = $this->env->getExtension("native_profiler");
        $__internal_f8fdfd0e1bb4b7fcbaa0b3067b1a21812a12be80a5a590c8bbe91870bc9bcb88->enter($__internal_f8fdfd0e1bb4b7fcbaa0b3067b1a21812a12be80a5a590c8bbe91870bc9bcb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_f8fdfd0e1bb4b7fcbaa0b3067b1a21812a12be80a5a590c8bbe91870bc9bcb88->leave($__internal_f8fdfd0e1bb4b7fcbaa0b3067b1a21812a12be80a5a590c8bbe91870bc9bcb88_prof);

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
