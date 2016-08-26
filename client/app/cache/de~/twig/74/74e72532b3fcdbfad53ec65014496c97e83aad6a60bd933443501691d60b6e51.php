<?php

/* EcommerceRestaurantBundle::base.html.twig */
class __TwigTemplate_58113008c6bba108ddf6730aa86170951767beb1a2a971e87e13621e84cc1580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceRestaurantBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'barre_location' => array($this, 'block_barre_location'),
            'menu_nav' => array($this, 'block_menu_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1355122b7dde196d6f1fc8b17813c910dfaf11db4953293530418a88402435f = $this->env->getExtension("native_profiler");
        $__internal_e1355122b7dde196d6f1fc8b17813c910dfaf11db4953293530418a88402435f->enter($__internal_e1355122b7dde196d6f1fc8b17813c910dfaf11db4953293530418a88402435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceRestaurantBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1355122b7dde196d6f1fc8b17813c910dfaf11db4953293530418a88402435f->leave($__internal_e1355122b7dde196d6f1fc8b17813c910dfaf11db4953293530418a88402435f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6b49155d12b594bdff933eeac93abe02231a97eed9fbf7b4c693bb024b89622 = $this->env->getExtension("native_profiler");
        $__internal_c6b49155d12b594bdff933eeac93abe02231a97eed9fbf7b4c693bb024b89622->enter($__internal_c6b49155d12b594bdff933eeac93abe02231a97eed9fbf7b4c693bb024b89622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Restaurant:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_c6b49155d12b594bdff933eeac93abe02231a97eed9fbf7b4c693bb024b89622->leave($__internal_c6b49155d12b594bdff933eeac93abe02231a97eed9fbf7b4c693bb024b89622_prof);

    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_df924692424682fc8371600881cf72728c588bfb404d88d852641cb8cdfe816b = $this->env->getExtension("native_profiler");
        $__internal_df924692424682fc8371600881cf72728c588bfb404d88d852641cb8cdfe816b->enter($__internal_df924692424682fc8371600881cf72728c588bfb404d88d852641cb8cdfe816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Restaurant";
        
        $__internal_df924692424682fc8371600881cf72728c588bfb404d88d852641cb8cdfe816b->leave($__internal_df924692424682fc8371600881cf72728c588bfb404d88d852641cb8cdfe816b_prof);

    }

    // line 7
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_0af730a63450e6bd16beb3e26a97fe744df0fbcf523cce72c43b7b698f753cff = $this->env->getExtension("native_profiler");
        $__internal_0af730a63450e6bd16beb3e26a97fe744df0fbcf523cce72c43b7b698f753cff->enter($__internal_0af730a63450e6bd16beb3e26a97fe744df0fbcf523cce72c43b7b698f753cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 8
        echo "
";
        
        $__internal_0af730a63450e6bd16beb3e26a97fe744df0fbcf523cce72c43b7b698f753cff->leave($__internal_0af730a63450e6bd16beb3e26a97fe744df0fbcf523cce72c43b7b698f753cff_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceRestaurantBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  63 => 7,  50 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Restaurant:{{ parent() }} {% endblock %}*/
/* */
/* {% block barre_location %}{{ parent() }}Restaurant{% endblock %}*/
/* */
/* */
/* {% block menu_nav %}*/
/* */
/* {% endblock %}*/
/* */
/* */
