<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_9d65db79dbcc07a9073c3dfe79afa030fb0ce4294bfad434f4f011e643df88f4 extends Twig_Template
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
        $__internal_866008a9605ef4593a12e9f23ce5571cc08cfd85436fd6f4f5f1bdfb6872ef97 = $this->env->getExtension("native_profiler");
        $__internal_866008a9605ef4593a12e9f23ce5571cc08cfd85436fd6f4f5f1bdfb6872ef97->enter($__internal_866008a9605ef4593a12e9f23ce5571cc08cfd85436fd6f4f5f1bdfb6872ef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_866008a9605ef4593a12e9f23ce5571cc08cfd85436fd6f4f5f1bdfb6872ef97->leave($__internal_866008a9605ef4593a12e9f23ce5571cc08cfd85436fd6f4f5f1bdfb6872ef97_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
