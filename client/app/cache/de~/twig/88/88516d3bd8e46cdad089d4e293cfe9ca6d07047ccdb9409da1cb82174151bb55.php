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
        $__internal_7ff680d55df55a6276e519809798f44385cd881eb60f44bff637d418795d5aa0 = $this->env->getExtension("native_profiler");
        $__internal_7ff680d55df55a6276e519809798f44385cd881eb60f44bff637d418795d5aa0->enter($__internal_7ff680d55df55a6276e519809798f44385cd881eb60f44bff637d418795d5aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff680d55df55a6276e519809798f44385cd881eb60f44bff637d418795d5aa0->leave($__internal_7ff680d55df55a6276e519809798f44385cd881eb60f44bff637d418795d5aa0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6306d0cd42f434271b3bc949939a414e15b09a1822ff082c250ded8f08fde695 = $this->env->getExtension("native_profiler");
        $__internal_6306d0cd42f434271b3bc949939a414e15b09a1822ff082c250ded8f08fde695->enter($__internal_6306d0cd42f434271b3bc949939a414e15b09a1822ff082c250ded8f08fde695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Boutique:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_6306d0cd42f434271b3bc949939a414e15b09a1822ff082c250ded8f08fde695->leave($__internal_6306d0cd42f434271b3bc949939a414e15b09a1822ff082c250ded8f08fde695_prof);

    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_fbfba702cd7b044250d1baf19e90222945c2892599e55ec8b6267b9fca2a6b5a = $this->env->getExtension("native_profiler");
        $__internal_fbfba702cd7b044250d1baf19e90222945c2892599e55ec8b6267b9fca2a6b5a->enter($__internal_fbfba702cd7b044250d1baf19e90222945c2892599e55ec8b6267b9fca2a6b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Boutique";
        
        $__internal_fbfba702cd7b044250d1baf19e90222945c2892599e55ec8b6267b9fca2a6b5a->leave($__internal_fbfba702cd7b044250d1baf19e90222945c2892599e55ec8b6267b9fca2a6b5a_prof);

    }

    // line 6
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_3bd0251804c9fad726592faecba2020afbde16f7f5fa661c9fafbce2619d305a = $this->env->getExtension("native_profiler");
        $__internal_3bd0251804c9fad726592faecba2020afbde16f7f5fa661c9fafbce2619d305a->enter($__internal_3bd0251804c9fad726592faecba2020afbde16f7f5fa661c9fafbce2619d305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 7
        echo "  ";
        $this->loadTemplate("EcommerceBoutiqueBundle::menuBoutique.html.twig", "EcommerceBoutiqueBundle::base.html.twig", 7)->display($context);
        
        $__internal_3bd0251804c9fad726592faecba2020afbde16f7f5fa661c9fafbce2619d305a->leave($__internal_3bd0251804c9fad726592faecba2020afbde16f7f5fa661c9fafbce2619d305a_prof);

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
