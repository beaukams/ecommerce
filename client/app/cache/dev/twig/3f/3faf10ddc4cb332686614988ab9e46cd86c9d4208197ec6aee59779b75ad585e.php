<?php

/* EcommerceUserBundle:User:listeProduit.html.twig */
class __TwigTemplate_e89cae73b4ef0ae5166d08b80d3435f3899617092737c768b499656669530834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceUserBundle:User:listeProduit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceProduitBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_090c9743d4d25dc9a28812ec1e676eb47689bbd0c0a1da75fdd1fb5e34a47ba3 = $this->env->getExtension("native_profiler");
        $__internal_090c9743d4d25dc9a28812ec1e676eb47689bbd0c0a1da75fdd1fb5e34a47ba3->enter($__internal_090c9743d4d25dc9a28812ec1e676eb47689bbd0c0a1da75fdd1fb5e34a47ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:listeProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090c9743d4d25dc9a28812ec1e676eb47689bbd0c0a1da75fdd1fb5e34a47ba3->leave($__internal_090c9743d4d25dc9a28812ec1e676eb47689bbd0c0a1da75fdd1fb5e34a47ba3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_064c171fc36147d4ad5fa285d18556ef353baa66126a78db364c8503079f6689 = $this->env->getExtension("native_profiler");
        $__internal_064c171fc36147d4ad5fa285d18556ef353baa66126a78db364c8503079f6689->enter($__internal_064c171fc36147d4ad5fa285d18556ef353baa66126a78db364c8503079f6689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 5
            echo "\t\t\t<label>Iden: <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id_produit", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Produit: <div>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom_produit", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Prix unitaire:<div>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix_unitaire", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Details :<div>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "details_produit", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Catégorie : <div>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id_typeproduit", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Departement : <div>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id_departement", array()), "html", null, true);
            echo "</div></label><br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</div>
";
        
        $__internal_064c171fc36147d4ad5fa285d18556ef353baa66126a78db364c8503079f6689->leave($__internal_064c171fc36147d4ad5fa285d18556ef353baa66126a78db364c8503079f6689_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:listeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceProduitBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<div>*/
/* 		{% for produit in produits %}*/
/* 			<label>Iden: <div>{{ produit.id_produit }}</div></label><br>*/
/* 			<label>Produit: <div>{{ produit.nom_produit }}</div></label><br>*/
/* 			<label>Prix unitaire:<div>{{ produit.prix_unitaire }}</div></label><br>*/
/* 			<label>Details :<div>{{ produit.details_produit }}</div></label><br>*/
/* 			<label>Catégorie : <div>{{ produit.id_typeproduit }}</div></label><br>*/
/* 			<label>Departement : <div>{{ produit.id_departement }}</div></label><br>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endblock %}*/
