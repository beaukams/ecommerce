<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5a50b1601b6454449ad0966b3d83112eb5a3288ca31f5520a0f8d5f28dca31d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceUserBundle::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_2ec6467c0b9d0631bb1a73636e7199cf7fc4c9bc9c49e7d0c4e6ab84e29e2b1e = $this->env->getExtension("native_profiler");
        $__internal_2ec6467c0b9d0631bb1a73636e7199cf7fc4c9bc9c49e7d0c4e6ab84e29e2b1e->enter($__internal_2ec6467c0b9d0631bb1a73636e7199cf7fc4c9bc9c49e7d0c4e6ab84e29e2b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec6467c0b9d0631bb1a73636e7199cf7fc4c9bc9c49e7d0c4e6ab84e29e2b1e->leave($__internal_2ec6467c0b9d0631bb1a73636e7199cf7fc4c9bc9c49e7d0c4e6ab84e29e2b1e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_58c4d7a10c85b74a173eaaae41f4263bfdc8a828bc3bdc9ab61079ec85f2be12 = $this->env->getExtension("native_profiler");
        $__internal_58c4d7a10c85b74a173eaaae41f4263bfdc8a828bc3bdc9ab61079ec85f2be12->enter($__internal_58c4d7a10c85b74a173eaaae41f4263bfdc8a828bc3bdc9ab61079ec85f2be12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion ";
            echo "</a>
            ";
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
        
        $__internal_58c4d7a10c85b74a173eaaae41f4263bfdc8a828bc3bdc9ab61079ec85f2be12->leave($__internal_58c4d7a10c85b74a173eaaae41f4263bfdc8a828bc3bdc9ab61079ec85f2be12_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f8a129be7b67a50bd669f00f7e2eb64f1e22af9606182c937193c297d41020e = $this->env->getExtension("native_profiler");
        $__internal_9f8a129be7b67a50bd669f00f7e2eb64f1e22af9606182c937193c297d41020e->enter($__internal_9f8a129be7b67a50bd669f00f7e2eb64f1e22af9606182c937193c297d41020e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_9f8a129be7b67a50bd669f00f7e2eb64f1e22af9606182c937193c297d41020e->leave($__internal_9f8a129be7b67a50bd669f00f7e2eb64f1e22af9606182c937193c297d41020e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 27,  124 => 26,  116 => 28,  114 => 26,  110 => 24,  104 => 23,  95 => 20,  90 => 19,  85 => 18,  81 => 17,  77 => 15,  70 => 13,  63 => 11,  57 => 8,  53 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*                 Connecté en tant que {{ app.user.username }} - <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">Connexion {#{ 'layout.login'|trans({}, 'FOSUserBundle') }#}</a>*/
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
