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
        $__internal_21d98238580247a2a4340123a64b0e04900026f2ccd3c12b167500990ff5ed0b = $this->env->getExtension("native_profiler");
        $__internal_21d98238580247a2a4340123a64b0e04900026f2ccd3c12b167500990ff5ed0b->enter($__internal_21d98238580247a2a4340123a64b0e04900026f2ccd3c12b167500990ff5ed0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Produit:ajoutProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d98238580247a2a4340123a64b0e04900026f2ccd3c12b167500990ff5ed0b->leave($__internal_21d98238580247a2a4340123a64b0e04900026f2ccd3c12b167500990ff5ed0b_prof);

    }

    // line 3
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_169ffc359a13491bcddbc6cab564c18ae72f5a668f343b90e77f2264d4cdd556 = $this->env->getExtension("native_profiler");
        $__internal_169ffc359a13491bcddbc6cab564c18ae72f5a668f343b90e77f2264d4cdd556->enter($__internal_169ffc359a13491bcddbc6cab564c18ae72f5a668f343b90e77f2264d4cdd556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "<span>|</span>Nouveau Produit";
        
        $__internal_169ffc359a13491bcddbc6cab564c18ae72f5a668f343b90e77f2264d4cdd556->leave($__internal_169ffc359a13491bcddbc6cab564c18ae72f5a668f343b90e77f2264d4cdd556_prof);

    }

    // line 5
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_7a2b7ef1a3598ea6b08815b5d67244ad456a9021117e1f3ee6a3461308521a60 = $this->env->getExtension("native_profiler");
        $__internal_7a2b7ef1a3598ea6b08815b5d67244ad456a9021117e1f3ee6a3461308521a60->enter($__internal_7a2b7ef1a3598ea6b08815b5d67244ad456a9021117e1f3ee6a3461308521a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
        
        $__internal_7a2b7ef1a3598ea6b08815b5d67244ad456a9021117e1f3ee6a3461308521a60->leave($__internal_7a2b7ef1a3598ea6b08815b5d67244ad456a9021117e1f3ee6a3461308521a60_prof);

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
