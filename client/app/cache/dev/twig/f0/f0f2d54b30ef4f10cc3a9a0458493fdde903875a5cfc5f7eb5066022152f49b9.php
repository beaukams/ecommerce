<?php

/* EcommerceBoutiqueBundle:Produit:voirProduit.html.twig */
class __TwigTemplate_b7580ecf9ecd10b57a935dc6edb4a37a7f13b26079702123f7abc65a9e3c261a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:voirProduit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cd3cf0eee3e4524f197427739377bed86f30b0a2bf76c132042b238592e59f5 = $this->env->getExtension("native_profiler");
        $__internal_4cd3cf0eee3e4524f197427739377bed86f30b0a2bf76c132042b238592e59f5->enter($__internal_4cd3cf0eee3e4524f197427739377bed86f30b0a2bf76c132042b238592e59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:voirProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd3cf0eee3e4524f197427739377bed86f30b0a2bf76c132042b238592e59f5->leave($__internal_4cd3cf0eee3e4524f197427739377bed86f30b0a2bf76c132042b238592e59f5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_81a677c8083b806d96afd7b120658b4b2f10e8d8b363c4c8ea02283dde9e11b1 = $this->env->getExtension("native_profiler");
        $__internal_81a677c8083b806d96afd7b120658b4b2f10e8d8b363c4c8ea02283dde9e11b1->enter($__internal_81a677c8083b806d96afd7b120658b4b2f10e8d8b363c4c8ea02283dde9e11b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div>
\t\t<label>Iden: <div>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id_produit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Produit: <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom_produit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Prix unitaire:<div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix_unitaire", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Details :<div>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "details_produit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Catégorie : <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id_typeproduit", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Departement : <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id_departement", array()), "html", null, true);
        echo "</div></label><br>
\t</div>
";
        
        $__internal_81a677c8083b806d96afd7b120658b4b2f10e8d8b363c4c8ea02283dde9e11b1->leave($__internal_81a677c8083b806d96afd7b120658b4b2f10e8d8b363c4c8ea02283dde9e11b1_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Produit:voirProduit.html.twig";
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
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
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