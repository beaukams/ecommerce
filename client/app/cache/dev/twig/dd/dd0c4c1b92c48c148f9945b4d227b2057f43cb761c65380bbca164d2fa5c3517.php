<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c6fbb7b59ef0136c652a8d84e332147dc014dda15d2b68a8f7e426e15a4dd2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ebada0bfaf281e12eb347e08ca6d48461c0b8feea1a2048660fb308eecbb86e0 = $this->env->getExtension("native_profiler");
        $__internal_ebada0bfaf281e12eb347e08ca6d48461c0b8feea1a2048660fb308eecbb86e0->enter($__internal_ebada0bfaf281e12eb347e08ca6d48461c0b8feea1a2048660fb308eecbb86e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebada0bfaf281e12eb347e08ca6d48461c0b8feea1a2048660fb308eecbb86e0->leave($__internal_ebada0bfaf281e12eb347e08ca6d48461c0b8feea1a2048660fb308eecbb86e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f270465f3b91076c26dfedcc88377ba85002c42382577d745bcfbfe2928815b7 = $this->env->getExtension("native_profiler");
        $__internal_f270465f3b91076c26dfedcc88377ba85002c42382577d745bcfbfe2928815b7->enter($__internal_f270465f3b91076c26dfedcc88377ba85002c42382577d745bcfbfe2928815b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f270465f3b91076c26dfedcc88377ba85002c42382577d745bcfbfe2928815b7->leave($__internal_f270465f3b91076c26dfedcc88377ba85002c42382577d745bcfbfe2928815b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
