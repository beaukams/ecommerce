<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0a02b077fb5c246f581e723d03442a71c5df759add29218fd91877750798bfe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_000e7c9bf51c3ac4d7e9a0588795ded12c1c63e52c0df3eb96cbe8026ee0d17f = $this->env->getExtension("native_profiler");
        $__internal_000e7c9bf51c3ac4d7e9a0588795ded12c1c63e52c0df3eb96cbe8026ee0d17f->enter($__internal_000e7c9bf51c3ac4d7e9a0588795ded12c1c63e52c0df3eb96cbe8026ee0d17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000e7c9bf51c3ac4d7e9a0588795ded12c1c63e52c0df3eb96cbe8026ee0d17f->leave($__internal_000e7c9bf51c3ac4d7e9a0588795ded12c1c63e52c0df3eb96cbe8026ee0d17f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3931dce5160a42a0c67b292726d71b7222193bd6e41b9c52a697058335bf01e = $this->env->getExtension("native_profiler");
        $__internal_a3931dce5160a42a0c67b292726d71b7222193bd6e41b9c52a697058335bf01e->enter($__internal_a3931dce5160a42a0c67b292726d71b7222193bd6e41b9c52a697058335bf01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a3931dce5160a42a0c67b292726d71b7222193bd6e41b9c52a697058335bf01e->leave($__internal_a3931dce5160a42a0c67b292726d71b7222193bd6e41b9c52a697058335bf01e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
