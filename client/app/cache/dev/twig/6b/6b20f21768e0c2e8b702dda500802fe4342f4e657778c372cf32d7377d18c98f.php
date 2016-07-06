<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cb1caa2976054a8d44bcaf9e1044c20021f0c84e8f51e31149cc3e9c1ff0c8fe extends Twig_Template
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
        $__internal_856e0dc9b5d1e681ea2cc32312a85fe9659ec770272911d167d606b570e9a6c7 = $this->env->getExtension("native_profiler");
        $__internal_856e0dc9b5d1e681ea2cc32312a85fe9659ec770272911d167d606b570e9a6c7->enter($__internal_856e0dc9b5d1e681ea2cc32312a85fe9659ec770272911d167d606b570e9a6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_856e0dc9b5d1e681ea2cc32312a85fe9659ec770272911d167d606b570e9a6c7->leave($__internal_856e0dc9b5d1e681ea2cc32312a85fe9659ec770272911d167d606b570e9a6c7_prof);

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
