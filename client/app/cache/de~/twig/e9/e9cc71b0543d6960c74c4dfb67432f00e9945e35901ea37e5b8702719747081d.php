<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5985f4093354fdd7a91e3b52ff1a6ea551a2b24cc9c219f796c232848908b81b extends Twig_Template
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
        $__internal_71ed4232944b5ac8ac2b5dfc6498faf278fe97e091831d60802a906eaf2b5faa = $this->env->getExtension("native_profiler");
        $__internal_71ed4232944b5ac8ac2b5dfc6498faf278fe97e091831d60802a906eaf2b5faa->enter($__internal_71ed4232944b5ac8ac2b5dfc6498faf278fe97e091831d60802a906eaf2b5faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_71ed4232944b5ac8ac2b5dfc6498faf278fe97e091831d60802a906eaf2b5faa->leave($__internal_71ed4232944b5ac8ac2b5dfc6498faf278fe97e091831d60802a906eaf2b5faa_prof);

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
