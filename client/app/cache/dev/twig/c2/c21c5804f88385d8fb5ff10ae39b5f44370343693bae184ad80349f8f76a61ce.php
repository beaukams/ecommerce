<?php

/* EcommerceUserBundle:User:login.html.twig */
class __TwigTemplate_3d18c566a9491addc53153991e9849a39029c4fcd22e30bc8243ff5779a58efe extends Twig_Template
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
        $__internal_968c67b0c8e0803f6977bb8b0ef8c4264fe6c826e49c25f8d2bfa86afb94e408 = $this->env->getExtension("native_profiler");
        $__internal_968c67b0c8e0803f6977bb8b0ef8c4264fe6c826e49c25f8d2bfa86afb94e408->enter($__internal_968c67b0c8e0803f6977bb8b0ef8c4264fe6c826e49c25f8d2bfa86afb94e408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_968c67b0c8e0803f6977bb8b0ef8c4264fe6c826e49c25f8d2bfa86afb94e408->leave($__internal_968c67b0c8e0803f6977bb8b0ef8c4264fe6c826e49c25f8d2bfa86afb94e408_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4673e5047dfa7918ae8d90b2587c4e7de1ae2593f6f7dcf912953cf35bd0c9cc = $this->env->getExtension("native_profiler");
        $__internal_4673e5047dfa7918ae8d90b2587c4e7de1ae2593f6f7dcf912953cf35bd0c9cc->enter($__internal_4673e5047dfa7918ae8d90b2587c4e7de1ae2593f6f7dcf912953cf35bd0c9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t";
        // line 4
        echo "\t<div>
\t\t";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashes", array(), "method"));
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
        
        $__internal_4673e5047dfa7918ae8d90b2587c4e7de1ae2593f6f7dcf912953cf35bd0c9cc->leave($__internal_4673e5047dfa7918ae8d90b2587c4e7de1ae2593f6f7dcf912953cf35bd0c9cc_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_651b1bf8cdb7610b537c81b540635ecb27cd4e8874fbde55558633d349a6d8e5 = $this->env->getExtension("native_profiler");
        $__internal_651b1bf8cdb7610b537c81b540635ecb27cd4e8874fbde55558633d349a6d8e5->enter($__internal_651b1bf8cdb7610b537c81b540635ecb27cd4e8874fbde55558633d349a6d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "\t\t";
        
        $__internal_651b1bf8cdb7610b537c81b540635ecb27cd4e8874fbde55558633d349a6d8e5->leave($__internal_651b1bf8cdb7610b537c81b540635ecb27cd4e8874fbde55558633d349a6d8e5_prof);

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
        return array (  114 => 24,  108 => 23,  100 => 25,  98 => 23,  94 => 21,  85 => 18,  80 => 17,  76 => 16,  72 => 14,  68 => 12,  63 => 11,  57 => 8,  53 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
