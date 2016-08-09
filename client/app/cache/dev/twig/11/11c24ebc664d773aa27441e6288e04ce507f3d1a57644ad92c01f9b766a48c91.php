<?php

/* ::menu.html.twig */
class __TwigTemplate_89983179b87b6aa5a60fad02b57674ced53020c1a0f0ad46b914041546a8cf6d extends Twig_Template
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
        $__internal_048f231c7451c328f280d6cb51ba35f21d26f3b03ebada79d049fcf653b14961 = $this->env->getExtension("native_profiler");
        $__internal_048f231c7451c328f280d6cb51ba35f21d26f3b03ebada79d049fcf653b14961->enter($__internal_048f231c7451c328f280d6cb51ba35f21d26f3b03ebada79d049fcf653b14961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_048f231c7451c328f280d6cb51ba35f21d26f3b03ebada79d049fcf653b14961->leave($__internal_048f231c7451c328f280d6cb51ba35f21d26f3b03ebada79d049fcf653b14961_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_df8700b49666b3cf29d05c297a2a60df7b391fe6d93e4703081ceccf2214426e = $this->env->getExtension("native_profiler");
        $__internal_df8700b49666b3cf29d05c297a2a60df7b391fe6d93e4703081ceccf2214426e->enter($__internal_df8700b49666b3cf29d05c297a2a60df7b391fe6d93e4703081ceccf2214426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "\t<ul>
\t\t<li>Accueil</li>
\t\t<li>Produits</li>
\t\t<li>Hotels et Restaurants</li>
\t\t<li>A propos</li>
\t</ul>

";
        
        $__internal_df8700b49666b3cf29d05c297a2a60df7b391fe6d93e4703081ceccf2214426e->leave($__internal_df8700b49666b3cf29d05c297a2a60df7b391fe6d93e4703081ceccf2214426e_prof);

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
