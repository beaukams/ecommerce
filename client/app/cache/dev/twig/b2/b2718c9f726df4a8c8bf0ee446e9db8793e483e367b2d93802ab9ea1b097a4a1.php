<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3072772193e10f2a4cffe6372bbf9e5c868f60b1b96969d9f6849af37d8f10f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32ff82fe5ec8c7dd736f5aca35a99c8bff32a0214f5e533649aa8fb6cce1c225 = $this->env->getExtension("native_profiler");
        $__internal_32ff82fe5ec8c7dd736f5aca35a99c8bff32a0214f5e533649aa8fb6cce1c225->enter($__internal_32ff82fe5ec8c7dd736f5aca35a99c8bff32a0214f5e533649aa8fb6cce1c225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32ff82fe5ec8c7dd736f5aca35a99c8bff32a0214f5e533649aa8fb6cce1c225->leave($__internal_32ff82fe5ec8c7dd736f5aca35a99c8bff32a0214f5e533649aa8fb6cce1c225_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea0d07882b400be2db1faa1417a0c1f67b7af0524b262775549a29d5d040b75f = $this->env->getExtension("native_profiler");
        $__internal_ea0d07882b400be2db1faa1417a0c1f67b7af0524b262775549a29d5d040b75f->enter($__internal_ea0d07882b400be2db1faa1417a0c1f67b7af0524b262775549a29d5d040b75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ea0d07882b400be2db1faa1417a0c1f67b7af0524b262775549a29d5d040b75f->leave($__internal_ea0d07882b400be2db1faa1417a0c1f67b7af0524b262775549a29d5d040b75f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_831ee4a947d43f60c6a28caed47e0bbfa34685b82756c403febaae9c968949ba = $this->env->getExtension("native_profiler");
        $__internal_831ee4a947d43f60c6a28caed47e0bbfa34685b82756c403febaae9c968949ba->enter($__internal_831ee4a947d43f60c6a28caed47e0bbfa34685b82756c403febaae9c968949ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_831ee4a947d43f60c6a28caed47e0bbfa34685b82756c403febaae9c968949ba->leave($__internal_831ee4a947d43f60c6a28caed47e0bbfa34685b82756c403febaae9c968949ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73e6abb11b5c391c984a1bf89b7510be4c066bcc485dc6e425d3ef9e59d4f846 = $this->env->getExtension("native_profiler");
        $__internal_73e6abb11b5c391c984a1bf89b7510be4c066bcc485dc6e425d3ef9e59d4f846->enter($__internal_73e6abb11b5c391c984a1bf89b7510be4c066bcc485dc6e425d3ef9e59d4f846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73e6abb11b5c391c984a1bf89b7510be4c066bcc485dc6e425d3ef9e59d4f846->leave($__internal_73e6abb11b5c391c984a1bf89b7510be4c066bcc485dc6e425d3ef9e59d4f846_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
