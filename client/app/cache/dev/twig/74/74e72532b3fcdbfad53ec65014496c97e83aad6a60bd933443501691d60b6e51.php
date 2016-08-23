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
        $__internal_d2773a9b47e312d0efcb1af304a2fad2c206968f9708aa64ce9dabf46fbfec85 = $this->env->getExtension("native_profiler");
        $__internal_d2773a9b47e312d0efcb1af304a2fad2c206968f9708aa64ce9dabf46fbfec85->enter($__internal_d2773a9b47e312d0efcb1af304a2fad2c206968f9708aa64ce9dabf46fbfec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceRestaurantBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2773a9b47e312d0efcb1af304a2fad2c206968f9708aa64ce9dabf46fbfec85->leave($__internal_d2773a9b47e312d0efcb1af304a2fad2c206968f9708aa64ce9dabf46fbfec85_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a10d43ab6a8e24455becb1e8adf838112dcc819939e47a8ca7b833a83e39be9 = $this->env->getExtension("native_profiler");
        $__internal_2a10d43ab6a8e24455becb1e8adf838112dcc819939e47a8ca7b833a83e39be9->enter($__internal_2a10d43ab6a8e24455becb1e8adf838112dcc819939e47a8ca7b833a83e39be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Restaurant:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_2a10d43ab6a8e24455becb1e8adf838112dcc819939e47a8ca7b833a83e39be9->leave($__internal_2a10d43ab6a8e24455becb1e8adf838112dcc819939e47a8ca7b833a83e39be9_prof);

    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_06f67a490e59ee1913cf3dae6f67e7adc92db7892530c16f01552c8a76e4a5d4 = $this->env->getExtension("native_profiler");
        $__internal_06f67a490e59ee1913cf3dae6f67e7adc92db7892530c16f01552c8a76e4a5d4->enter($__internal_06f67a490e59ee1913cf3dae6f67e7adc92db7892530c16f01552c8a76e4a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Restaurant";
        
        $__internal_06f67a490e59ee1913cf3dae6f67e7adc92db7892530c16f01552c8a76e4a5d4->leave($__internal_06f67a490e59ee1913cf3dae6f67e7adc92db7892530c16f01552c8a76e4a5d4_prof);

    }

    // line 7
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_80b5f387245fc5fe76b8057404138a63cc9350c2097c4dd96c908bd5ec561dd6 = $this->env->getExtension("native_profiler");
        $__internal_80b5f387245fc5fe76b8057404138a63cc9350c2097c4dd96c908bd5ec561dd6->enter($__internal_80b5f387245fc5fe76b8057404138a63cc9350c2097c4dd96c908bd5ec561dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 8
        echo "
";
        
        $__internal_80b5f387245fc5fe76b8057404138a63cc9350c2097c4dd96c908bd5ec561dd6->leave($__internal_80b5f387245fc5fe76b8057404138a63cc9350c2097c4dd96c908bd5ec561dd6_prof);

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
