<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d45515094fd26b321771deecdc29fa9d16d2803a6c70a74715fd1b722518383b extends Twig_Template
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
        $__internal_363f16fdf851ba560c1aa6dc8da3d1f83e11190a30e6c2db725e387274c7561f = $this->env->getExtension("native_profiler");
        $__internal_363f16fdf851ba560c1aa6dc8da3d1f83e11190a30e6c2db725e387274c7561f->enter($__internal_363f16fdf851ba560c1aa6dc8da3d1f83e11190a30e6c2db725e387274c7561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_363f16fdf851ba560c1aa6dc8da3d1f83e11190a30e6c2db725e387274c7561f->leave($__internal_363f16fdf851ba560c1aa6dc8da3d1f83e11190a30e6c2db725e387274c7561f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3869c221a4ad54428919d97a76fb68c33e9663b80a964dcb352afeb565c900e = $this->env->getExtension("native_profiler");
        $__internal_f3869c221a4ad54428919d97a76fb68c33e9663b80a964dcb352afeb565c900e->enter($__internal_f3869c221a4ad54428919d97a76fb68c33e9663b80a964dcb352afeb565c900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f3869c221a4ad54428919d97a76fb68c33e9663b80a964dcb352afeb565c900e->leave($__internal_f3869c221a4ad54428919d97a76fb68c33e9663b80a964dcb352afeb565c900e_prof);

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
