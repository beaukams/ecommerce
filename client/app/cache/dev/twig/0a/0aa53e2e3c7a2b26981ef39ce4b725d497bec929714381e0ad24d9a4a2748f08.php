<?php

/* DHotelBundle:DHotel:ajoutHotel.html.twig */
class __TwigTemplate_ce55d9ab8d1c1ea183c17f71610773e5a828b00a0ee85c287875ad330f05bd02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DHotelBundle::base.html.twig", "DHotelBundle:DHotel:ajoutHotel.html.twig", 1);
        $this->blocks = array(
            'barre_location' => array($this, 'block_barre_location'),
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DHotelBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcb7242769f4d32a59c125a1b1df08daa4f251b55166d6036369ae45e3024717 = $this->env->getExtension("native_profiler");
        $__internal_dcb7242769f4d32a59c125a1b1df08daa4f251b55166d6036369ae45e3024717->enter($__internal_dcb7242769f4d32a59c125a1b1df08daa4f251b55166d6036369ae45e3024717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHotelBundle:DHotel:ajoutHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb7242769f4d32a59c125a1b1df08daa4f251b55166d6036369ae45e3024717->leave($__internal_dcb7242769f4d32a59c125a1b1df08daa4f251b55166d6036369ae45e3024717_prof);

    }

    // line 3
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_07008f9f986f32fd1aacc30d2b2f4d535123182e20684d52799a21a5bb2b7240 = $this->env->getExtension("native_profiler");
        $__internal_07008f9f986f32fd1aacc30d2b2f4d535123182e20684d52799a21a5bb2b7240->enter($__internal_07008f9f986f32fd1aacc30d2b2f4d535123182e20684d52799a21a5bb2b7240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "<span>|</span>Nouveau Hotel";
        
        $__internal_07008f9f986f32fd1aacc30d2b2f4d535123182e20684d52799a21a5bb2b7240->leave($__internal_07008f9f986f32fd1aacc30d2b2f4d535123182e20684d52799a21a5bb2b7240_prof);

    }

    // line 5
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_3152d2e4f8db2729c1768b5e1bd66409d73430b1255569426318e9c3516864c2 = $this->env->getExtension("native_profiler");
        $__internal_3152d2e4f8db2729c1768b5e1bd66409d73430b1255569426318e9c3516864c2->enter($__internal_3152d2e4f8db2729c1768b5e1bd66409d73430b1255569426318e9c3516864c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 6
        echo "\t<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ajoutehotel");
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "\">
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type='submit' value='Valider'/>
\t</form>
";
        
        $__internal_3152d2e4f8db2729c1768b5e1bd66409d73430b1255569426318e9c3516864c2->leave($__internal_3152d2e4f8db2729c1768b5e1bd66409d73430b1255569426318e9c3516864c2_prof);

    }

    public function getTemplateName()
    {
        return "DHotelBundle:DHotel:ajoutHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "DHotelBundle::base.html.twig" %}*/
/* */
/* {% block barre_location %}{{ parent() }}<span>|</span>Nouveau Hotel{% endblock %}*/
/* */
/* {% block le_contenu %}*/
/* 	<form method="POST" action="{{ path('ajoutehotel') }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
