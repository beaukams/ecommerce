<?php

/* EcommerceUserBundle:User:voirProduit.html.twig */
class __TwigTemplate_3e12397e283d4bfc422cec7e5b3e2828d7a8cac53347131da484e91500bed55d extends Twig_Template
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
        $__internal_f9c0cf861bc66292783c3dfc6e273990be6965ac8d8d8fc94379bcf3a5a9e460 = $this->env->getExtension("native_profiler");
        $__internal_f9c0cf861bc66292783c3dfc6e273990be6965ac8d8d8fc94379bcf3a5a9e460->enter($__internal_f9c0cf861bc66292783c3dfc6e273990be6965ac8d8d8fc94379bcf3a5a9e460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:voirProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9c0cf861bc66292783c3dfc6e273990be6965ac8d8d8fc94379bcf3a5a9e460->leave($__internal_f9c0cf861bc66292783c3dfc6e273990be6965ac8d8d8fc94379bcf3a5a9e460_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_30fc8b6dc92674cec746dfe75826b033a7bd54503a23713daadd37f9f7e1a62f = $this->env->getExtension("native_profiler");
        $__internal_30fc8b6dc92674cec746dfe75826b033a7bd54503a23713daadd37f9f7e1a62f->enter($__internal_30fc8b6dc92674cec746dfe75826b033a7bd54503a23713daadd37f9f7e1a62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30fc8b6dc92674cec746dfe75826b033a7bd54503a23713daadd37f9f7e1a62f->leave($__internal_30fc8b6dc92674cec746dfe75826b033a7bd54503a23713daadd37f9f7e1a62f_prof);

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
        return array (  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
