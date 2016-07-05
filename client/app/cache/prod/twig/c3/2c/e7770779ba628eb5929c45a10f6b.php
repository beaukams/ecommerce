<?php

/* ::base.html.twig */
class __TwigTemplate_c32ce7770779ba628eb5929c45a10f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html");
        echo "\" rel=\"stylesheet\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
        ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        $this->env->loadTemplate("::header.html.twig")->display($context);
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
        $this->env->loadTemplate("::footer.html.twig")->display($context);
        // line 26
        echo "            ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Ecommerce/js/jquery-1.4.1.min.js"), "html");
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Ecommerce/js/jquery.jcarousel.pack.js"), "html");
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Ecommerce/js/jquery.slide.js"), "html");
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Ecommerce/js/jquery-func.js"), "html");
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
