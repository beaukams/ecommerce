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
        $__internal_945371b1ee13f1d8dc0997726774001e71b5a9997abba1aca0e897b4526c4880 = $this->env->getExtension("native_profiler");
        $__internal_945371b1ee13f1d8dc0997726774001e71b5a9997abba1aca0e897b4526c4880->enter($__internal_945371b1ee13f1d8dc0997726774001e71b5a9997abba1aca0e897b4526c4880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_945371b1ee13f1d8dc0997726774001e71b5a9997abba1aca0e897b4526c4880->leave($__internal_945371b1ee13f1d8dc0997726774001e71b5a9997abba1aca0e897b4526c4880_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_72d26d28209e052768e85dff9bd210cf178f260dee8b7efe6f82a70c039e432a = $this->env->getExtension("native_profiler");
        $__internal_72d26d28209e052768e85dff9bd210cf178f260dee8b7efe6f82a70c039e432a->enter($__internal_72d26d28209e052768e85dff9bd210cf178f260dee8b7efe6f82a70c039e432a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_72d26d28209e052768e85dff9bd210cf178f260dee8b7efe6f82a70c039e432a->leave($__internal_72d26d28209e052768e85dff9bd210cf178f260dee8b7efe6f82a70c039e432a_prof);

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
