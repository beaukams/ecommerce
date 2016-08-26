<?php

/* EcommerceRestaurantBundle::index.html.twig */
class __TwigTemplate_2e9d0c041fa567e6a2f40357511bf1772a45aa02866523f33c0afb237ffd84a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceRestaurantBundle::base.html.twig", "EcommerceRestaurantBundle::index.html.twig", 1);
        $this->blocks = array(
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceRestaurantBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff801d88a655489da72acdef22b28d15f1f0b8cdcc988c59448c6c57302898f6 = $this->env->getExtension("native_profiler");
        $__internal_ff801d88a655489da72acdef22b28d15f1f0b8cdcc988c59448c6c57302898f6->enter($__internal_ff801d88a655489da72acdef22b28d15f1f0b8cdcc988c59448c6c57302898f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceRestaurantBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff801d88a655489da72acdef22b28d15f1f0b8cdcc988c59448c6c57302898f6->leave($__internal_ff801d88a655489da72acdef22b28d15f1f0b8cdcc988c59448c6c57302898f6_prof);

    }

    // line 3
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_09c3c0568294abe783e42292b136034f9b030c5e3f519020620818af7b569914 = $this->env->getExtension("native_profiler");
        $__internal_09c3c0568294abe783e42292b136034f9b030c5e3f519020620818af7b569914->enter($__internal_09c3c0568294abe783e42292b136034f9b030c5e3f519020620818af7b569914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 4
        echo "
";
        
        $__internal_09c3c0568294abe783e42292b136034f9b030c5e3f519020620818af7b569914->leave($__internal_09c3c0568294abe783e42292b136034f9b030c5e3f519020620818af7b569914_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceRestaurantBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "EcommerceRestaurantBundle::base.html.twig" %}*/
/* */
/* {% block le_contenu %}*/
/* */
/* {% endblock %}*/
/* */
/* */
