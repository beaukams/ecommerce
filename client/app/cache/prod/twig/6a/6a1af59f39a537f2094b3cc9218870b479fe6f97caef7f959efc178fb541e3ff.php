<?php

/* EcommerceUserBundle:User:login.html.twig */
class __TwigTemplate_724009f5773a5ebbf37f12f3669621010717e7717081cbacde44197256568cb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceUserBundle:User:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceProduitBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        // line 4
        echo "\t<div>
\t\t";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t<a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t</a>
\t\t";
        } else {
            // line 11
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            // line 12
            echo "</a>
\t\t";
        }
        // line 14
        echo "\t</div>

\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 17
            echo "\t\t\t<div class=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\t<div>
\t\t";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "\t</div>
";
    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 24
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 23,  91 => 25,  89 => 23,  85 => 21,  76 => 18,  71 => 17,  67 => 16,  63 => 14,  59 => 12,  54 => 11,  48 => 8,  44 => 7,  39 => 6,  37 => 5,  34 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceProduitBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	{# On y place le contenu du layout par défaut de FOSUB 	#}*/
/* 	<div>*/
/* 		{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 			{{ 'layout.logged_in_as'|trans({'%username%': app.user.username},'FOSUserBundle') }} |*/
/* 			<a href="{{ path('fos_user_security_logout') }}">*/
/* 			{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/* 			</a>*/
/* 		{% else %}*/
/* 			<a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({},*/
/* 			'FOSUserBundle') }}</a>*/
/* 		{% endif %}*/
/* 	</div>*/
/* */
/* 	{% for key, message in app.session.getFlashes() %}*/
/* 			<div class="{{ key }}">*/
/* 			{{ message|trans({}, 'FOSUserBundle') }}*/
/* 			</div>*/
/* 	{% endfor %}*/
/* */
/* 	<div>*/
/* 		{% block fos_user_content %}*/
/* 		{% endblock fos_user_content %}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
