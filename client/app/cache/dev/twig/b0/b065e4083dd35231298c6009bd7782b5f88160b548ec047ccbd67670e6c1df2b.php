<?php

/* EcommerceUserBundle::_layout.html.twig */
class __TwigTemplate_01330232b55baf1ed1e66dc43c1f65c9495fe48ad706884402f3958a12656051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceUserBundle::base.html.twig", "EcommerceUserBundle::_layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceUserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_808513447d3e46be50515741f4ac54027fffef7f6ca4369830b5abd826272a78 = $this->env->getExtension("native_profiler");
        $__internal_808513447d3e46be50515741f4ac54027fffef7f6ca4369830b5abd826272a78->enter($__internal_808513447d3e46be50515741f4ac54027fffef7f6ca4369830b5abd826272a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle::_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808513447d3e46be50515741f4ac54027fffef7f6ca4369830b5abd826272a78->leave($__internal_808513447d3e46be50515741f4ac54027fffef7f6ca4369830b5abd826272a78_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac72a56df52efe277ab77952a11d950f44b5e736da5ec4a667740b593ea449b4 = $this->env->getExtension("native_profiler");
        $__internal_ac72a56df52efe277ab77952a11d950f44b5e736da5ec4a667740b593ea449b4->enter($__internal_ac72a56df52efe277ab77952a11d950f44b5e736da5ec4a667740b593ea449b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        // line 4
        echo "        <div>
            ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>

                Connecté en tant que ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 13
            echo "                ";
            // line 14
            echo "            ";
        }
        // line 15
        echo "        </div>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
";
        
        $__internal_ac72a56df52efe277ab77952a11d950f44b5e736da5ec4a667740b593ea449b4->leave($__internal_ac72a56df52efe277ab77952a11d950f44b5e736da5ec4a667740b593ea449b4_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beefb8e4219d577dca69672562768261787d473098937eedd751b6da0c166249 = $this->env->getExtension("native_profiler");
        $__internal_beefb8e4219d577dca69672562768261787d473098937eedd751b6da0c166249->enter($__internal_beefb8e4219d577dca69672562768261787d473098937eedd751b6da0c166249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_beefb8e4219d577dca69672562768261787d473098937eedd751b6da0c166249->leave($__internal_beefb8e4219d577dca69672562768261787d473098937eedd751b6da0c166249_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle::_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  120 => 26,  112 => 28,  110 => 26,  106 => 24,  100 => 23,  91 => 20,  86 => 19,  81 => 18,  77 => 17,  73 => 15,  70 => 14,  68 => 13,  63 => 11,  57 => 8,  53 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceUserBundle::base.html.twig" %}*/
/* {% block body %}*/
/*     {# On y place le contenu du layout par défaut de FOSUB  #}*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/* */
/*                 Connecté en tant que {{ app.user.username }}*/
/*             {% else %}*/
/*                 {# <a href="{{ path('fos_user_security_login') }}">Connexion { 'layout.login'|trans({}, 'FOSUserBundle') }</a> #}*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* {% endblock %}*/
/* */
