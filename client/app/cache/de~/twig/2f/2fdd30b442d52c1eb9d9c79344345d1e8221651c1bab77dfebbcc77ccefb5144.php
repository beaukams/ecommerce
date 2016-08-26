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
        $__internal_34d122c3d02a39af539e5ed2dcb2b434c51c76defbaa3d8dbbdf4c6a0600e913 = $this->env->getExtension("native_profiler");
        $__internal_34d122c3d02a39af539e5ed2dcb2b434c51c76defbaa3d8dbbdf4c6a0600e913->enter($__internal_34d122c3d02a39af539e5ed2dcb2b434c51c76defbaa3d8dbbdf4c6a0600e913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d122c3d02a39af539e5ed2dcb2b434c51c76defbaa3d8dbbdf4c6a0600e913->leave($__internal_34d122c3d02a39af539e5ed2dcb2b434c51c76defbaa3d8dbbdf4c6a0600e913_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae905d88e48f6130a5e2edee97699db266979b626d002961ab9d1bf62d17505b = $this->env->getExtension("native_profiler");
        $__internal_ae905d88e48f6130a5e2edee97699db266979b626d002961ab9d1bf62d17505b->enter($__internal_ae905d88e48f6130a5e2edee97699db266979b626d002961ab9d1bf62d17505b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ae905d88e48f6130a5e2edee97699db266979b626d002961ab9d1bf62d17505b->leave($__internal_ae905d88e48f6130a5e2edee97699db266979b626d002961ab9d1bf62d17505b_prof);

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
