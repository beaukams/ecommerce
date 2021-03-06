<?php

/* ::base.html.twig */
class __TwigTemplate_df5a8e01ee82586ac4bbe51bd37919e25ceede0e42ed397b7cca8494f625a446 extends Twig_Template
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
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
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
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <meta name=\"keywords\" content=\"Ecommerce, Hotels, Cultures, Produits, Zinguinchor, Casamance, Sénégal\" />

            ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "E-commerce";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        // line 47
        echo "                ";
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 47)->display($context);
        // line 48
        echo "        ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 53
    public function block_barre_menu($context, array $blocks = array())
    {
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
    }

    public function block_barre_location($context, array $blocks = array())
    {
    }

    // line 67
    public function block_body_content($context, array $blocks = array())
    {
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
    }

    // line 88
    public function block_le_contenu($context, array $blocks = array())
    {
        // line 89
        echo "                      
                  ";
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        // line 99
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 99)->display($context);
        // line 100
        echo "            ";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  349 => 163,  314 => 131,  307 => 127,  300 => 123,  281 => 107,  277 => 106,  274 => 105,  271 => 104,  267 => 100,  264 => 99,  261 => 98,  256 => 89,  253 => 88,  246 => 91,  244 => 88,  222 => 68,  219 => 67,  204 => 59,  200 => 58,  194 => 54,  191 => 53,  187 => 95,  185 => 67,  182 => 66,  180 => 53,  177 => 52,  174 => 51,  170 => 48,  167 => 47,  164 => 46,  157 => 32,  152 => 30,  146 => 27,  140 => 24,  134 => 21,  129 => 19,  125 => 18,  121 => 16,  118 => 15,  112 => 12,  104 => 6,  101 => 5,  95 => 37,  91 => 35,  89 => 15,  85 => 13,  83 => 12,  80 => 11,  77 => 5,  74 => 4,  68 => 192,  66 => 104,  61 => 101,  59 => 98,  55 => 96,  53 => 51,  49 => 49,  47 => 46,  38 => 39,  36 => 4,  31 => 1,);
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
