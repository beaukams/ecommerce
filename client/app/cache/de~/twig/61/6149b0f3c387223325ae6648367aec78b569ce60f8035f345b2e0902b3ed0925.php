<?php

/* EcommerceBoutiqueBundle:Produit:voirProduit.html.twig */
class __TwigTemplate_e6f2c8eae1fe7e0ee701e056c04e36f0a8f20fbc6d48f58edbf2b8e3c43fe6d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:voirProduit.html.twig", 1);
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
        $__internal_0a957ae920ab9435653b3913a74528710bdadf3c26cb1632c2cd7503aec7c8e2 = $this->env->getExtension("native_profiler");
        $__internal_0a957ae920ab9435653b3913a74528710bdadf3c26cb1632c2cd7503aec7c8e2->enter($__internal_0a957ae920ab9435653b3913a74528710bdadf3c26cb1632c2cd7503aec7c8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:voirProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a957ae920ab9435653b3913a74528710bdadf3c26cb1632c2cd7503aec7c8e2->leave($__internal_0a957ae920ab9435653b3913a74528710bdadf3c26cb1632c2cd7503aec7c8e2_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_6a2ac63f3bef6c1586ec6b571be222aa0da0c80cf2a6ad6615fe86e37ee9b82d = $this->env->getExtension("native_profiler");
        $__internal_6a2ac63f3bef6c1586ec6b571be222aa0da0c80cf2a6ad6615fe86e37ee9b82d->enter($__internal_6a2ac63f3bef6c1586ec6b571be222aa0da0c80cf2a6ad6615fe86e37ee9b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_6a2ac63f3bef6c1586ec6b571be222aa0da0c80cf2a6ad6615fe86e37ee9b82d->leave($__internal_6a2ac63f3bef6c1586ec6b571be222aa0da0c80cf2a6ad6615fe86e37ee9b82d_prof);

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
/* {% block le_contenu  %}*/
/* 	<div>*/
/* 		<label>Iden: <div>{{ produit.id_produit }}</div></label><br>*/
/* 		<label>Produit: <div>{{ produit.nom_produit }}</div></label><br>*/
/* 		<label>Prix unitaire:<div>{{ produit.prix_unitaire }}</div></label><br>*/
/* 		<label>Details :<div>{{ produit.details_produit }}</div></label><br>*/
/* 		<label>Catégorie : <div>{{ produit.id_typeproduit }}</div></label><br>*/
/* 		<label>Departement : <div>{{ produit.id_departement }}</div></label><br>*/
/* 	</div>*/
/* {% endblock %}*/
