<?php

/* EcommerceUserBundle::base.html.twig */
class __TwigTemplate_bf32b4a8c4abb44dd22935242b3c93146254fe28de3ab9f4cf0e42274d9efb37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceUserBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c7419880173038ce88dcd25080b27262fae0f72bca7b39fb4b0f0c913c3ab83 = $this->env->getExtension("native_profiler");
        $__internal_9c7419880173038ce88dcd25080b27262fae0f72bca7b39fb4b0f0c913c3ab83->enter($__internal_9c7419880173038ce88dcd25080b27262fae0f72bca7b39fb4b0f0c913c3ab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c7419880173038ce88dcd25080b27262fae0f72bca7b39fb4b0f0c913c3ab83->leave($__internal_9c7419880173038ce88dcd25080b27262fae0f72bca7b39fb4b0f0c913c3ab83_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_42c9713c6f01114d107d10aa5c5ace995c4604c05f16d5c852f14cf93ded0a9e = $this->env->getExtension("native_profiler");
        $__internal_42c9713c6f01114d107d10aa5c5ace995c4604c05f16d5c852f14cf93ded0a9e->enter($__internal_42c9713c6f01114d107d10aa5c5ace995c4604c05f16d5c852f14cf93ded0a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_42c9713c6f01114d107d10aa5c5ace995c4604c05f16d5c852f14cf93ded0a9e->leave($__internal_42c9713c6f01114d107d10aa5c5ace995c4604c05f16d5c852f14cf93ded0a9e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceUserBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Produit: {{ parent() }} {% endblock %}*/
