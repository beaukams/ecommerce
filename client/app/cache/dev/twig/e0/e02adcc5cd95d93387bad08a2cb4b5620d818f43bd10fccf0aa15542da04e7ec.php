<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c84813ac923cffb7355435dc2e0815b18f1c3a52baf54d72f32fbbbaff78e9e3 extends Twig_Template
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
        $__internal_c6aa5a62192f489b4afece3356a1a803d10ee5865f6a4fc137c2a8a37dcfad5c = $this->env->getExtension("native_profiler");
        $__internal_c6aa5a62192f489b4afece3356a1a803d10ee5865f6a4fc137c2a8a37dcfad5c->enter($__internal_c6aa5a62192f489b4afece3356a1a803d10ee5865f6a4fc137c2a8a37dcfad5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c6aa5a62192f489b4afece3356a1a803d10ee5865f6a4fc137c2a8a37dcfad5c->leave($__internal_c6aa5a62192f489b4afece3356a1a803d10ee5865f6a4fc137c2a8a37dcfad5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */