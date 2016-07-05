<?php

/* EcommerceProduitBundle:Produit:listeProduit.html.twig */
class __TwigTemplate_3b3931f5625494b601c6bc695d9f4aef extends Twig_Template
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
\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'produits'));
        foreach ($context['_seq'] as $context['_key'] => $context['produit']) {
            // line 5
            echo "\t\t\t<label>Iden: <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "id_produit", array(), "any", false), "html");
            echo "</div></label><br>
\t\t\t<label>Produit: <div>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "nom_produit", array(), "any", false), "html");
            echo "</div></label><br>
\t\t\t<label>Prix unitaire:<div>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "prix_unitaire", array(), "any", false), "html");
            echo "</div></label><br>
\t\t\t<label>Details :<div>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "details_produit", array(), "any", false), "html");
            echo "</div></label><br>
\t\t\t<label>Catégorie : <div>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "id_typeproduit", array(), "any", false), "html");
            echo "</div></label><br>
\t\t\t<label>Departement : <div>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'produit'), "id_departement", array(), "any", false), "html");
            echo "</div></label><br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceProduitBundle:Produit:listeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
