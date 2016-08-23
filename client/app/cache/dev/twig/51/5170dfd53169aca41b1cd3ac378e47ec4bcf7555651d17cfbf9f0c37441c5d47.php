<?php

/* EcommerceRestaurantBundle::index.html.twig */
class __TwigTemplate_2e9d0c041fa567e6a2f40357511bf1772a45aa02866523f33c0afb237ffd84a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceRestaurantBundle::base.html.twig", "EcommerceRestaurantBundle::index.html.twig", 1);
        $this->blocks = array(
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceRestaurantBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec742e9721caed0dfafbdba572c612e77e7637db4090170b507d6a6056591dee = $this->env->getExtension("native_profiler");
        $__internal_ec742e9721caed0dfafbdba572c612e77e7637db4090170b507d6a6056591dee->enter($__internal_ec742e9721caed0dfafbdba572c612e77e7637db4090170b507d6a6056591dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceRestaurantBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec742e9721caed0dfafbdba572c612e77e7637db4090170b507d6a6056591dee->leave($__internal_ec742e9721caed0dfafbdba572c612e77e7637db4090170b507d6a6056591dee_prof);

    }

    // line 3
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_4e6e6a82d9f661d473d07677a646d7ae8395d09839501dc5adb6f50db9cada59 = $this->env->getExtension("native_profiler");
        $__internal_4e6e6a82d9f661d473d07677a646d7ae8395d09839501dc5adb6f50db9cada59->enter($__internal_4e6e6a82d9f661d473d07677a646d7ae8395d09839501dc5adb6f50db9cada59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 4
        echo "
";
        
        $__internal_4e6e6a82d9f661d473d07677a646d7ae8395d09839501dc5adb6f50db9cada59->leave($__internal_4e6e6a82d9f661d473d07677a646d7ae8395d09839501dc5adb6f50db9cada59_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceRestaurantBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "EcommerceRestaurantBundle::base.html.twig" %}*/
/* */
/* {% block le_contenu %}*/
/* */
/* {% endblock %}*/
/* */
/* */
