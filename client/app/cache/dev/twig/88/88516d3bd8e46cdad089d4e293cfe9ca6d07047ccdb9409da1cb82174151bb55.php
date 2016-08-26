<?php

/* EcommerceBoutiqueBundle::base.html.twig */
class __TwigTemplate_a477471079469a11ff0426fe74d006c4080734d804910b6e955b03d6137b520b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 1);
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
        $__internal_eb3606f2bb04c3f0e2cbd175cb71213e6a6b1e31f616308636c3713cf4819d55 = $this->env->getExtension("native_profiler");
        $__internal_eb3606f2bb04c3f0e2cbd175cb71213e6a6b1e31f616308636c3713cf4819d55->enter($__internal_eb3606f2bb04c3f0e2cbd175cb71213e6a6b1e31f616308636c3713cf4819d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3606f2bb04c3f0e2cbd175cb71213e6a6b1e31f616308636c3713cf4819d55->leave($__internal_eb3606f2bb04c3f0e2cbd175cb71213e6a6b1e31f616308636c3713cf4819d55_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ef890c02df9ddcf865bf844d1b4c3bfed48f5f6fe59c6c64498c6395fcd0306 = $this->env->getExtension("native_profiler");
        $__internal_0ef890c02df9ddcf865bf844d1b4c3bfed48f5f6fe59c6c64498c6395fcd0306->enter($__internal_0ef890c02df9ddcf865bf844d1b4c3bfed48f5f6fe59c6c64498c6395fcd0306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_0ef890c02df9ddcf865bf844d1b4c3bfed48f5f6fe59c6c64498c6395fcd0306->leave($__internal_0ef890c02df9ddcf865bf844d1b4c3bfed48f5f6fe59c6c64498c6395fcd0306_prof);

    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_d2c2669a8823de70d6923f1fbf8e9235e7b7346df2bd181d5927bc3f68f1b665 = $this->env->getExtension("native_profiler");
        $__internal_d2c2669a8823de70d6923f1fbf8e9235e7b7346df2bd181d5927bc3f68f1b665->enter($__internal_d2c2669a8823de70d6923f1fbf8e9235e7b7346df2bd181d5927bc3f68f1b665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Boutique";
        
        $__internal_d2c2669a8823de70d6923f1fbf8e9235e7b7346df2bd181d5927bc3f68f1b665->leave($__internal_d2c2669a8823de70d6923f1fbf8e9235e7b7346df2bd181d5927bc3f68f1b665_prof);

    }

    // line 6
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_53135c6240cbe5ab8fb47de07555b7d64a50737251c9d0cbffb117a048a06408 = $this->env->getExtension("native_profiler");
        $__internal_53135c6240cbe5ab8fb47de07555b7d64a50737251c9d0cbffb117a048a06408->enter($__internal_53135c6240cbe5ab8fb47de07555b7d64a50737251c9d0cbffb117a048a06408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 7
        echo "  ";
        $this->loadTemplate("EcommerceBoutiqueBundle::menuBoutique.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 7)->display($context);
        
        $__internal_53135c6240cbe5ab8fb47de07555b7d64a50737251c9d0cbffb117a048a06408->leave($__internal_53135c6240cbe5ab8fb47de07555b7d64a50737251c9d0cbffb117a048a06408_prof);

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
        return array (  69 => 7,  63 => 6,  50 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}Boutique:{{ parent() }} {% endblock %}*/
/* */
/* {% block barre_location %}{{ parent() }}Boutique{% endblock %}*/
/* */
/* {% block menu_nav %}*/
/*   {% include "EcommerceBoutiqueBundle::menuBoutique.html.twig" %}*/
/* {% endblock %}*/
/* */
/* */
