<?php

/* EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig */
class __TwigTemplate_b88e466f918f98d77b566476247ed776e16588b2dcf86c26ac8331c83d8d611d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig", 1);
        $this->blocks = array(
            'barre_location' => array($this, 'block_barre_location'),
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7075bfdde082ec0029c344a85b220917c529e0191944b3f675e83e0f7de403d1 = $this->env->getExtension("native_profiler");
        $__internal_7075bfdde082ec0029c344a85b220917c529e0191944b3f675e83e0f7de403d1->enter($__internal_7075bfdde082ec0029c344a85b220917c529e0191944b3f675e83e0f7de403d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7075bfdde082ec0029c344a85b220917c529e0191944b3f675e83e0f7de403d1->leave($__internal_7075bfdde082ec0029c344a85b220917c529e0191944b3f675e83e0f7de403d1_prof);

    }

    // line 3
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_0515772a714419e1bac01e2189313e932ca5ae7d6b5d8ee3a80cd6ab09ee44b9 = $this->env->getExtension("native_profiler");
        $__internal_0515772a714419e1bac01e2189313e932ca5ae7d6b5d8ee3a80cd6ab09ee44b9->enter($__internal_0515772a714419e1bac01e2189313e932ca5ae7d6b5d8ee3a80cd6ab09ee44b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "<span>|</span>Nouveau Produit";
        
        $__internal_0515772a714419e1bac01e2189313e932ca5ae7d6b5d8ee3a80cd6ab09ee44b9->leave($__internal_0515772a714419e1bac01e2189313e932ca5ae7d6b5d8ee3a80cd6ab09ee44b9_prof);

    }

    // line 5
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_7bacd0dc94349420e3c202acfc89fcc567b26a452301dc9613751447d00a5f29 = $this->env->getExtension("native_profiler");
        $__internal_7bacd0dc94349420e3c202acfc89fcc567b26a452301dc9613751447d00a5f29->enter($__internal_7bacd0dc94349420e3c202acfc89fcc567b26a452301dc9613751447d00a5f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 6
        echo "\t<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ajouteProduit");
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
        
        $__internal_7bacd0dc94349420e3c202acfc89fcc567b26a452301dc9613751447d00a5f29->leave($__internal_7bacd0dc94349420e3c202acfc89fcc567b26a452301dc9613751447d00a5f29_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig";
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
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
/* */
/* {% block barre_location %}{{ parent() }}<span>|</span>Nouveau Produit{% endblock %}*/
/* */
/* {% block le_contenu %}*/
/* 	<form method="POST" action="{{ path('ajouteProduit') }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
