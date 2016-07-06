<?php

/* ::menu.html.twig */
class __TwigTemplate_11f459c2b5613ebce0975d7fda6f347fd0d34708af34a44fe9bc01e6baca4ac5 extends Twig_Template
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
        $__internal_dcafb6baab28ca7f7b4d3baa491fdcba7069d46de245c7f48c6c8507a2d9e26f = $this->env->getExtension("native_profiler");
        $__internal_dcafb6baab28ca7f7b4d3baa491fdcba7069d46de245c7f48c6c8507a2d9e26f->enter($__internal_dcafb6baab28ca7f7b4d3baa491fdcba7069d46de245c7f48c6c8507a2d9e26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_dcafb6baab28ca7f7b4d3baa491fdcba7069d46de245c7f48c6c8507a2d9e26f->leave($__internal_dcafb6baab28ca7f7b4d3baa491fdcba7069d46de245c7f48c6c8507a2d9e26f_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_40786bb00d29853c5abfb0490e99fcbb9892e3b037dcdc43720be948ff5fa2af = $this->env->getExtension("native_profiler");
        $__internal_40786bb00d29853c5abfb0490e99fcbb9892e3b037dcdc43720be948ff5fa2af->enter($__internal_40786bb00d29853c5abfb0490e99fcbb9892e3b037dcdc43720be948ff5fa2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "\t<ul>
\t\t<li>Accueil</li>
\t\t<li>Produits</li>
\t\t<li>Hotels et Restaurants</li>
\t\t<li>A propos</li>
\t</ul>

";
        
        $__internal_40786bb00d29853c5abfb0490e99fcbb9892e3b037dcdc43720be948ff5fa2af->leave($__internal_40786bb00d29853c5abfb0490e99fcbb9892e3b037dcdc43720be948ff5fa2af_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
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
