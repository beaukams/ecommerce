<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ab572789fc34c6640ea7550a348407541d3b913282a093dba476af295f75d8de extends Twig_Template
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
        $__internal_1c57b662186f19ebe899fafbe72474f49a0c1bd2358b2f795f5447e99de7104c = $this->env->getExtension("native_profiler");
        $__internal_1c57b662186f19ebe899fafbe72474f49a0c1bd2358b2f795f5447e99de7104c->enter($__internal_1c57b662186f19ebe899fafbe72474f49a0c1bd2358b2f795f5447e99de7104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1c57b662186f19ebe899fafbe72474f49a0c1bd2358b2f795f5447e99de7104c->leave($__internal_1c57b662186f19ebe899fafbe72474f49a0c1bd2358b2f795f5447e99de7104c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_253bc4e8579d93bb410b37a08a53a17ecf191a94dbc5986dfd36009bdd368b1a = $this->env->getExtension("native_profiler");
        $__internal_253bc4e8579d93bb410b37a08a53a17ecf191a94dbc5986dfd36009bdd368b1a->enter($__internal_253bc4e8579d93bb410b37a08a53a17ecf191a94dbc5986dfd36009bdd368b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_253bc4e8579d93bb410b37a08a53a17ecf191a94dbc5986dfd36009bdd368b1a->leave($__internal_253bc4e8579d93bb410b37a08a53a17ecf191a94dbc5986dfd36009bdd368b1a_prof);

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
