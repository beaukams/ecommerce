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
        $__internal_9d2cee526f7c04cf4956a0a4a36d16d6a687b189c0778171097942c67d0e1dfa = $this->env->getExtension("native_profiler");
        $__internal_9d2cee526f7c04cf4956a0a4a36d16d6a687b189c0778171097942c67d0e1dfa->enter($__internal_9d2cee526f7c04cf4956a0a4a36d16d6a687b189c0778171097942c67d0e1dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle::_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2cee526f7c04cf4956a0a4a36d16d6a687b189c0778171097942c67d0e1dfa->leave($__internal_9d2cee526f7c04cf4956a0a4a36d16d6a687b189c0778171097942c67d0e1dfa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d697e26a6e2a86c7172968722a3bb5a381b43b94703937121a30af28a549f1c9 = $this->env->getExtension("native_profiler");
        $__internal_d697e26a6e2a86c7172968722a3bb5a381b43b94703937121a30af28a549f1c9->enter($__internal_d697e26a6e2a86c7172968722a3bb5a381b43b94703937121a30af28a549f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d697e26a6e2a86c7172968722a3bb5a381b43b94703937121a30af28a549f1c9->leave($__internal_d697e26a6e2a86c7172968722a3bb5a381b43b94703937121a30af28a549f1c9_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52bb880031259f0ca5d21cf3005f8699c0f090a5383cf449cb22c4d2f3bcc147 = $this->env->getExtension("native_profiler");
        $__internal_52bb880031259f0ca5d21cf3005f8699c0f090a5383cf449cb22c4d2f3bcc147->enter($__internal_52bb880031259f0ca5d21cf3005f8699c0f090a5383cf449cb22c4d2f3bcc147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_52bb880031259f0ca5d21cf3005f8699c0f090a5383cf449cb22c4d2f3bcc147->leave($__internal_52bb880031259f0ca5d21cf3005f8699c0f090a5383cf449cb22c4d2f3bcc147_prof);

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
