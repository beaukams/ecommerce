<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1743ddb41d1889ec4cc79fd0a315f698a888dfdd4f12652ecc6615492085b6da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_523c9cfefaa4710dbedfbe2ac236bb86ae34fa8c5b77f759eca5f9850ab3d13a = $this->env->getExtension("native_profiler");
        $__internal_523c9cfefaa4710dbedfbe2ac236bb86ae34fa8c5b77f759eca5f9850ab3d13a->enter($__internal_523c9cfefaa4710dbedfbe2ac236bb86ae34fa8c5b77f759eca5f9850ab3d13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_523c9cfefaa4710dbedfbe2ac236bb86ae34fa8c5b77f759eca5f9850ab3d13a->leave($__internal_523c9cfefaa4710dbedfbe2ac236bb86ae34fa8c5b77f759eca5f9850ab3d13a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */