<?php

/* ::base.html.twig */
class __TwigTemplate_195b0344e5af315f78d5d31a35c69df56c48cbae1a32f3d2f628152d911d84d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    </head>

    <body>
        <header>
            ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "        </header>

        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
        <footer>
            ";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "        </footer>
        

        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            ";
        $this->displayBlock('meta', $context, $blocks);
        // line 6
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "E-commerce";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 17)->display($context);
        // line 18
        echo "            ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 25)->display($context);
        // line 26
        echo "            ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery-1.4.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery.jcarousel.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery.slide.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery-func.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 34,  146 => 33,  142 => 32,  137 => 31,  134 => 30,  130 => 26,  127 => 25,  124 => 24,  119 => 21,  115 => 18,  112 => 17,  109 => 16,  102 => 8,  99 => 7,  93 => 6,  87 => 5,  80 => 10,  78 => 7,  73 => 6,  70 => 5,  67 => 4,  61 => 36,  59 => 30,  54 => 27,  52 => 24,  48 => 22,  46 => 21,  42 => 19,  40 => 16,  34 => 12,  32 => 4,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block head %}*/
/*             {% block meta %}<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />{% endblock %}*/
/*             <title>{% block title %}E-commerce{% endblock %}</title>*/
/*             {% block stylesheets %}*/
/*                 <link href="{{ asset('bundles/Ecommerce/css/style.css') }}" rel="stylesheet">*/
/*             {% endblock %}*/
/*             <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*         <header>*/
/*             {% block header %}*/
/*                 {% include "::header.html.twig" %}*/
/*             {% endblock %}*/
/*         </header>*/
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*         <footer>*/
/*             {% block footer %}*/
/*                 {% include "::footer.html.twig" %}*/
/*             {% endblock %}*/
/*         </footer>*/
/*         */
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/Ecommerce/js/jquery-1.4.1.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/Ecommerce/js/jquery.jcarousel.pack.js') }}"></script>*/
/*             <script src="{{ asset('bundles/Ecommerce/js/jquery.slide.js') }}"></script>*/
/*             <script src="{{ asset('bundles/Ecommerce/js/jquery-func.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
