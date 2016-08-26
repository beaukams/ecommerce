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
        $__internal_c7e68d8e0fbd32443f456ef3c3d6a2ae2fb40f3e0f8da84b1e1e395f56e67b98 = $this->env->getExtension("native_profiler");
        $__internal_c7e68d8e0fbd32443f456ef3c3d6a2ae2fb40f3e0f8da84b1e1e395f56e67b98->enter($__internal_c7e68d8e0fbd32443f456ef3c3d6a2ae2fb40f3e0f8da84b1e1e395f56e67b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7e68d8e0fbd32443f456ef3c3d6a2ae2fb40f3e0f8da84b1e1e395f56e67b98->leave($__internal_c7e68d8e0fbd32443f456ef3c3d6a2ae2fb40f3e0f8da84b1e1e395f56e67b98_prof);

    }

    // line 3
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_441d17bedd506a0128fa3625690292c26fed2f4bb65905591296c8b044be4d6c = $this->env->getExtension("native_profiler");
        $__internal_441d17bedd506a0128fa3625690292c26fed2f4bb65905591296c8b044be4d6c->enter($__internal_441d17bedd506a0128fa3625690292c26fed2f4bb65905591296c8b044be4d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "<span>|</span>Nouveau Produit";
        
        $__internal_441d17bedd506a0128fa3625690292c26fed2f4bb65905591296c8b044be4d6c->leave($__internal_441d17bedd506a0128fa3625690292c26fed2f4bb65905591296c8b044be4d6c_prof);

    }

    // line 5
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_fa15f1632ba346b2264f0f97415394c9dbe87a8cf06d6a579fe17870d568ac12 = $this->env->getExtension("native_profiler");
        $__internal_fa15f1632ba346b2264f0f97415394c9dbe87a8cf06d6a579fe17870d568ac12->enter($__internal_fa15f1632ba346b2264f0f97415394c9dbe87a8cf06d6a579fe17870d568ac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_fa15f1632ba346b2264f0f97415394c9dbe87a8cf06d6a579fe17870d568ac12->leave($__internal_fa15f1632ba346b2264f0f97415394c9dbe87a8cf06d6a579fe17870d568ac12_prof);

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
