<?php

/* EcommerceUserBundle:User:voirProduit.html.twig */
class __TwigTemplate_adb93f3a82765870612c17f13ea57f7545aa2180cdcaa80d9ccd98c79d1f9838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceUserBundle:User:voirProduit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div>
\t\t<label>Iden: <div>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id_produit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Produit: <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nom_produit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Prix unitaire:<div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix_unitaire", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Details :<div>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "details_produit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Catégorie : <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id_typeproduit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Departement : <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id_departement", array()), "html", null, true);
        echo "</div></label><br>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:voirProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceProduitBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<div>*/
/* 		<label>Iden: <div>{{ produit.id_produit }}</div></label><br>*/
/* 		<label>Produit: <div>{{ produit.nom_produit }}</div></label><br>*/
/* 		<label>Prix unitaire:<div>{{ produit.prix_unitaire }}</div></label><br>*/
/* 		<label>Details :<div>{{ produit.details_produit }}</div></label><br>*/
/* 		<label>Catégorie : <div>{{ produit.id_typeproduit }}</div></label><br>*/
/* 		<label>Departement : <div>{{ produit.id_departement }}</div></label><br>*/
/* 	</div>*/
/* {% endblock %}*/
