<?php

/* DHotelBundle::base.html.twig */
class __TwigTemplate_20c878c9889c46d918cb92482e1ef9b980251432981e54f08977d0c9ab335709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DHotelBundle::base.html.twig", 1);
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
        $__internal_e8bc7b7dda3cd481f794276142bda03c5d095a3030b2461d7dff90b31e35ca51 = $this->env->getExtension("native_profiler");
        $__internal_e8bc7b7dda3cd481f794276142bda03c5d095a3030b2461d7dff90b31e35ca51->enter($__internal_e8bc7b7dda3cd481f794276142bda03c5d095a3030b2461d7dff90b31e35ca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHotelBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8bc7b7dda3cd481f794276142bda03c5d095a3030b2461d7dff90b31e35ca51->leave($__internal_e8bc7b7dda3cd481f794276142bda03c5d095a3030b2461d7dff90b31e35ca51_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1407d2cd3c872c0107dfcfa996457ed7f22e375b977d7d292ef0f42ee8aaab1f = $this->env->getExtension("native_profiler");
        $__internal_1407d2cd3c872c0107dfcfa996457ed7f22e375b977d7d292ef0f42ee8aaab1f->enter($__internal_1407d2cd3c872c0107dfcfa996457ed7f22e375b977d7d292ef0f42ee8aaab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_1407d2cd3c872c0107dfcfa996457ed7f22e375b977d7d292ef0f42ee8aaab1f->leave($__internal_1407d2cd3c872c0107dfcfa996457ed7f22e375b977d7d292ef0f42ee8aaab1f_prof);

    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_6d3db9ff7a0354185af4474b47731a87280e625d0d995a73621fcef1dd8ec738 = $this->env->getExtension("native_profiler");
        $__internal_6d3db9ff7a0354185af4474b47731a87280e625d0d995a73621fcef1dd8ec738->enter($__internal_6d3db9ff7a0354185af4474b47731a87280e625d0d995a73621fcef1dd8ec738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Hotel";
        
        $__internal_6d3db9ff7a0354185af4474b47731a87280e625d0d995a73621fcef1dd8ec738->leave($__internal_6d3db9ff7a0354185af4474b47731a87280e625d0d995a73621fcef1dd8ec738_prof);

    }

    // line 6
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_18a09c33afd2f860a627763550f9431d15fd379ff329f4c975310dbd45b5d3b2 = $this->env->getExtension("native_profiler");
        $__internal_18a09c33afd2f860a627763550f9431d15fd379ff329f4c975310dbd45b5d3b2->enter($__internal_18a09c33afd2f860a627763550f9431d15fd379ff329f4c975310dbd45b5d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 7
        echo "  ";
        $this->loadTemplate("DHotelBundle::menuHotel.html.twig", "DHotelBundle::base.html.twig", 7)->display($context);
        
        $__internal_18a09c33afd2f860a627763550f9431d15fd379ff329f4c975310dbd45b5d3b2->leave($__internal_18a09c33afd2f860a627763550f9431d15fd379ff329f4c975310dbd45b5d3b2_prof);

    }

    public function getTemplateName()
    {
        return "DHotelBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  63 => 6,  50 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Hotel:{{ parent() }} {% endblock %}*/
/* */
/* {% block barre_location %}{{ parent() }}Hotel{% endblock %}*/
/* */
/* {% block menu_nav %}*/
/*   {% include "DHotelBundle::menuHotel.html.twig" %}*/
/* {% endblock %}*/
