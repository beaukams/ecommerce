<?php

/* ::menu.html.twig */
class __TwigTemplate_5ca54f5b2f49e3fbc90bfd8933a59a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

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

    public function isTraitable()
    {
        return true;
    }
}
