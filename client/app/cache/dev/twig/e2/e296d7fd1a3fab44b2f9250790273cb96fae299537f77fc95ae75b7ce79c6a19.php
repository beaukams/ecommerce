<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3354523364543a662807f96920a6bb273f7b0f5ceaf0a8fae8cc3869c6b7b397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_698d0e924cf0285e7dc4da9bfdc03b6f1f1e0a0129e701c9621889ad5aa22e04 = $this->env->getExtension("native_profiler");
        $__internal_698d0e924cf0285e7dc4da9bfdc03b6f1f1e0a0129e701c9621889ad5aa22e04->enter($__internal_698d0e924cf0285e7dc4da9bfdc03b6f1f1e0a0129e701c9621889ad5aa22e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698d0e924cf0285e7dc4da9bfdc03b6f1f1e0a0129e701c9621889ad5aa22e04->leave($__internal_698d0e924cf0285e7dc4da9bfdc03b6f1f1e0a0129e701c9621889ad5aa22e04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfbd5e23687a5da2cf0b1bcdad13fdb0b0b547f734b96baee4ca1c591ae24c55 = $this->env->getExtension("native_profiler");
        $__internal_dfbd5e23687a5da2cf0b1bcdad13fdb0b0b547f734b96baee4ca1c591ae24c55->enter($__internal_dfbd5e23687a5da2cf0b1bcdad13fdb0b0b547f734b96baee4ca1c591ae24c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dfbd5e23687a5da2cf0b1bcdad13fdb0b0b547f734b96baee4ca1c591ae24c55->leave($__internal_dfbd5e23687a5da2cf0b1bcdad13fdb0b0b547f734b96baee4ca1c591ae24c55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc2864231487384cdb95927a128a819b75e6066c52846175d1b883731e6e4f4d = $this->env->getExtension("native_profiler");
        $__internal_cc2864231487384cdb95927a128a819b75e6066c52846175d1b883731e6e4f4d->enter($__internal_cc2864231487384cdb95927a128a819b75e6066c52846175d1b883731e6e4f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc2864231487384cdb95927a128a819b75e6066c52846175d1b883731e6e4f4d->leave($__internal_cc2864231487384cdb95927a128a819b75e6066c52846175d1b883731e6e4f4d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_804dcd3b6e05bf9cdac169a4b8ec70294970902ea4fabb229af70967dce17658 = $this->env->getExtension("native_profiler");
        $__internal_804dcd3b6e05bf9cdac169a4b8ec70294970902ea4fabb229af70967dce17658->enter($__internal_804dcd3b6e05bf9cdac169a4b8ec70294970902ea4fabb229af70967dce17658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_804dcd3b6e05bf9cdac169a4b8ec70294970902ea4fabb229af70967dce17658->leave($__internal_804dcd3b6e05bf9cdac169a4b8ec70294970902ea4fabb229af70967dce17658_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
