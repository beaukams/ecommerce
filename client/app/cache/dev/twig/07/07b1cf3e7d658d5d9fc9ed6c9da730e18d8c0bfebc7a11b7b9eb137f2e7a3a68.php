<?php

/* ::menu.html.twig */
class __TwigTemplate_39e83ca070deb62bd429843f7da777b63e5e89a0db4df4b0cba7addbc32b08a6 extends Twig_Template
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
        $__internal_4c776569f1cd3d26efe42fe0bbefb561bca7a0c97bff0a2ca2835c2f5d2353ea = $this->env->getExtension("native_profiler");
        $__internal_4c776569f1cd3d26efe42fe0bbefb561bca7a0c97bff0a2ca2835c2f5d2353ea->enter($__internal_4c776569f1cd3d26efe42fe0bbefb561bca7a0c97bff0a2ca2835c2f5d2353ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_4c776569f1cd3d26efe42fe0bbefb561bca7a0c97bff0a2ca2835c2f5d2353ea->leave($__internal_4c776569f1cd3d26efe42fe0bbefb561bca7a0c97bff0a2ca2835c2f5d2353ea_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0c13afa860ca7e9d04827abda29d98a7c59050d958732a368960d5d80e8738b = $this->env->getExtension("native_profiler");
        $__internal_c0c13afa860ca7e9d04827abda29d98a7c59050d958732a368960d5d80e8738b->enter($__internal_c0c13afa860ca7e9d04827abda29d98a7c59050d958732a368960d5d80e8738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "\t<ul class=\"special_items\">
\t\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a><i>/</i></li>
\t\t<li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ecommerce_boutique_homepage");
        echo "\">Produits</a><i>/</i></li>
\t\t<li><a>Hotels et Restaurants</a><i>/</i></li>
\t\t<li><a>Culture</a><i>/</i></li>
\t\t<li><a>A propos</a><i></i></li>
\t</ul>

";
        
        $__internal_c0c13afa860ca7e9d04827abda29d98a7c59050d958732a368960d5d80e8738b->leave($__internal_c0c13afa860ca7e9d04827abda29d98a7c59050d958732a368960d5d80e8738b_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block menu %}*/
/* 	<ul class="special_items">*/
/* 		<li><a href="{{ path('homepage') }}">Accueil</a><i>/</i></li>*/
/* 		<li><a href="{{ path('ecommerce_boutique_homepage') }}">Produits</a><i>/</i></li>*/
/* 		<li><a>Hotels et Restaurants</a><i>/</i></li>*/
/* 		<li><a>Culture</a><i>/</i></li>*/
/* 		<li><a>A propos</a><i></i></li>*/
/* 	</ul>*/
/* */
/* {% endblock %}*/
