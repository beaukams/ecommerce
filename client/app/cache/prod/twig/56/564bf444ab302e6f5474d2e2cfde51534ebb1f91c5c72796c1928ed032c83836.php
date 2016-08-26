<?php

/* EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig */
class __TwigTemplate_cf5b53de74a1ca8c002e5d95a981f6c20a9a4b86f5cd3ab1ceb7f98cdc276769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig", 1);
        $this->blocks = array(
            'barre_location' => array($this, 'block_barre_location'),
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_barre_location($context, array $blocks = array())
    {
        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "<span>|</span>Nouveau Produit";
    }

    // line 5
    public function block_le_contenu($context, array $blocks = array())
    {
        // line 6
        echo "\t<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ajouteProduit");
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "\">
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t<input type='submit' value='Valider'/>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
/* */
/* {% block barre_location %}{{ parent() }}<span>|</span>Nouveau Produit{% endblock %}*/
/* */
/* {% block le_contenu %}*/
/* 	<form method="POST" action="{{ path('ajouteProduit') }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
