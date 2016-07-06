<?php

/* EcommerceBoutiqueBundle::base.html.twig */
class __TwigTemplate_878bdcf7498078002b1138fbaef5b8e25ff2ae646d6b28fa1f3e95dafa7751aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 1);
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
        $__internal_f3709de69fa35220cb9a15d6ee7c228ca820ede0a9c2c88fa55cede58f00c12d = $this->env->getExtension("native_profiler");
        $__internal_f3709de69fa35220cb9a15d6ee7c228ca820ede0a9c2c88fa55cede58f00c12d->enter($__internal_f3709de69fa35220cb9a15d6ee7c228ca820ede0a9c2c88fa55cede58f00c12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3709de69fa35220cb9a15d6ee7c228ca820ede0a9c2c88fa55cede58f00c12d->leave($__internal_f3709de69fa35220cb9a15d6ee7c228ca820ede0a9c2c88fa55cede58f00c12d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_098263985cea488ddefe83db1defc64220875937584d200656fa9cac491cb8f0 = $this->env->getExtension("native_profiler");
        $__internal_098263985cea488ddefe83db1defc64220875937584d200656fa9cac491cb8f0->enter($__internal_098263985cea488ddefe83db1defc64220875937584d200656fa9cac491cb8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_098263985cea488ddefe83db1defc64220875937584d200656fa9cac491cb8f0->leave($__internal_098263985cea488ddefe83db1defc64220875937584d200656fa9cac491cb8f0_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
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
