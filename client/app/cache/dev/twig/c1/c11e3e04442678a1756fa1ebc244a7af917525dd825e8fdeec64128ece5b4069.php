<?php

/* base.html.twig */
class __TwigTemplate_59cfabff3ba94ed84845e17007d0aff3da2b5041990fa07a83045247e00bbad8 extends Twig_Template
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
        $__internal_a890760150a00b300070281951fe25776781de8ccbb895c6267e66b531fa0017 = $this->env->getExtension("native_profiler");
        $__internal_a890760150a00b300070281951fe25776781de8ccbb895c6267e66b531fa0017->enter($__internal_a890760150a00b300070281951fe25776781de8ccbb895c6267e66b531fa0017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a890760150a00b300070281951fe25776781de8ccbb895c6267e66b531fa0017->leave($__internal_a890760150a00b300070281951fe25776781de8ccbb895c6267e66b531fa0017_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_e054bf5dc4b586c2827fe33b2528d0b4a800530eda5304f4ee8e56f3327d69a4 = $this->env->getExtension("native_profiler");
        $__internal_e054bf5dc4b586c2827fe33b2528d0b4a800530eda5304f4ee8e56f3327d69a4->enter($__internal_e054bf5dc4b586c2827fe33b2528d0b4a800530eda5304f4ee8e56f3327d69a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e054bf5dc4b586c2827fe33b2528d0b4a800530eda5304f4ee8e56f3327d69a4->leave($__internal_e054bf5dc4b586c2827fe33b2528d0b4a800530eda5304f4ee8e56f3327d69a4_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_92c2c74acfb23f9075619e2a17fe77340aa1fa4281e4b82bafcbe32e85b75b3d = $this->env->getExtension("native_profiler");
        $__internal_92c2c74acfb23f9075619e2a17fe77340aa1fa4281e4b82bafcbe32e85b75b3d->enter($__internal_92c2c74acfb23f9075619e2a17fe77340aa1fa4281e4b82bafcbe32e85b75b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
        
        $__internal_92c2c74acfb23f9075619e2a17fe77340aa1fa4281e4b82bafcbe32e85b75b3d->leave($__internal_92c2c74acfb23f9075619e2a17fe77340aa1fa4281e4b82bafcbe32e85b75b3d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb557dc35d357b9ccb0f3543e6edba54af0dfa14651ec338b0275e948f10a252 = $this->env->getExtension("native_profiler");
        $__internal_eb557dc35d357b9ccb0f3543e6edba54af0dfa14651ec338b0275e948f10a252->enter($__internal_eb557dc35d357b9ccb0f3543e6edba54af0dfa14651ec338b0275e948f10a252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "E-commerce";
        
        $__internal_eb557dc35d357b9ccb0f3543e6edba54af0dfa14651ec338b0275e948f10a252->leave($__internal_eb557dc35d357b9ccb0f3543e6edba54af0dfa14651ec338b0275e948f10a252_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56e20d692e8c2f7192095f9f7ed850254c045254e7ea6bacb7b9c0e1123ea250 = $this->env->getExtension("native_profiler");
        $__internal_56e20d692e8c2f7192095f9f7ed850254c045254e7ea6bacb7b9c0e1123ea250->enter($__internal_56e20d692e8c2f7192095f9f7ed850254c045254e7ea6bacb7b9c0e1123ea250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            ";
        
        $__internal_56e20d692e8c2f7192095f9f7ed850254c045254e7ea6bacb7b9c0e1123ea250->leave($__internal_56e20d692e8c2f7192095f9f7ed850254c045254e7ea6bacb7b9c0e1123ea250_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_60246846cf7cf7ab4078088d9ef313849f272f7e43c0f96d03c0da39081c1832 = $this->env->getExtension("native_profiler");
        $__internal_60246846cf7cf7ab4078088d9ef313849f272f7e43c0f96d03c0da39081c1832->enter($__internal_60246846cf7cf7ab4078088d9ef313849f272f7e43c0f96d03c0da39081c1832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                ";
        $this->loadTemplate("::header.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        
        $__internal_60246846cf7cf7ab4078088d9ef313849f272f7e43c0f96d03c0da39081c1832->leave($__internal_60246846cf7cf7ab4078088d9ef313849f272f7e43c0f96d03c0da39081c1832_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c0e825c7fa7e9e919e1a96eb7bee239ad858c448f729d0f777029e47dbca913 = $this->env->getExtension("native_profiler");
        $__internal_3c0e825c7fa7e9e919e1a96eb7bee239ad858c448f729d0f777029e47dbca913->enter($__internal_3c0e825c7fa7e9e919e1a96eb7bee239ad858c448f729d0f777029e47dbca913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c0e825c7fa7e9e919e1a96eb7bee239ad858c448f729d0f777029e47dbca913->leave($__internal_3c0e825c7fa7e9e919e1a96eb7bee239ad858c448f729d0f777029e47dbca913_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e81e9381d796faa4f5f88b806fdd5d1b68ba636e6069805d292cb2a836fcc2dc = $this->env->getExtension("native_profiler");
        $__internal_e81e9381d796faa4f5f88b806fdd5d1b68ba636e6069805d292cb2a836fcc2dc->enter($__internal_e81e9381d796faa4f5f88b806fdd5d1b68ba636e6069805d292cb2a836fcc2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "            ";
        
        $__internal_e81e9381d796faa4f5f88b806fdd5d1b68ba636e6069805d292cb2a836fcc2dc->leave($__internal_e81e9381d796faa4f5f88b806fdd5d1b68ba636e6069805d292cb2a836fcc2dc_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29dbe4f0e8f620cd9474d6247b3df229f07eeb187d62b6f9bbb936643b9087aa = $this->env->getExtension("native_profiler");
        $__internal_29dbe4f0e8f620cd9474d6247b3df229f07eeb187d62b6f9bbb936643b9087aa->enter($__internal_29dbe4f0e8f620cd9474d6247b3df229f07eeb187d62b6f9bbb936643b9087aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_29dbe4f0e8f620cd9474d6247b3df229f07eeb187d62b6f9bbb936643b9087aa->leave($__internal_29dbe4f0e8f620cd9474d6247b3df229f07eeb187d62b6f9bbb936643b9087aa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 34,  197 => 33,  193 => 32,  188 => 31,  182 => 30,  175 => 26,  172 => 25,  166 => 24,  155 => 21,  148 => 18,  145 => 17,  139 => 16,  129 => 8,  123 => 7,  111 => 6,  99 => 5,  89 => 10,  87 => 7,  82 => 6,  79 => 5,  73 => 4,  64 => 36,  62 => 30,  57 => 27,  55 => 24,  51 => 22,  49 => 21,  45 => 19,  43 => 16,  37 => 12,  35 => 4,  30 => 1,);
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
