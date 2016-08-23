<?php

/* ::base.html.twig */
class __TwigTemplate_1271640874ed48df4160cfd757cbdc5f071a4ecbb366b37ead0b7018287b8adf extends Twig_Template
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
            'barre_menu' => array($this, 'block_barre_menu'),
            'barre_location' => array($this, 'block_barre_location'),
            'body_content' => array($this, 'block_body_content'),
            'le_contenu' => array($this, 'block_le_contenu'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6a1ff2ef3f6f24770310210566072c46073584508a9236be2656e28f54bde09 = $this->env->getExtension("native_profiler");
        $__internal_c6a1ff2ef3f6f24770310210566072c46073584508a9236be2656e28f54bde09->enter($__internal_c6a1ff2ef3f6f24770310210566072c46073584508a9236be2656e28f54bde09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    </head>

    <body>




        ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "

        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "
        <footer>
            ";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 101
        echo "        </footer>
        

        ";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 192
        echo "    </body>
</html>
";
        
        $__internal_c6a1ff2ef3f6f24770310210566072c46073584508a9236be2656e28f54bde09->leave($__internal_c6a1ff2ef3f6f24770310210566072c46073584508a9236be2656e28f54bde09_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_91fe3f06d1957973c9478427760b65287ba066221511fe95953534a23b46ba17 = $this->env->getExtension("native_profiler");
        $__internal_91fe3f06d1957973c9478427760b65287ba066221511fe95953534a23b46ba17->enter($__internal_91fe3f06d1957973c9478427760b65287ba066221511fe95953534a23b46ba17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "            ";
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "            <title>
                ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "            </title>

            ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "

            <link rel=\"shortcut icon\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_91fe3f06d1957973c9478427760b65287ba066221511fe95953534a23b46ba17->leave($__internal_91fe3f06d1957973c9478427760b65287ba066221511fe95953534a23b46ba17_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_d3da407e0e9e890947def9d54a3bfc6150ee647b996e6ebc799ac5491910d132 = $this->env->getExtension("native_profiler");
        $__internal_d3da407e0e9e890947def9d54a3bfc6150ee647b996e6ebc799ac5491910d132->enter($__internal_d3da407e0e9e890947def9d54a3bfc6150ee647b996e6ebc799ac5491910d132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <meta name=\"keywords\" content=\"Ecommerce, Hotels, Cultures, Produits, Zinguinchor, Casamance, Sénégal\" />

            ";
        
        $__internal_d3da407e0e9e890947def9d54a3bfc6150ee647b996e6ebc799ac5491910d132->leave($__internal_d3da407e0e9e890947def9d54a3bfc6150ee647b996e6ebc799ac5491910d132_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f94ab4913536a330f79321c7af10db4c3e5ebdec3cda77f61bf1b8fba8f34ca2 = $this->env->getExtension("native_profiler");
        $__internal_f94ab4913536a330f79321c7af10db4c3e5ebdec3cda77f61bf1b8fba8f34ca2->enter($__internal_f94ab4913536a330f79321c7af10db4c3e5ebdec3cda77f61bf1b8fba8f34ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "E-commerce";
        
        $__internal_f94ab4913536a330f79321c7af10db4c3e5ebdec3cda77f61bf1b8fba8f34ca2->leave($__internal_f94ab4913536a330f79321c7af10db4c3e5ebdec3cda77f61bf1b8fba8f34ca2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7595eb45fe7157e1a166cf5e0bfa86600eacca6ddaeb62af2da071b7b796a37b = $this->env->getExtension("native_profiler");
        $__internal_7595eb45fe7157e1a166cf5e0bfa86600eacca6ddaeb62af2da071b7b796a37b->enter($__internal_7595eb45fe7157e1a166cf5e0bfa86600eacca6ddaeb62af2da071b7b796a37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
                <!-- //for-mobile-apps -->
                <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 

                <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

                <!-- font-awesome icons -->
                <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                <!-- //font-awesome icons -->
                <!-- js --> 
                <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
                <!-- //js --> 

                <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic"), "html", null, true);
        echo "\" rel=\"stylesheet\">

                <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            ";
        
        $__internal_7595eb45fe7157e1a166cf5e0bfa86600eacca6ddaeb62af2da071b7b796a37b->leave($__internal_7595eb45fe7157e1a166cf5e0bfa86600eacca6ddaeb62af2da071b7b796a37b_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_9ac740e30c9db5a70e14c989240217771ab6de01edd47f425e1cf53cc0d2b41a = $this->env->getExtension("native_profiler");
        $__internal_9ac740e30c9db5a70e14c989240217771ab6de01edd47f425e1cf53cc0d2b41a->enter($__internal_9ac740e30c9db5a70e14c989240217771ab6de01edd47f425e1cf53cc0d2b41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "                ";
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 47)->display($context);
        // line 48
        echo "        ";
        
        $__internal_9ac740e30c9db5a70e14c989240217771ab6de01edd47f425e1cf53cc0d2b41a->leave($__internal_9ac740e30c9db5a70e14c989240217771ab6de01edd47f425e1cf53cc0d2b41a_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb52c1f1b14bf09c67e8c517fae9d95ad9f1464c9fb7da4a1b2e6a2457bef9c5 = $this->env->getExtension("native_profiler");
        $__internal_bb52c1f1b14bf09c67e8c517fae9d95ad9f1464c9fb7da4a1b2e6a2457bef9c5->enter($__internal_bb52c1f1b14bf09c67e8c517fae9d95ad9f1464c9fb7da4a1b2e6a2457bef9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "
            ";
        // line 53
        $this->displayBlock('barre_menu', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $this->displayBlock('body_content', $context, $blocks);
        // line 95
        echo "        ";
        
        $__internal_bb52c1f1b14bf09c67e8c517fae9d95ad9f1464c9fb7da4a1b2e6a2457bef9c5->leave($__internal_bb52c1f1b14bf09c67e8c517fae9d95ad9f1464c9fb7da4a1b2e6a2457bef9c5_prof);

    }

    // line 53
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_d175f042e56641f18f9b42575b94a09f357ad767bee06b6c411ff12e989d38e7 = $this->env->getExtension("native_profiler");
        $__internal_d175f042e56641f18f9b42575b94a09f357ad767bee06b6c411ff12e989d38e7->enter($__internal_d175f042e56641f18f9b42575b94a09f357ad767bee06b6c411ff12e989d38e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        // line 54
        echo "                <!-- products-breadcrumb -->
                <div class=\"products-breadcrumb\">
                  <div class=\"container\">
                    <ul>
                      <li><i class=\"fa fa-home\" aria-hidden=\"true\"></i><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a><span>|</span></li>
                      <li>";
        // line 59
        $this->displayBlock('barre_location', $context, $blocks);
        echo "</li>

                    </ul>
                  </div>
                </div>

            ";
        
        $__internal_d175f042e56641f18f9b42575b94a09f357ad767bee06b6c411ff12e989d38e7->leave($__internal_d175f042e56641f18f9b42575b94a09f357ad767bee06b6c411ff12e989d38e7_prof);

    }

    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_894a09b063ee583b981ee5148ec62dcd9f7cd81754a3612ef413daf0213999a8 = $this->env->getExtension("native_profiler");
        $__internal_894a09b063ee583b981ee5148ec62dcd9f7cd81754a3612ef413daf0213999a8->enter($__internal_894a09b063ee583b981ee5148ec62dcd9f7cd81754a3612ef413daf0213999a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        
        $__internal_894a09b063ee583b981ee5148ec62dcd9f7cd81754a3612ef413daf0213999a8->leave($__internal_894a09b063ee583b981ee5148ec62dcd9f7cd81754a3612ef413daf0213999a8_prof);

    }

    // line 67
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_490a1c0833955c91cb45dec8c5e9c59fc472c4d3af90503c8422f3d4690211b4 = $this->env->getExtension("native_profiler");
        $__internal_490a1c0833955c91cb45dec8c5e9c59fc472c4d3af90503c8422f3d4690211b4->enter($__internal_490a1c0833955c91cb45dec8c5e9c59fc472c4d3af90503c8422f3d4690211b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 68
        echo "              <!-- banner -->
                <div class=\"banner\">
                  <div class=\"w3l_banner_nav_left\">
                    <nav class=\"navbar nav_bottom\">
                     <!-- Brand and toggle get grouped for better mobile display -->
                      <div class=\"navbar-header nav_2\">
                        <button type=\"button\" class=\"navbar-toggle collapsed navbar-toggle1\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        </button>
                       </div> 
                       <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
                        
                       </div><!-- /.navbar-collapse -->
                    </nav>
                  </div>
                  
                  ";
        // line 88
        $this->displayBlock('le_contenu', $context, $blocks);
        // line 91
        echo "
                </div>
              <!-- //newsletter -->
            ";
        
        $__internal_490a1c0833955c91cb45dec8c5e9c59fc472c4d3af90503c8422f3d4690211b4->leave($__internal_490a1c0833955c91cb45dec8c5e9c59fc472c4d3af90503c8422f3d4690211b4_prof);

    }

    // line 88
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_440fd36d0d54fe72a63a6bafcdfc1f51a5da13f5fceb610027ed1c0a7cd4af6d = $this->env->getExtension("native_profiler");
        $__internal_440fd36d0d54fe72a63a6bafcdfc1f51a5da13f5fceb610027ed1c0a7cd4af6d->enter($__internal_440fd36d0d54fe72a63a6bafcdfc1f51a5da13f5fceb610027ed1c0a7cd4af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 89
        echo "                      
                  ";
        
        $__internal_440fd36d0d54fe72a63a6bafcdfc1f51a5da13f5fceb610027ed1c0a7cd4af6d->leave($__internal_440fd36d0d54fe72a63a6bafcdfc1f51a5da13f5fceb610027ed1c0a7cd4af6d_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1df365a679cc0b8f6295f2f54a07e6838dc435f0f50df23319c6145dd5abaa15 = $this->env->getExtension("native_profiler");
        $__internal_1df365a679cc0b8f6295f2f54a07e6838dc435f0f50df23319c6145dd5abaa15->enter($__internal_1df365a679cc0b8f6295f2f54a07e6838dc435f0f50df23319c6145dd5abaa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 99
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 99)->display($context);
        // line 100
        echo "            ";
        
        $__internal_1df365a679cc0b8f6295f2f54a07e6838dc435f0f50df23319c6145dd5abaa15->leave($__internal_1df365a679cc0b8f6295f2f54a07e6838dc435f0f50df23319c6145dd5abaa15_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2d3f4dfa9b9e53fea85c8a5dcc1cccb34bb7833a2fd25efdf1fd453100e1f8c = $this->env->getExtension("native_profiler");
        $__internal_e2d3f4dfa9b9e53fea85c8a5dcc1cccb34bb7833a2fd25efdf1fd453100e1f8c->enter($__internal_e2d3f4dfa9b9e53fea85c8a5dcc1cccb34bb7833a2fd25efdf1fd453100e1f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "
            <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/move-top.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/easing.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\">
              jQuery(document).ready(function(\$) {
                \$(\".scroll\").click(function(event){   
                  event.preventDefault();
                  \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
                });
              });
            </script>
            <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

             <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script',\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/analytics.js"), "html", null, true);
        echo "\",'ga');
        ga('create', 'UA-30027142-1', 'w3layouts.com');
          ga('send', 'pageview');
        </script>
        <script async type='text/javascript' src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/fancybar6a2f.js?zoneid=1502,serve=C6ADVKE,placement=w3layouts"), "html", null, true);
        echo "\"  id='_fancybar_js'></script>


            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script>
            \$(document).ready(function(){
                \$(\".dropdown\").hover(            
                    function() {
                        \$('.dropdown-menu', this).stop( true, true ).slideDown(\"fast\");
                        \$(this).toggleClass('open');        
                    },
                    function() {
                        \$('.dropdown-menu', this).stop( true, true ).slideUp(\"fast\");
                        \$(this).toggleClass('open');       
                    }
                );
            });
            </script>
            <!-- here stars scrolling icon -->
              <script type=\"text/javascript\">
                \$(document).ready(function() {
                  /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                  */
                            
                  \$().UItoTop({ easingType: 'easeOutQuart' });
                            
                  });
              </script>
            <!-- //here ends scrolling icon -->
            <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/minicart.min.js"), "html", null, true);
        echo "\"></script>
            <script>
              // Mini Cart
              paypal.minicart.render({
                action: '#'
              });
              if (~window.location.search.indexOf('reset=true')) {
                paypal.minicart.reset();
              }
            </script>

            <!-- script-for sticky-nav -->
            <script>
            \$(document).ready(function() {
               var navoffeset=\$(\".agileits_header\").offset().top;
               \$(window).scroll(function(){
                var scrollpos=\$(window).scrollTop(); 
                if(scrollpos >=navoffeset){
                  \$(\".agileits_header\").addClass(\"fixed\");
                }else{
                  \$(\".agileits_header\").removeClass(\"fixed\");
                }
               });
               
            });
            </script>
          <!-- //script-for sticky-nav -->

        ";
        
        $__internal_e2d3f4dfa9b9e53fea85c8a5dcc1cccb34bb7833a2fd25efdf1fd453100e1f8c->leave($__internal_e2d3f4dfa9b9e53fea85c8a5dcc1cccb34bb7833a2fd25efdf1fd453100e1f8c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  424 => 163,  389 => 131,  382 => 127,  375 => 123,  356 => 107,  352 => 106,  349 => 105,  343 => 104,  336 => 100,  333 => 99,  327 => 98,  319 => 89,  313 => 88,  303 => 91,  301 => 88,  279 => 68,  273 => 67,  249 => 59,  245 => 58,  239 => 54,  233 => 53,  226 => 95,  224 => 67,  221 => 66,  219 => 53,  216 => 52,  210 => 51,  203 => 48,  200 => 47,  194 => 46,  184 => 32,  179 => 30,  173 => 27,  167 => 24,  161 => 21,  156 => 19,  152 => 18,  148 => 16,  142 => 15,  130 => 12,  119 => 6,  113 => 5,  104 => 37,  100 => 35,  98 => 15,  94 => 13,  92 => 12,  89 => 11,  86 => 5,  80 => 4,  71 => 192,  69 => 104,  64 => 101,  62 => 98,  58 => 96,  56 => 51,  52 => 49,  50 => 46,  41 => 39,  39 => 4,  34 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block head %}*/
/*             {% block meta %}*/
/*                 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*                 <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*                 <meta name="keywords" content="Ecommerce, Hotels, Cultures, Produits, Zinguinchor, Casamance, Sénégal" />*/
/* */
/*             {% endblock %}*/
/*             <title>*/
/*                 {% block title %}E-commerce{% endblock %}*/
/*             </title>*/
/* */
/*             {% block stylesheets %}*/
/* */
/*                 <!-- //for-mobile-apps -->*/
/*                 <link href="{{ asset('bundles/Ecommerce/css/style.css') }}" rel="stylesheet">*/
/*                 <link href="{{ asset('bundles/Ecommerce/css/bootstrap.css') }}" rel="stylesheet"> */
/* */
/*                 <link href="{{ asset('bundles/Ecommerce/css/style.css') }}" rel="stylesheet">*/
/* */
/*                 <!-- font-awesome icons -->*/
/*                 <link href="{{ asset('bundles/Ecommerce/css/font-awesome.css') }}" rel="stylesheet">*/
/*                 <!-- //font-awesome icons -->*/
/*                 <!-- js --> */
/*                 <script src="{{ asset('bundles/Ecommerce/js/jquery-1.11.1.min.js') }}"></script>*/
/*                 <!-- //js --> */
/* */
/*                 <link href="{{ asset('http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic') }}" rel="stylesheet">*/
/* */
/*                 <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic') }}" rel="stylesheet">*/
/* */
/*             {% endblock %}*/
/* */
/* */
/*             <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/* */
/* */
/* */
/*         {% block header %}*/
/*                 {% include "::header.html.twig" %}*/
/*         {% endblock %}*/
/* */
/* */
/*         {% block body %}*/
/* */
/*             {% block barre_menu %}*/
/*                 <!-- products-breadcrumb -->*/
/*                 <div class="products-breadcrumb">*/
/*                   <div class="container">*/
/*                     <ul>*/
/*                       <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ path('homepage') }}">Accueil</a><span>|</span></li>*/
/*                       <li>{% block barre_location %}{% endblock %}</li>*/
/* */
/*                     </ul>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*             {% endblock %}*/
/* */
/*             {% block body_content %}*/
/*               <!-- banner -->*/
/*                 <div class="banner">*/
/*                   <div class="w3l_banner_nav_left">*/
/*                     <nav class="navbar nav_bottom">*/
/*                      <!-- Brand and toggle get grouped for better mobile display -->*/
/*                       <div class="navbar-header nav_2">*/
/*                         <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         </button>*/
/*                        </div> */
/*                        <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                       <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">*/
/*                         */
/*                        </div><!-- /.navbar-collapse -->*/
/*                     </nav>*/
/*                   </div>*/
/*                   */
/*                   {% block le_contenu %}*/
/*                       */
/*                   {% endblock %}*/
/* */
/*                 </div>*/
/*               <!-- //newsletter -->*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/* */
/*         <footer>*/
/*             {% block footer %}*/
/*                 {% include "::footer.html.twig" %}*/
/*             {% endblock %}*/
/*         </footer>*/
/*         */
/* */
/*         {% block javascripts %}*/
/* */
/*             <script src="{{ asset('bundles/Ecommerce/js/move-top.js') }}"></script>*/
/*             <script src="{{ asset('bundles/Ecommerce/js/easing.js') }}"></script>*/
/* */
/*             <script type="text/javascript">*/
/*               jQuery(document).ready(function($) {*/
/*                 $(".scroll").click(function(event){   */
/*                   event.preventDefault();*/
/*                   $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);*/
/*                 });*/
/*               });*/
/*             </script>*/
/*             <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* */
/*              <script>*/
/*           (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*           })(window,document,'script',"{{ asset('bundles/Ecommerce/js/analytics.js') }}",'ga');*/
/*         ga('create', 'UA-30027142-1', 'w3layouts.com');*/
/*           ga('send', 'pageview');*/
/*         </script>*/
/*         <script async type='text/javascript' src="{{ asset('bundles/Ecommerce/js/fancybar6a2f.js?zoneid=1502,serve=C6ADVKE,placement=w3layouts') }}"  id='_fancybar_js'></script>*/
/* */
/* */
/*             <!-- Bootstrap Core JavaScript -->*/
/*             <script src="{{ asset('bundles/Ecommerce/js/bootstrap.min.js') }}"></script>*/
/*             <script>*/
/*             $(document).ready(function(){*/
/*                 $(".dropdown").hover(            */
/*                     function() {*/
/*                         $('.dropdown-menu', this).stop( true, true ).slideDown("fast");*/
/*                         $(this).toggleClass('open');        */
/*                     },*/
/*                     function() {*/
/*                         $('.dropdown-menu', this).stop( true, true ).slideUp("fast");*/
/*                         $(this).toggleClass('open');       */
/*                     }*/
/*                 );*/
/*             });*/
/*             </script>*/
/*             <!-- here stars scrolling icon -->*/
/*               <script type="text/javascript">*/
/*                 $(document).ready(function() {*/
/*                   /**/
/*                     var defaults = {*/
/*                     containerID: 'toTop', // fading element id*/
/*                     containerHoverID: 'toTopHover', // fading element hover id*/
/*                     scrollSpeed: 1200,*/
/*                     easingType: 'linear' */
/*                     };*/
/*                   *//* */
/*                             */
/*                   $().UItoTop({ easingType: 'easeOutQuart' });*/
/*                             */
/*                   });*/
/*               </script>*/
/*             <!-- //here ends scrolling icon -->*/
/*             <script src="{{ asset('bundles/Ecommerce/js/minicart.min.js') }}"></script>*/
/*             <script>*/
/*               // Mini Cart*/
/*               paypal.minicart.render({*/
/*                 action: '#'*/
/*               });*/
/*               if (~window.location.search.indexOf('reset=true')) {*/
/*                 paypal.minicart.reset();*/
/*               }*/
/*             </script>*/
/* */
/*             <!-- script-for sticky-nav -->*/
/*             <script>*/
/*             $(document).ready(function() {*/
/*                var navoffeset=$(".agileits_header").offset().top;*/
/*                $(window).scroll(function(){*/
/*                 var scrollpos=$(window).scrollTop(); */
/*                 if(scrollpos >=navoffeset){*/
/*                   $(".agileits_header").addClass("fixed");*/
/*                 }else{*/
/*                   $(".agileits_header").removeClass("fixed");*/
/*                 }*/
/*                });*/
/*                */
/*             });*/
/*             </script>*/
/*           <!-- //script-for sticky-nav -->*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
