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
        $__internal_ae493f05567c7d8044c9878626df6441af04b2507b02dc2cfc20f85bd4f89706 = $this->env->getExtension("native_profiler");
        $__internal_ae493f05567c7d8044c9878626df6441af04b2507b02dc2cfc20f85bd4f89706->enter($__internal_ae493f05567c7d8044c9878626df6441af04b2507b02dc2cfc20f85bd4f89706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceUserBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae493f05567c7d8044c9878626df6441af04b2507b02dc2cfc20f85bd4f89706->leave($__internal_ae493f05567c7d8044c9878626df6441af04b2507b02dc2cfc20f85bd4f89706_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b1ed3b7f1c8be6fb62cef8ab6a5f5c2cd654c591149d213539ed59e983eda95 = $this->env->getExtension("native_profiler");
        $__internal_9b1ed3b7f1c8be6fb62cef8ab6a5f5c2cd654c591149d213539ed59e983eda95->enter($__internal_9b1ed3b7f1c8be6fb62cef8ab6a5f5c2cd654c591149d213539ed59e983eda95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Produit: ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_9b1ed3b7f1c8be6fb62cef8ab6a5f5c2cd654c591149d213539ed59e983eda95->leave($__internal_9b1ed3b7f1c8be6fb62cef8ab6a5f5c2cd654c591149d213539ed59e983eda95_prof);

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
