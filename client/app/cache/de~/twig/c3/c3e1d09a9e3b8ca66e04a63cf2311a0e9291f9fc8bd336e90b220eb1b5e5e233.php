<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_214d3839ae5f5efc6c3856c1a4650d40ba88f398ce18539be6efb30a4028faa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_22bb8c5459535a70b6503ad5cf48bace5da1b76cb3e2ff27956d0c148879f5dd = $this->env->getExtension("native_profiler");
        $__internal_22bb8c5459535a70b6503ad5cf48bace5da1b76cb3e2ff27956d0c148879f5dd->enter($__internal_22bb8c5459535a70b6503ad5cf48bace5da1b76cb3e2ff27956d0c148879f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22bb8c5459535a70b6503ad5cf48bace5da1b76cb3e2ff27956d0c148879f5dd->leave($__internal_22bb8c5459535a70b6503ad5cf48bace5da1b76cb3e2ff27956d0c148879f5dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5424aaf25796cdd8f037b0ae4a5994eabe56aa4f075de4339e543145337da49 = $this->env->getExtension("native_profiler");
        $__internal_e5424aaf25796cdd8f037b0ae4a5994eabe56aa4f075de4339e543145337da49->enter($__internal_e5424aaf25796cdd8f037b0ae4a5994eabe56aa4f075de4339e543145337da49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e5424aaf25796cdd8f037b0ae4a5994eabe56aa4f075de4339e543145337da49->leave($__internal_e5424aaf25796cdd8f037b0ae4a5994eabe56aa4f075de4339e543145337da49_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
