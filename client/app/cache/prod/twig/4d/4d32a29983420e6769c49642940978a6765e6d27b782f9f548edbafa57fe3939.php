<?php

/* EcommerceBoutiqueBundle::base.html.twig */
class __TwigTemplate_ed5eeaed6e12f975c8209234bc825c2d4b42d5ff629afa24a269209899af2246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'barre_location' => array($this, 'block_barre_location'),
            'menu_nav' => array($this, 'block_menu_nav'),
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
        echo "Boutique:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Boutique";
    }

    // line 6
    public function block_menu_nav($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->loadTemplate("EcommerceBoutiqueBundle::menuBoutique.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 7)->display($context);
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
        return array (  48 => 7,  45 => 6,  38 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Boutique:{{ parent() }} {% endblock %}*/
/* */
/* {% block barre_location %}{{ parent() }}Boutique{% endblock %}*/
/* */
/* {% block menu_nav %}*/
/*   {% include "EcommerceBoutiqueBundle::menuBoutique.html.twig" %}*/
/* {% endblock %}*/
/* */
/* */
