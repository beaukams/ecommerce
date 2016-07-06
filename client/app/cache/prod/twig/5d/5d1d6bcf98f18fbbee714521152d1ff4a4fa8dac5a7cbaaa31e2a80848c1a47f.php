<?php

/* EcommerceBoutiqueBundle::base.html.twig */
class __TwigTemplate_052a89f13449986d86b98d3bbba87a6657fb67851921f3c93b65b06e36359a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Produit: {{ parent() }} {% endblock %}*/
