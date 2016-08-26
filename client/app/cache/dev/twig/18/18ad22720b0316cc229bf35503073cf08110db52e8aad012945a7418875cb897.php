<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9ac3d45964921a347f679e7b85c1e8f58e7dc007c1ea39a9f6abd768d207cad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08c7877d5d1a0fa0cde173725b5eeefddec76e11aa4a845ecdf4a0f8b3e214a5 = $this->env->getExtension("native_profiler");
        $__internal_08c7877d5d1a0fa0cde173725b5eeefddec76e11aa4a845ecdf4a0f8b3e214a5->enter($__internal_08c7877d5d1a0fa0cde173725b5eeefddec76e11aa4a845ecdf4a0f8b3e214a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_08c7877d5d1a0fa0cde173725b5eeefddec76e11aa4a845ecdf4a0f8b3e214a5->leave($__internal_08c7877d5d1a0fa0cde173725b5eeefddec76e11aa4a845ecdf4a0f8b3e214a5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4ca3071f1a7a5cbd3fa803fea56d592b1ff752fed7259a5f77942d9ddf8a399 = $this->env->getExtension("native_profiler");
        $__internal_b4ca3071f1a7a5cbd3fa803fea56d592b1ff752fed7259a5f77942d9ddf8a399->enter($__internal_b4ca3071f1a7a5cbd3fa803fea56d592b1ff752fed7259a5f77942d9ddf8a399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b4ca3071f1a7a5cbd3fa803fea56d592b1ff752fed7259a5f77942d9ddf8a399->leave($__internal_b4ca3071f1a7a5cbd3fa803fea56d592b1ff752fed7259a5f77942d9ddf8a399_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
