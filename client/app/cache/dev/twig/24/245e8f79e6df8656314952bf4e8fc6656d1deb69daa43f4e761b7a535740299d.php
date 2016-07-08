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
        $__internal_e00201cb53ffbeb6d6a3eafa27af0586fb158338163b4212ec533e8411886af3 = $this->env->getExtension("native_profiler");
        $__internal_e00201cb53ffbeb6d6a3eafa27af0586fb158338163b4212ec533e8411886af3->enter($__internal_e00201cb53ffbeb6d6a3eafa27af0586fb158338163b4212ec533e8411886af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_e00201cb53ffbeb6d6a3eafa27af0586fb158338163b4212ec533e8411886af3->leave($__internal_e00201cb53ffbeb6d6a3eafa27af0586fb158338163b4212ec533e8411886af3_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cb81050e08eb62fffee00017b09d0e9a15e28468ae1cd0cfa6142bf43a62cb2 = $this->env->getExtension("native_profiler");
        $__internal_4cb81050e08eb62fffee00017b09d0e9a15e28468ae1cd0cfa6142bf43a62cb2->enter($__internal_4cb81050e08eb62fffee00017b09d0e9a15e28468ae1cd0cfa6142bf43a62cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "\t<ul>
\t\t<li>Accueil</li>
\t\t<li>Produits</li>
\t\t<li>Hotels et Restaurants</li>
\t\t<li>A propos</li>
\t</ul>

";
        
        $__internal_4cb81050e08eb62fffee00017b09d0e9a15e28468ae1cd0cfa6142bf43a62cb2->leave($__internal_4cb81050e08eb62fffee00017b09d0e9a15e28468ae1cd0cfa6142bf43a62cb2_prof);

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
