<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_493ad27c7a303c3674a9ee542c907aeeeedaa3911ed99fb148a0d75e1e6b5249 extends Twig_Template
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
        $__internal_d45fe835fc69ebfb1cb394f76c2912d80f025711cd7908a818de8549f1881b09 = $this->env->getExtension("native_profiler");
        $__internal_d45fe835fc69ebfb1cb394f76c2912d80f025711cd7908a818de8549f1881b09->enter($__internal_d45fe835fc69ebfb1cb394f76c2912d80f025711cd7908a818de8549f1881b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d45fe835fc69ebfb1cb394f76c2912d80f025711cd7908a818de8549f1881b09->leave($__internal_d45fe835fc69ebfb1cb394f76c2912d80f025711cd7908a818de8549f1881b09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
