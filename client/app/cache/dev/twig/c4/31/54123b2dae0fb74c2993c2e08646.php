<?php

/* EcommerceProduitBundle:Produit:voirProduit.html.twig */
class __TwigTemplate_c43154123b2dae0fb74c2993c2e08646 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("EcommerceProduitBundle::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div>
\t\t<label>Iden: <div>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "id_produit", array(), "any", false), "html");
        echo "</div></label><br>
\t\t<label>Produit: <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "nom_produit", array(), "any", false), "html");
        echo "</div></label><br>
\t\t<label>Prix unitaire:<div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "prix_unitaire", array(), "any", false), "html");
        echo "</div></label><br>
\t\t<label>Details :<div>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "details_produit", array(), "any", false), "html");
        echo "</div></label><br>
\t\t<label>Catégorie : <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "id_typeproduit", array(), "any", false), "html");
        echo "</div></label><br>
\t\t<label>Departement : <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "id_departement", array(), "any", false), "html");
        echo "</div></label><br>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceProduitBundle:Produit:voirProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
