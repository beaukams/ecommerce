<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_90984959a1c55312ac442906a0318d8c44c9402868f18cc14acfac9dc26fd2f3 extends Twig_Template
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
        $__internal_67ff19833e7b9a5464e0e007dd75b4f08f43f122249202c704cb28e76a27c187 = $this->env->getExtension("native_profiler");
        $__internal_67ff19833e7b9a5464e0e007dd75b4f08f43f122249202c704cb28e76a27c187->enter($__internal_67ff19833e7b9a5464e0e007dd75b4f08f43f122249202c704cb28e76a27c187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_67ff19833e7b9a5464e0e007dd75b4f08f43f122249202c704cb28e76a27c187->leave($__internal_67ff19833e7b9a5464e0e007dd75b4f08f43f122249202c704cb28e76a27c187_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
