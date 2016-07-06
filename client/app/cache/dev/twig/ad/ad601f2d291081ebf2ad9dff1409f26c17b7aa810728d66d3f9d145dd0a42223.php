<?php

/* EcommerceBoutiqueBundle:Produit:listeProduit.html.twig */
class __TwigTemplate_035dabfac77a028ea7c97380c0817283ab8ef940cceff56670fe478d17bb6b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:listeProduit.html.twig", 1);
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
        $__internal_8e50f8dc6071ace81403679a8da4464273963fce767614941524ba14b6868674 = $this->env->getExtension("native_profiler");
        $__internal_8e50f8dc6071ace81403679a8da4464273963fce767614941524ba14b6868674->enter($__internal_8e50f8dc6071ace81403679a8da4464273963fce767614941524ba14b6868674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:listeProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e50f8dc6071ace81403679a8da4464273963fce767614941524ba14b6868674->leave($__internal_8e50f8dc6071ace81403679a8da4464273963fce767614941524ba14b6868674_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6608c1234a0c2072afe6d56f9b7d26915ff0bbefd5b870aaf23dd46f83c6ea2 = $this->env->getExtension("native_profiler");
        $__internal_a6608c1234a0c2072afe6d56f9b7d26915ff0bbefd5b870aaf23dd46f83c6ea2->enter($__internal_a6608c1234a0c2072afe6d56f9b7d26915ff0bbefd5b870aaf23dd46f83c6ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6608c1234a0c2072afe6d56f9b7d26915ff0bbefd5b870aaf23dd46f83c6ea2->leave($__internal_a6608c1234a0c2072afe6d56f9b7d26915ff0bbefd5b870aaf23dd46f83c6ea2_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Produit:listeProduit.html.twig";
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
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
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
