<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b3fb2e3c5f26ca74457760ae554448e0a71813c4e2e6f008cacd5d6c0d0108cd extends Twig_Template
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
        $__internal_211acaf8f0473c8c7e7565cb71309bdbb6fdc13a849fb36be437411898bf1fdc = $this->env->getExtension("native_profiler");
        $__internal_211acaf8f0473c8c7e7565cb71309bdbb6fdc13a849fb36be437411898bf1fdc->enter($__internal_211acaf8f0473c8c7e7565cb71309bdbb6fdc13a849fb36be437411898bf1fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_211acaf8f0473c8c7e7565cb71309bdbb6fdc13a849fb36be437411898bf1fdc->leave($__internal_211acaf8f0473c8c7e7565cb71309bdbb6fdc13a849fb36be437411898bf1fdc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8144ee9c2779d4b361aceed64c07fe087d312daf8b995de37920f8c4246cfd42 = $this->env->getExtension("native_profiler");
        $__internal_8144ee9c2779d4b361aceed64c07fe087d312daf8b995de37920f8c4246cfd42->enter($__internal_8144ee9c2779d4b361aceed64c07fe087d312daf8b995de37920f8c4246cfd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8144ee9c2779d4b361aceed64c07fe087d312daf8b995de37920f8c4246cfd42->leave($__internal_8144ee9c2779d4b361aceed64c07fe087d312daf8b995de37920f8c4246cfd42_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b66abb8a4796bcabe3b66cc16ca3682a7f5d5ffae910b6b74a65536223bf043d = $this->env->getExtension("native_profiler");
        $__internal_b66abb8a4796bcabe3b66cc16ca3682a7f5d5ffae910b6b74a65536223bf043d->enter($__internal_b66abb8a4796bcabe3b66cc16ca3682a7f5d5ffae910b6b74a65536223bf043d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_b66abb8a4796bcabe3b66cc16ca3682a7f5d5ffae910b6b74a65536223bf043d->leave($__internal_b66abb8a4796bcabe3b66cc16ca3682a7f5d5ffae910b6b74a65536223bf043d_prof);

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
