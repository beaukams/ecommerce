<?php

/* EcommerceUserBundle::base.html.twig */
class __TwigTemplate_ab450cccd886d251fc30f5dfaca0c6ac9be5b51db608321e7431a471c42ec30b extends Twig_Template
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
        $__internal_e8177a73b132097d43cd32a3e6ab46a541635ef4bdddc1f00a328bfb5c4ccfe3 = $this->env->getExtension("native_profiler");
        $__internal_e8177a73b132097d43cd32a3e6ab46a541635ef4bdddc1f00a328bfb5c4ccfe3->enter($__internal_e8177a73b132097d43cd32a3e6ab46a541635ef4bdddc1f00a328bfb5c4ccfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8177a73b132097d43cd32a3e6ab46a541635ef4bdddc1f00a328bfb5c4ccfe3->leave($__internal_e8177a73b132097d43cd32a3e6ab46a541635ef4bdddc1f00a328bfb5c4ccfe3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8518ce0030fbd4f263715aaf2b54e940b76a367ba65f94351d682d0f6d95da61 = $this->env->getExtension("native_profiler");
        $__internal_8518ce0030fbd4f263715aaf2b54e940b76a367ba65f94351d682d0f6d95da61->enter($__internal_8518ce0030fbd4f263715aaf2b54e940b76a367ba65f94351d682d0f6d95da61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_8518ce0030fbd4f263715aaf2b54e940b76a367ba65f94351d682d0f6d95da61->leave($__internal_8518ce0030fbd4f263715aaf2b54e940b76a367ba65f94351d682d0f6d95da61_prof);

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
