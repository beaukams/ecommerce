<?php

/* EcommerceUserBundle:User:voirUser.html.twig */
class __TwigTemplate_222679386422cd13cd9b6f80d2293fa2637da2140341c6a42acd4cbac57e41f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceUserBundle::base.html.twig", "EcommerceUserBundle:User:voirUser.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceUserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af1fb956b506f06f350f72722bc8d12b2118eb148a504a85795fcbc759af2301 = $this->env->getExtension("native_profiler");
        $__internal_af1fb956b506f06f350f72722bc8d12b2118eb148a504a85795fcbc759af2301->enter($__internal_af1fb956b506f06f350f72722bc8d12b2118eb148a504a85795fcbc759af2301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:voirUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af1fb956b506f06f350f72722bc8d12b2118eb148a504a85795fcbc759af2301->leave($__internal_af1fb956b506f06f350f72722bc8d12b2118eb148a504a85795fcbc759af2301_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0667f6846991c5f3660a936a645432ebb3a724296582bb53ed33bafa30b8813 = $this->env->getExtension("native_profiler");
        $__internal_b0667f6846991c5f3660a936a645432ebb3a724296582bb53ed33bafa30b8813->enter($__internal_b0667f6846991c5f3660a936a645432ebb3a724296582bb53ed33bafa30b8813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div>
\t\t<label>Iden: <div>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id_user", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>User: <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom_user", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Prix unitaire:<div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prix_unitaire", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Details :<div>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "details_user", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Catégorie : <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id_typeuser", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Departement : <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id_departement", array()), "html", null, true);
        echo "</div></label><br>
\t</div>
";
        
        $__internal_b0667f6846991c5f3660a936a645432ebb3a724296582bb53ed33bafa30b8813->leave($__internal_b0667f6846991c5f3660a936a645432ebb3a724296582bb53ed33bafa30b8813_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:voirUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceUserBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<div>*/
/* 		<label>Iden: <div>{{ user.id_user }}</div></label><br>*/
/* 		<label>User: <div>{{ user.nom_user }}</div></label><br>*/
/* 		<label>Prix unitaire:<div>{{ user.prix_unitaire }}</div></label><br>*/
/* 		<label>Details :<div>{{ user.details_user }}</div></label><br>*/
/* 		<label>Catégorie : <div>{{ user.id_typeuser }}</div></label><br>*/
/* 		<label>Departement : <div>{{ user.id_departement }}</div></label><br>*/
/* 	</div>*/
/* {% endblock %}*/
