<?php

/* EcommerceUserBundle:User:listeProduit.html.twig */
class __TwigTemplate_2c1b66d81df5926fbb8c2b3343923b9c90b96e72c5f88ac78b24495e31eee2ff extends Twig_Template
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
        $__internal_40aefe8ebe0581406b1aaeba3b35a68267130f25bb530c85fb15b4d6754ffee9 = $this->env->getExtension("native_profiler");
        $__internal_40aefe8ebe0581406b1aaeba3b35a68267130f25bb530c85fb15b4d6754ffee9->enter($__internal_40aefe8ebe0581406b1aaeba3b35a68267130f25bb530c85fb15b4d6754ffee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:listeProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40aefe8ebe0581406b1aaeba3b35a68267130f25bb530c85fb15b4d6754ffee9->leave($__internal_40aefe8ebe0581406b1aaeba3b35a68267130f25bb530c85fb15b4d6754ffee9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_09202c994105409f3f000e3509789864ee1c78df0977b355d82c90b896ac9727 = $this->env->getExtension("native_profiler");
        $__internal_09202c994105409f3f000e3509789864ee1c78df0977b355d82c90b896ac9727->enter($__internal_09202c994105409f3f000e3509789864ee1c78df0977b355d82c90b896ac9727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09202c994105409f3f000e3509789864ee1c78df0977b355d82c90b896ac9727->leave($__internal_09202c994105409f3f000e3509789864ee1c78df0977b355d82c90b896ac9727_prof);

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
