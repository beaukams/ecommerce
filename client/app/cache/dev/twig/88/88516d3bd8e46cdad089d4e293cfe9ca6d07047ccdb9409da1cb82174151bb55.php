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
        $__internal_4e02c009e695cc169b9cfdc58d56fd9d20b2f1dc84461c37bb80f4f7352e0011 = $this->env->getExtension("native_profiler");
        $__internal_4e02c009e695cc169b9cfdc58d56fd9d20b2f1dc84461c37bb80f4f7352e0011->enter($__internal_4e02c009e695cc169b9cfdc58d56fd9d20b2f1dc84461c37bb80f4f7352e0011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e02c009e695cc169b9cfdc58d56fd9d20b2f1dc84461c37bb80f4f7352e0011->leave($__internal_4e02c009e695cc169b9cfdc58d56fd9d20b2f1dc84461c37bb80f4f7352e0011_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a93978c868b555b4729165938f6730cd98ca7bc47dc032e319ca7649a0497ff1 = $this->env->getExtension("native_profiler");
        $__internal_a93978c868b555b4729165938f6730cd98ca7bc47dc032e319ca7649a0497ff1->enter($__internal_a93978c868b555b4729165938f6730cd98ca7bc47dc032e319ca7649a0497ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_a93978c868b555b4729165938f6730cd98ca7bc47dc032e319ca7649a0497ff1->leave($__internal_a93978c868b555b4729165938f6730cd98ca7bc47dc032e319ca7649a0497ff1_prof);

    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_ae5d8d97ddfaef6114209467b1f9f045831e841db82c33741f7e77c1beb63ef0 = $this->env->getExtension("native_profiler");
        $__internal_ae5d8d97ddfaef6114209467b1f9f045831e841db82c33741f7e77c1beb63ef0->enter($__internal_ae5d8d97ddfaef6114209467b1f9f045831e841db82c33741f7e77c1beb63ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Boutique";
        
        $__internal_ae5d8d97ddfaef6114209467b1f9f045831e841db82c33741f7e77c1beb63ef0->leave($__internal_ae5d8d97ddfaef6114209467b1f9f045831e841db82c33741f7e77c1beb63ef0_prof);

    }

    // line 6
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_8e0ad48f4baa04f0d7e9d93257199bd4f7434c138b4aea187947b01bc59ca700 = $this->env->getExtension("native_profiler");
        $__internal_8e0ad48f4baa04f0d7e9d93257199bd4f7434c138b4aea187947b01bc59ca700->enter($__internal_8e0ad48f4baa04f0d7e9d93257199bd4f7434c138b4aea187947b01bc59ca700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 7
        echo "  ";
        $this->loadTemplate("EcommerceBoutiqueBundle::menuBoutique.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 7)->display($context);
        
        $__internal_8e0ad48f4baa04f0d7e9d93257199bd4f7434c138b4aea187947b01bc59ca700->leave($__internal_8e0ad48f4baa04f0d7e9d93257199bd4f7434c138b4aea187947b01bc59ca700_prof);

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
