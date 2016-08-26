<?php

/* EcommerceBoutiqueBundle:Produit:listeAllProduit.html.twig */
class __TwigTemplate_e37541e0033beea05318df8ac45994eade857e3944d734a54ed05e548ac4a360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:listeAllProduit.html.twig", 1);
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
        $__internal_4f4e8ca338f675394ca289768a176fb263ccc5d2330cd0387e73da48cd919517 = $this->env->getExtension("native_profiler");
        $__internal_4f4e8ca338f675394ca289768a176fb263ccc5d2330cd0387e73da48cd919517->enter($__internal_4f4e8ca338f675394ca289768a176fb263ccc5d2330cd0387e73da48cd919517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:listeAllProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f4e8ca338f675394ca289768a176fb263ccc5d2330cd0387e73da48cd919517->leave($__internal_4f4e8ca338f675394ca289768a176fb263ccc5d2330cd0387e73da48cd919517_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_ecc1c3804566eafba1e2782eb959c1779c4bea85ca8627c1e85f6129039d8ca7 = $this->env->getExtension("native_profiler");
        $__internal_ecc1c3804566eafba1e2782eb959c1779c4bea85ca8627c1e85f6129039d8ca7->enter($__internal_ecc1c3804566eafba1e2782eb959c1779c4bea85ca8627c1e85f6129039d8ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_ecc1c3804566eafba1e2782eb959c1779c4bea85ca8627c1e85f6129039d8ca7->leave($__internal_ecc1c3804566eafba1e2782eb959c1779c4bea85ca8627c1e85f6129039d8ca7_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Produit:listeAllProduit.html.twig";
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
