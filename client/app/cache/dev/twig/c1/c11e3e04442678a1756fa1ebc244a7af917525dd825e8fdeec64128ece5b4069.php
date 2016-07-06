<?php

/* ::base.html.twig */
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
        $__internal_77456dea6d151048d4996a913270d07a0c4db371a10d0ac88c32607247971e85 = $this->env->getExtension("native_profiler");
        $__internal_77456dea6d151048d4996a913270d07a0c4db371a10d0ac88c32607247971e85->enter($__internal_77456dea6d151048d4996a913270d07a0c4db371a10d0ac88c32607247971e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_77456dea6d151048d4996a913270d07a0c4db371a10d0ac88c32607247971e85->leave($__internal_77456dea6d151048d4996a913270d07a0c4db371a10d0ac88c32607247971e85_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca217e0580c046b6ea902c4a2ca30917619278d7ea12ece37f3a0ba7fc4b3e63 = $this->env->getExtension("native_profiler");
        $__internal_ca217e0580c046b6ea902c4a2ca30917619278d7ea12ece37f3a0ba7fc4b3e63->enter($__internal_ca217e0580c046b6ea902c4a2ca30917619278d7ea12ece37f3a0ba7fc4b3e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ca217e0580c046b6ea902c4a2ca30917619278d7ea12ece37f3a0ba7fc4b3e63->leave($__internal_ca217e0580c046b6ea902c4a2ca30917619278d7ea12ece37f3a0ba7fc4b3e63_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_efe15126aba9037091e285a7cb3ea7cca8482f8b88cd393aa58342bee9cddbe0 = $this->env->getExtension("native_profiler");
        $__internal_efe15126aba9037091e285a7cb3ea7cca8482f8b88cd393aa58342bee9cddbe0->enter($__internal_efe15126aba9037091e285a7cb3ea7cca8482f8b88cd393aa58342bee9cddbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
        
        $__internal_efe15126aba9037091e285a7cb3ea7cca8482f8b88cd393aa58342bee9cddbe0->leave($__internal_efe15126aba9037091e285a7cb3ea7cca8482f8b88cd393aa58342bee9cddbe0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_70ae8ce20bece28c522427e1eb3057f104deafeb3a0a873e3751610f21bf0a06 = $this->env->getExtension("native_profiler");
        $__internal_70ae8ce20bece28c522427e1eb3057f104deafeb3a0a873e3751610f21bf0a06->enter($__internal_70ae8ce20bece28c522427e1eb3057f104deafeb3a0a873e3751610f21bf0a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "E-commerce";
        
        $__internal_70ae8ce20bece28c522427e1eb3057f104deafeb3a0a873e3751610f21bf0a06->leave($__internal_70ae8ce20bece28c522427e1eb3057f104deafeb3a0a873e3751610f21bf0a06_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31ef7a771067467c58d9aeacfa79c6170169026ff3a3b836355cf52f0b18a312 = $this->env->getExtension("native_profiler");
        $__internal_31ef7a771067467c58d9aeacfa79c6170169026ff3a3b836355cf52f0b18a312->enter($__internal_31ef7a771067467c58d9aeacfa79c6170169026ff3a3b836355cf52f0b18a312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            ";
        
        $__internal_31ef7a771067467c58d9aeacfa79c6170169026ff3a3b836355cf52f0b18a312->leave($__internal_31ef7a771067467c58d9aeacfa79c6170169026ff3a3b836355cf52f0b18a312_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_4e4298bd12892e08b5e2cc62ddde6da1954b7a5a7a296182d6ec3af8d43497ba = $this->env->getExtension("native_profiler");
        $__internal_4e4298bd12892e08b5e2cc62ddde6da1954b7a5a7a296182d6ec3af8d43497ba->enter($__internal_4e4298bd12892e08b5e2cc62ddde6da1954b7a5a7a296182d6ec3af8d43497ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                ";
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        
        $__internal_4e4298bd12892e08b5e2cc62ddde6da1954b7a5a7a296182d6ec3af8d43497ba->leave($__internal_4e4298bd12892e08b5e2cc62ddde6da1954b7a5a7a296182d6ec3af8d43497ba_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_22039d953a8e0f3ff855dca54075c60dfd89b6804c8315c80b826167d5ad60db = $this->env->getExtension("native_profiler");
        $__internal_22039d953a8e0f3ff855dca54075c60dfd89b6804c8315c80b826167d5ad60db->enter($__internal_22039d953a8e0f3ff855dca54075c60dfd89b6804c8315c80b826167d5ad60db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22039d953a8e0f3ff855dca54075c60dfd89b6804c8315c80b826167d5ad60db->leave($__internal_22039d953a8e0f3ff855dca54075c60dfd89b6804c8315c80b826167d5ad60db_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f8288e999e34a632ccceea0f96093ce77987c148a461bef1814ec26fa60ed84a = $this->env->getExtension("native_profiler");
        $__internal_f8288e999e34a632ccceea0f96093ce77987c148a461bef1814ec26fa60ed84a->enter($__internal_f8288e999e34a632ccceea0f96093ce77987c148a461bef1814ec26fa60ed84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 25)->display($context);
        // line 26
        echo "            ";
        
        $__internal_f8288e999e34a632ccceea0f96093ce77987c148a461bef1814ec26fa60ed84a->leave($__internal_f8288e999e34a632ccceea0f96093ce77987c148a461bef1814ec26fa60ed84a_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fbbf35d476fb78ecfc59fad53a9c97bdc1dc713cc23274f317fe53f83f3d7e3 = $this->env->getExtension("native_profiler");
        $__internal_3fbbf35d476fb78ecfc59fad53a9c97bdc1dc713cc23274f317fe53f83f3d7e3->enter($__internal_3fbbf35d476fb78ecfc59fad53a9c97bdc1dc713cc23274f317fe53f83f3d7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3fbbf35d476fb78ecfc59fad53a9c97bdc1dc713cc23274f317fe53f83f3d7e3->leave($__internal_3fbbf35d476fb78ecfc59fad53a9c97bdc1dc713cc23274f317fe53f83f3d7e3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
