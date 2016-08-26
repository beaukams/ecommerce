<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9ac3d45964921a347f679e7b85c1e8f58e7dc007c1ea39a9f6abd768d207cad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fe0f1c934d06b09ab10a41f619c26fa587b7f77f23699ac3cedb252b75dd752 = $this->env->getExtension("native_profiler");
        $__internal_2fe0f1c934d06b09ab10a41f619c26fa587b7f77f23699ac3cedb252b75dd752->enter($__internal_2fe0f1c934d06b09ab10a41f619c26fa587b7f77f23699ac3cedb252b75dd752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2fe0f1c934d06b09ab10a41f619c26fa587b7f77f23699ac3cedb252b75dd752->leave($__internal_2fe0f1c934d06b09ab10a41f619c26fa587b7f77f23699ac3cedb252b75dd752_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af046d87d8045b8940cf5b4f526d5b6f06ccca168e30b508ce99b288788f4523 = $this->env->getExtension("native_profiler");
        $__internal_af046d87d8045b8940cf5b4f526d5b6f06ccca168e30b508ce99b288788f4523->enter($__internal_af046d87d8045b8940cf5b4f526d5b6f06ccca168e30b508ce99b288788f4523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_af046d87d8045b8940cf5b4f526d5b6f06ccca168e30b508ce99b288788f4523->leave($__internal_af046d87d8045b8940cf5b4f526d5b6f06ccca168e30b508ce99b288788f4523_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
