<?php

/* ::menu.html.twig */
class __TwigTemplate_59da0f55dd319f9cc01d0b219eaa434ea98e8cedc98cd3c26ba9d7bbd8032484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 2
        echo "\t<ul>
\t\t<li>Accueil</li>
\t\t<li>Produits</li>
\t\t<li>Hotels et Restaurants</li>
\t\t<li>A propos</li>
\t</ul>

";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
/* {% block menu %}*/
/* 	<ul>*/
/* 		<li>Accueil</li>*/
/* 		<li>Produits</li>*/
/* 		<li>Hotels et Restaurants</li>*/
/* 		<li>A propos</li>*/
/* 	</ul>*/
/* */
/* {% endblock %}*/
