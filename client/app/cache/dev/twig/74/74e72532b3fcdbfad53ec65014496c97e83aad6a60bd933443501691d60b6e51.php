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
        $__internal_ee66e854fe46f7a54bd27c76ac8a8653757fdee058cafd8568e7544dc7b6491b = $this->env->getExtension("native_profiler");
        $__internal_ee66e854fe46f7a54bd27c76ac8a8653757fdee058cafd8568e7544dc7b6491b->enter($__internal_ee66e854fe46f7a54bd27c76ac8a8653757fdee058cafd8568e7544dc7b6491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceRestaurantBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee66e854fe46f7a54bd27c76ac8a8653757fdee058cafd8568e7544dc7b6491b->leave($__internal_ee66e854fe46f7a54bd27c76ac8a8653757fdee058cafd8568e7544dc7b6491b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_850a48dc7f0de85e434fe51e141ec554c7d0cfcaca45ff751acd0a37205ad61a = $this->env->getExtension("native_profiler");
        $__internal_850a48dc7f0de85e434fe51e141ec554c7d0cfcaca45ff751acd0a37205ad61a->enter($__internal_850a48dc7f0de85e434fe51e141ec554c7d0cfcaca45ff751acd0a37205ad61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Restaurant:";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_850a48dc7f0de85e434fe51e141ec554c7d0cfcaca45ff751acd0a37205ad61a->leave($__internal_850a48dc7f0de85e434fe51e141ec554c7d0cfcaca45ff751acd0a37205ad61a_prof);

    }

    // line 4
    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_904441c5b7809b7ccea246b8fb93390249498ce841dafbffd48ab6a903b58d3c = $this->env->getExtension("native_profiler");
        $__internal_904441c5b7809b7ccea246b8fb93390249498ce841dafbffd48ab6a903b58d3c->enter($__internal_904441c5b7809b7ccea246b8fb93390249498ce841dafbffd48ab6a903b58d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        $this->displayParentBlock("barre_location", $context, $blocks);
        echo "Restaurant";
        
        $__internal_904441c5b7809b7ccea246b8fb93390249498ce841dafbffd48ab6a903b58d3c->leave($__internal_904441c5b7809b7ccea246b8fb93390249498ce841dafbffd48ab6a903b58d3c_prof);

    }

    // line 7
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_1bc9580395c41fa4e9df563aaf85b34a78fb8a30d88a6f9908ded29a6e55005f = $this->env->getExtension("native_profiler");
        $__internal_1bc9580395c41fa4e9df563aaf85b34a78fb8a30d88a6f9908ded29a6e55005f->enter($__internal_1bc9580395c41fa4e9df563aaf85b34a78fb8a30d88a6f9908ded29a6e55005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 8
        echo "
";
        
        $__internal_1bc9580395c41fa4e9df563aaf85b34a78fb8a30d88a6f9908ded29a6e55005f->leave($__internal_1bc9580395c41fa4e9df563aaf85b34a78fb8a30d88a6f9908ded29a6e55005f_prof);

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
