<?php

/* EcommerceProduitBundle:Produit:ajoutProduit.html.twig */
class __TwigTemplate_6bbb7bae259f88308f86d56b2e42a06f extends Twig_Template
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
        echo "\t<form method=\"POST\">
\t\t<input type=\"text\" name=\"nom_produit\"><br/>
\t\t<input type=\"text\" name=\"dep_production\"><br/>
\t\t<input type=\"number\" name=\"prix_produit\"><br/>
\t\t<input type=\"text\" name=\"contacts\">
\t\t<input type=\"text\" name=\"details_produit\">
\t\t<input type=\"submit\" value=\"valider\">
\t</form>
";
    }

    public function getTemplateName()
    {
        return "EcommerceProduitBundle:Produit:ajoutProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
