<?php

/* ::casa.html.twig */
class __TwigTemplate_ee97df4b2b651925e6b80c446d66c041514692133467d6dc9086244173d44c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::casa.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'barre_menu' => array($this, 'block_barre_menu'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d5c9b226a8a14d0d5f04bd01124d867c2b9f14193f36616f70489e801c39f05 = $this->env->getExtension("native_profiler");
        $__internal_3d5c9b226a8a14d0d5f04bd01124d867c2b9f14193f36616f70489e801c39f05->enter($__internal_3d5c9b226a8a14d0d5f04bd01124d867c2b9f14193f36616f70489e801c39f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::casa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d5c9b226a8a14d0d5f04bd01124d867c2b9f14193f36616f70489e801c39f05->leave($__internal_3d5c9b226a8a14d0d5f04bd01124d867c2b9f14193f36616f70489e801c39f05_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebaeb0ca804c49cebeea2820c096fe9f4f5ae067c68236011b5f1b8fd3f9da79 = $this->env->getExtension("native_profiler");
        $__internal_ebaeb0ca804c49cebeea2820c096fe9f4f5ae067c68236011b5f1b8fd3f9da79->enter($__internal_ebaeb0ca804c49cebeea2820c096fe9f4f5ae067c68236011b5f1b8fd3f9da79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Casamance";
        
        $__internal_ebaeb0ca804c49cebeea2820c096fe9f4f5ae067c68236011b5f1b8fd3f9da79->leave($__internal_ebaeb0ca804c49cebeea2820c096fe9f4f5ae067c68236011b5f1b8fd3f9da79_prof);

    }

    // line 4
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_60ceebe89c973a8730072fa2113a71de90bdccbafa54622d6619c7432785b3b4 = $this->env->getExtension("native_profiler");
        $__internal_60ceebe89c973a8730072fa2113a71de90bdccbafa54622d6619c7432785b3b4->enter($__internal_60ceebe89c973a8730072fa2113a71de90bdccbafa54622d6619c7432785b3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_60ceebe89c973a8730072fa2113a71de90bdccbafa54622d6619c7432785b3b4->leave($__internal_60ceebe89c973a8730072fa2113a71de90bdccbafa54622d6619c7432785b3b4_prof);

    }

    // line 7
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_f2373de41749342f7afe770558bf57efd77d03db7df22e49628af4e66daaf1dc = $this->env->getExtension("native_profiler");
        $__internal_f2373de41749342f7afe770558bf57efd77d03db7df22e49628af4e66daaf1dc->enter($__internal_f2373de41749342f7afe770558bf57efd77d03db7df22e49628af4e66daaf1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 8
        echo "\tllk
";
        
        $__internal_f2373de41749342f7afe770558bf57efd77d03db7df22e49628af4e66daaf1dc->leave($__internal_f2373de41749342f7afe770558bf57efd77d03db7df22e49628af4e66daaf1dc_prof);

    }

    // line 11
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_664183359365c34fbbdfa97307ef010aa7c320655dcc0a6438389ff3ce23c22b = $this->env->getExtension("native_profiler");
        $__internal_664183359365c34fbbdfa97307ef010aa7c320655dcc0a6438389ff3ce23c22b->enter($__internal_664183359365c34fbbdfa97307ef010aa7c320655dcc0a6438389ff3ce23c22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 12
        echo "\tlkk
";
        
        $__internal_664183359365c34fbbdfa97307ef010aa7c320655dcc0a6438389ff3ce23c22b->leave($__internal_664183359365c34fbbdfa97307ef010aa7c320655dcc0a6438389ff3ce23c22b_prof);

    }

    public function getTemplateName()
    {
        return "::casa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  74 => 11,  66 => 8,  60 => 7,  49 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}La Casamance{% endblock %}*/
/* */
/* {% block barre_menu %}*/
/* {% endblock %}*/
/* */
/* {% block menu_nav %}*/
/* 	llk*/
/* {% endblock %}*/
/* */
/* {% block body_content %}*/
/* 	lkk*/
/* {% endblock %}*/
