<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c4fa07f5b11afdd8ce3660bc2699b383aabf17f4c40e778ead508e97a44dc0d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_43aa9f4f3bbea37e385d5ddc4720d67565905c158b7460cd0f830768af4b4315 = $this->env->getExtension("native_profiler");
        $__internal_43aa9f4f3bbea37e385d5ddc4720d67565905c158b7460cd0f830768af4b4315->enter($__internal_43aa9f4f3bbea37e385d5ddc4720d67565905c158b7460cd0f830768af4b4315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43aa9f4f3bbea37e385d5ddc4720d67565905c158b7460cd0f830768af4b4315->leave($__internal_43aa9f4f3bbea37e385d5ddc4720d67565905c158b7460cd0f830768af4b4315_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd4fb7fc3842e5262056a75b66d7dda51198006f298a9147d1004d5de5cf79a1 = $this->env->getExtension("native_profiler");
        $__internal_cd4fb7fc3842e5262056a75b66d7dda51198006f298a9147d1004d5de5cf79a1->enter($__internal_cd4fb7fc3842e5262056a75b66d7dda51198006f298a9147d1004d5de5cf79a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cd4fb7fc3842e5262056a75b66d7dda51198006f298a9147d1004d5de5cf79a1->leave($__internal_cd4fb7fc3842e5262056a75b66d7dda51198006f298a9147d1004d5de5cf79a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
