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
        $__internal_9a842c2684aa8e3464859c7c2cf601ef1e8059460eee2750b51d5cc2ae57da0f = $this->env->getExtension("native_profiler");
        $__internal_9a842c2684aa8e3464859c7c2cf601ef1e8059460eee2750b51d5cc2ae57da0f->enter($__internal_9a842c2684aa8e3464859c7c2cf601ef1e8059460eee2750b51d5cc2ae57da0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::casa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a842c2684aa8e3464859c7c2cf601ef1e8059460eee2750b51d5cc2ae57da0f->leave($__internal_9a842c2684aa8e3464859c7c2cf601ef1e8059460eee2750b51d5cc2ae57da0f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b82b2f86b0db396df7b3a541a63700d7e15ec025351941f8a2963b74c44bf9aa = $this->env->getExtension("native_profiler");
        $__internal_b82b2f86b0db396df7b3a541a63700d7e15ec025351941f8a2963b74c44bf9aa->enter($__internal_b82b2f86b0db396df7b3a541a63700d7e15ec025351941f8a2963b74c44bf9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "La Casamance";
        
        $__internal_b82b2f86b0db396df7b3a541a63700d7e15ec025351941f8a2963b74c44bf9aa->leave($__internal_b82b2f86b0db396df7b3a541a63700d7e15ec025351941f8a2963b74c44bf9aa_prof);

    }

    // line 4
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_282eb1933d87a6e6a1a26bfa4e9f75d6f756c4b0c010933e75ace66265048db4 = $this->env->getExtension("native_profiler");
        $__internal_282eb1933d87a6e6a1a26bfa4e9f75d6f756c4b0c010933e75ace66265048db4->enter($__internal_282eb1933d87a6e6a1a26bfa4e9f75d6f756c4b0c010933e75ace66265048db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_282eb1933d87a6e6a1a26bfa4e9f75d6f756c4b0c010933e75ace66265048db4->leave($__internal_282eb1933d87a6e6a1a26bfa4e9f75d6f756c4b0c010933e75ace66265048db4_prof);

    }

    // line 7
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_482f61c4d991f8e3775df958fb030573b4e2c2ef68adf6c12cb9eca008a19d81 = $this->env->getExtension("native_profiler");
        $__internal_482f61c4d991f8e3775df958fb030573b4e2c2ef68adf6c12cb9eca008a19d81->enter($__internal_482f61c4d991f8e3775df958fb030573b4e2c2ef68adf6c12cb9eca008a19d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 8
        echo "\tllk
";
        
        $__internal_482f61c4d991f8e3775df958fb030573b4e2c2ef68adf6c12cb9eca008a19d81->leave($__internal_482f61c4d991f8e3775df958fb030573b4e2c2ef68adf6c12cb9eca008a19d81_prof);

    }

    // line 11
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_86a8ec1b808c34e803c995069f29cd1e6acb14dfbfa9c288f220e59df26b6dc1 = $this->env->getExtension("native_profiler");
        $__internal_86a8ec1b808c34e803c995069f29cd1e6acb14dfbfa9c288f220e59df26b6dc1->enter($__internal_86a8ec1b808c34e803c995069f29cd1e6acb14dfbfa9c288f220e59df26b6dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 12
        echo "\tlkk
";
        
        $__internal_86a8ec1b808c34e803c995069f29cd1e6acb14dfbfa9c288f220e59df26b6dc1->leave($__internal_86a8ec1b808c34e803c995069f29cd1e6acb14dfbfa9c288f220e59df26b6dc1_prof);

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
