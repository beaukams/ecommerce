<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_64ea6e5641252f3ae970973b7f3e5bf584bae957a2de143c25bcb24407a2a620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c15a97d523adb9804e45d9d339920b6e44068116d6d339d8b100b10e1e4ba988 = $this->env->getExtension("native_profiler");
        $__internal_c15a97d523adb9804e45d9d339920b6e44068116d6d339d8b100b10e1e4ba988->enter($__internal_c15a97d523adb9804e45d9d339920b6e44068116d6d339d8b100b10e1e4ba988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15a97d523adb9804e45d9d339920b6e44068116d6d339d8b100b10e1e4ba988->leave($__internal_c15a97d523adb9804e45d9d339920b6e44068116d6d339d8b100b10e1e4ba988_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4432972016633aef03f00e804ea3febd637b9d9dfa48fec78359717c4a817580 = $this->env->getExtension("native_profiler");
        $__internal_4432972016633aef03f00e804ea3febd637b9d9dfa48fec78359717c4a817580->enter($__internal_4432972016633aef03f00e804ea3febd637b9d9dfa48fec78359717c4a817580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4432972016633aef03f00e804ea3febd637b9d9dfa48fec78359717c4a817580->leave($__internal_4432972016633aef03f00e804ea3febd637b9d9dfa48fec78359717c4a817580_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
