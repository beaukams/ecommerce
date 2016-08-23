<?php

/* EcommerceUserBundle:User:ajoutUser.html.twig */
class __TwigTemplate_71b25ddf3d05009c5136829fb499102c52582d56d83609241ee51b1968afc8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceProduitBundle::base.html.twig", "EcommerceUserBundle:User:ajoutUser.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceProduitBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c053e6faff014364075b985c0725dca928e958e20e82341730145c24effd07 = $this->env->getExtension("native_profiler");
        $__internal_46c053e6faff014364075b985c0725dca928e958e20e82341730145c24effd07->enter($__internal_46c053e6faff014364075b985c0725dca928e958e20e82341730145c24effd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle:User:ajoutUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c053e6faff014364075b985c0725dca928e958e20e82341730145c24effd07->leave($__internal_46c053e6faff014364075b985c0725dca928e958e20e82341730145c24effd07_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_53ee69f54512ede372aec87839a3ae87a770ba2fad20a435448e25941fcae765 = $this->env->getExtension("native_profiler");
        $__internal_53ee69f54512ede372aec87839a3ae87a770ba2fad20a435448e25941fcae765->enter($__internal_53ee69f54512ede372aec87839a3ae87a770ba2fad20a435448e25941fcae765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ajouteProduit");
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type='submit' value='Valider'/>
\t</form>
";
        
        $__internal_53ee69f54512ede372aec87839a3ae87a770ba2fad20a435448e25941fcae765->leave($__internal_53ee69f54512ede372aec87839a3ae87a770ba2fad20a435448e25941fcae765_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle:User:ajoutUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "EcommerceProduitBundle::base.html.twig" %}*/
/* {% block body %}*/
/* 	<form method="POST" action="{{ path('ajouteProduit') }} {{ form_enctype(form) }}">*/
/* 		{{ form_widget(form) }}*/
/* 		<input type='submit' value='Valider'/>*/
/* 	</form>*/
/* {% endblock %}*/
/* */
