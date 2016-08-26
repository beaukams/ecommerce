<?php

/* EcommerceBoutiqueBundle:Commande:listeCommande.html.twig */
class __TwigTemplate_bcefc7b02183e777228aa782059478d82a060d7d55a2f035426921be334de6f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Commande:listeCommande.html.twig", 1);
        $this->blocks = array(
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c33bdb94f71933612438d9f00f74dae017f8b3846d03604bb8de64ce9a921ee0 = $this->env->getExtension("native_profiler");
        $__internal_c33bdb94f71933612438d9f00f74dae017f8b3846d03604bb8de64ce9a921ee0->enter($__internal_c33bdb94f71933612438d9f00f74dae017f8b3846d03604bb8de64ce9a921ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Commande:listeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33bdb94f71933612438d9f00f74dae017f8b3846d03604bb8de64ce9a921ee0->leave($__internal_c33bdb94f71933612438d9f00f74dae017f8b3846d03604bb8de64ce9a921ee0_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_eeb0486daee17c5da0085c4367d4321ee5408c76cc4fae21c8bd1cd5f2b2d6b0 = $this->env->getExtension("native_profiler");
        $__internal_eeb0486daee17c5da0085c4367d4321ee5408c76cc4fae21c8bd1cd5f2b2d6b0->enter($__internal_eeb0486daee17c5da0085c4367d4321ee5408c76cc4fae21c8bd1cd5f2b2d6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 3
        echo "\t<div>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 5
            echo "\t\t\t<label>Iden: <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_commande", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>commande: <div>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "nom_commande", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Prix unitaire:<div>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prix_unitaire", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Details :<div>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "details_commande", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Catégorie : <div>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_typecommande", array()), "html", null, true);
            echo "</div></label><br>
\t\t\t<label>Departement : <div>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id_departement", array()), "html", null, true);
            echo "</div></label><br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</div>
";
        
        $__internal_eeb0486daee17c5da0085c4367d4321ee5408c76cc4fae21c8bd1cd5f2b2d6b0->leave($__internal_eeb0486daee17c5da0085c4367d4321ee5408c76cc4fae21c8bd1cd5f2b2d6b0_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Commande:listeCommande.html.twig";
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
/* {% block le_contenu  %}*/
/* 	<div>*/
/* 		{% for commande in commandes %}*/
/* 			<label>Iden: <div>{{ commande.id_commande }}</div></label><br>*/
/* 			<label>commande: <div>{{ commande.nom_commande }}</div></label><br>*/
/* 			<label>Prix unitaire:<div>{{ commande.prix_unitaire }}</div></label><br>*/
/* 			<label>Details :<div>{{ commande.details_commande }}</div></label><br>*/
/* 			<label>Catégorie : <div>{{ commande.id_typecommande }}</div></label><br>*/
/* 			<label>Departement : <div>{{ commande.id_departement }}</div></label><br>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endblock %}*/
