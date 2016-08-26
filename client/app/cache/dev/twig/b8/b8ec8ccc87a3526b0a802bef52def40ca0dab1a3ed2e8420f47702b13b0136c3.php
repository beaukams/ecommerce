<?php

/* EcommerceBoutiqueBundle:Commande:voirCommande.html.twig */
class __TwigTemplate_ab714f432fdc5b7fc011945ca6b06735dc618232df016ff125f9daf4d57844db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Commande:voirCommande.html.twig", 1);
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
        $__internal_b18add987730e52ca35ac3300cee039794933ede8d323bd43e6355bce094e390 = $this->env->getExtension("native_profiler");
        $__internal_b18add987730e52ca35ac3300cee039794933ede8d323bd43e6355bce094e390->enter($__internal_b18add987730e52ca35ac3300cee039794933ede8d323bd43e6355bce094e390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Commande:voirCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18add987730e52ca35ac3300cee039794933ede8d323bd43e6355bce094e390->leave($__internal_b18add987730e52ca35ac3300cee039794933ede8d323bd43e6355bce094e390_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_5ea71b75e634a4d442c121d20a8f87fe8266c9d658510aa1e7fc2418317aa37c = $this->env->getExtension("native_profiler");
        $__internal_5ea71b75e634a4d442c121d20a8f87fe8266c9d658510aa1e7fc2418317aa37c->enter($__internal_5ea71b75e634a4d442c121d20a8f87fe8266c9d658510aa1e7fc2418317aa37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 3
        echo "\t<div>
\t\t<label>Iden: <div>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id_commande", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>commande: <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "nom_commande", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Prix unitaire:<div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "prix_unitaire", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Details :<div>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "details_commande", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Catégorie : <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id_typecommande", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Departement : <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id_departement", array()), "html", null, true);
        echo "</div></label><br>
\t</div>
";
        
        $__internal_5ea71b75e634a4d442c121d20a8f87fe8266c9d658510aa1e7fc2418317aa37c->leave($__internal_5ea71b75e634a4d442c121d20a8f87fe8266c9d658510aa1e7fc2418317aa37c_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Commande:voirCommande.html.twig";
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
/* 		<label>Iden: <div>{{ commande.id_commande }}</div></label><br>*/
/* 		<label>commande: <div>{{ commande.nom_commande }}</div></label><br>*/
/* 		<label>Prix unitaire:<div>{{ commande.prix_unitaire }}</div></label><br>*/
/* 		<label>Details :<div>{{ commande.details_commande }}</div></label><br>*/
/* 		<label>Catégorie : <div>{{ commande.id_typecommande }}</div></label><br>*/
/* 		<label>Departement : <div>{{ commande.id_departement }}</div></label><br>*/
/* 	</div>*/
/* {% endblock %}*/
