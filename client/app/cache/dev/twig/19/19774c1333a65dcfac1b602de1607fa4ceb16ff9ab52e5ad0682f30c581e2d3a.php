<?php

/* base.html.twig */
class __TwigTemplate_e93591577298667d4a2e30ade4229d24263c82433660a8f182651332cad40ab6 extends Twig_Template
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
        $__internal_16663bbaf61b6ab8e2bea5eb4a420f951305dbda49ac1197eecf8b546c2b3ebe = $this->env->getExtension("native_profiler");
        $__internal_16663bbaf61b6ab8e2bea5eb4a420f951305dbda49ac1197eecf8b546c2b3ebe->enter($__internal_16663bbaf61b6ab8e2bea5eb4a420f951305dbda49ac1197eecf8b546c2b3ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_16663bbaf61b6ab8e2bea5eb4a420f951305dbda49ac1197eecf8b546c2b3ebe->leave($__internal_16663bbaf61b6ab8e2bea5eb4a420f951305dbda49ac1197eecf8b546c2b3ebe_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_16d30b737b79a0553bba809afd128f9304aff810aaa5eae77ddec2549a257b95 = $this->env->getExtension("native_profiler");
        $__internal_16d30b737b79a0553bba809afd128f9304aff810aaa5eae77ddec2549a257b95->enter($__internal_16d30b737b79a0553bba809afd128f9304aff810aaa5eae77ddec2549a257b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_16d30b737b79a0553bba809afd128f9304aff810aaa5eae77ddec2549a257b95->leave($__internal_16d30b737b79a0553bba809afd128f9304aff810aaa5eae77ddec2549a257b95_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_9db36069211c4d74dda4310ad9f8dceaff11616d44d1eba212836538b1c65af3 = $this->env->getExtension("native_profiler");
        $__internal_9db36069211c4d74dda4310ad9f8dceaff11616d44d1eba212836538b1c65af3->enter($__internal_9db36069211c4d74dda4310ad9f8dceaff11616d44d1eba212836538b1c65af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
        
        $__internal_9db36069211c4d74dda4310ad9f8dceaff11616d44d1eba212836538b1c65af3->leave($__internal_9db36069211c4d74dda4310ad9f8dceaff11616d44d1eba212836538b1c65af3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_408b61e769b9bc59047f8a8ff38b1abcc0decc4d8a3a6a0fb3159db05f3ecf91 = $this->env->getExtension("native_profiler");
        $__internal_408b61e769b9bc59047f8a8ff38b1abcc0decc4d8a3a6a0fb3159db05f3ecf91->enter($__internal_408b61e769b9bc59047f8a8ff38b1abcc0decc4d8a3a6a0fb3159db05f3ecf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "E-commerce";
        
        $__internal_408b61e769b9bc59047f8a8ff38b1abcc0decc4d8a3a6a0fb3159db05f3ecf91->leave($__internal_408b61e769b9bc59047f8a8ff38b1abcc0decc4d8a3a6a0fb3159db05f3ecf91_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15db3eeb93346bca172fe2e9570622a96d5f3511c121e1c24c309755f4e82a99 = $this->env->getExtension("native_profiler");
        $__internal_15db3eeb93346bca172fe2e9570622a96d5f3511c121e1c24c309755f4e82a99->enter($__internal_15db3eeb93346bca172fe2e9570622a96d5f3511c121e1c24c309755f4e82a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            ";
        
        $__internal_15db3eeb93346bca172fe2e9570622a96d5f3511c121e1c24c309755f4e82a99->leave($__internal_15db3eeb93346bca172fe2e9570622a96d5f3511c121e1c24c309755f4e82a99_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_aad217bff844e1ef0952c2468c2f4284a282b22e45573730d2ef8cd716f2db46 = $this->env->getExtension("native_profiler");
        $__internal_aad217bff844e1ef0952c2468c2f4284a282b22e45573730d2ef8cd716f2db46->enter($__internal_aad217bff844e1ef0952c2468c2f4284a282b22e45573730d2ef8cd716f2db46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                ";
        $this->loadTemplate("::header.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "            ";
        
        $__internal_aad217bff844e1ef0952c2468c2f4284a282b22e45573730d2ef8cd716f2db46->leave($__internal_aad217bff844e1ef0952c2468c2f4284a282b22e45573730d2ef8cd716f2db46_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_1295b8c9f6e474a0b7a67c8d06c157c6e9a1d4a656c73eaa9216e38fad771d48 = $this->env->getExtension("native_profiler");
        $__internal_1295b8c9f6e474a0b7a67c8d06c157c6e9a1d4a656c73eaa9216e38fad771d48->enter($__internal_1295b8c9f6e474a0b7a67c8d06c157c6e9a1d4a656c73eaa9216e38fad771d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1295b8c9f6e474a0b7a67c8d06c157c6e9a1d4a656c73eaa9216e38fad771d48->leave($__internal_1295b8c9f6e474a0b7a67c8d06c157c6e9a1d4a656c73eaa9216e38fad771d48_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_10f91b533f2c70b3e21a0a47e416f2d1396f88cbd42dab6ba70f72d2fb46157e = $this->env->getExtension("native_profiler");
        $__internal_10f91b533f2c70b3e21a0a47e416f2d1396f88cbd42dab6ba70f72d2fb46157e->enter($__internal_10f91b533f2c70b3e21a0a47e416f2d1396f88cbd42dab6ba70f72d2fb46157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "            ";
        
        $__internal_10f91b533f2c70b3e21a0a47e416f2d1396f88cbd42dab6ba70f72d2fb46157e->leave($__internal_10f91b533f2c70b3e21a0a47e416f2d1396f88cbd42dab6ba70f72d2fb46157e_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dca5e39da9345153ea5193483a77e423b014be34b2505ce89242424246b41c00 = $this->env->getExtension("native_profiler");
        $__internal_dca5e39da9345153ea5193483a77e423b014be34b2505ce89242424246b41c00->enter($__internal_dca5e39da9345153ea5193483a77e423b014be34b2505ce89242424246b41c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dca5e39da9345153ea5193483a77e423b014be34b2505ce89242424246b41c00->leave($__internal_dca5e39da9345153ea5193483a77e423b014be34b2505ce89242424246b41c00_prof);

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
