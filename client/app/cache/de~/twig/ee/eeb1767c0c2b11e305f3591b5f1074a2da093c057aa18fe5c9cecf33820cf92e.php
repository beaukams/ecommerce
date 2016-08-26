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
        $__internal_2facaa6e976745dfc69bc0e5e3ba317c80c0890c64720904fa52fb2972cf425a = $this->env->getExtension("native_profiler");
        $__internal_2facaa6e976745dfc69bc0e5e3ba317c80c0890c64720904fa52fb2972cf425a->enter($__internal_2facaa6e976745dfc69bc0e5e3ba317c80c0890c64720904fa52fb2972cf425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2facaa6e976745dfc69bc0e5e3ba317c80c0890c64720904fa52fb2972cf425a->leave($__internal_2facaa6e976745dfc69bc0e5e3ba317c80c0890c64720904fa52fb2972cf425a_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7f607e295d019fff80125e3d57da3915d926113af0d8423b1dd2e9f55013710 = $this->env->getExtension("native_profiler");
        $__internal_c7f607e295d019fff80125e3d57da3915d926113af0d8423b1dd2e9f55013710->enter($__internal_c7f607e295d019fff80125e3d57da3915d926113af0d8423b1dd2e9f55013710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c7f607e295d019fff80125e3d57da3915d926113af0d8423b1dd2e9f55013710->leave($__internal_c7f607e295d019fff80125e3d57da3915d926113af0d8423b1dd2e9f55013710_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e2437d2e785c61aba58c2b5be47c7b619d8e6f3399b80f144c842ab9f91be5d5 = $this->env->getExtension("native_profiler");
        $__internal_e2437d2e785c61aba58c2b5be47c7b619d8e6f3399b80f144c842ab9f91be5d5->enter($__internal_e2437d2e785c61aba58c2b5be47c7b619d8e6f3399b80f144c842ab9f91be5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <meta name=\"keywords\" content=\"Ecommerce, Hotels, Cultures, Produits, Zinguinchor, Casamance, Sénégal\" />

            ";
        
        $__internal_e2437d2e785c61aba58c2b5be47c7b619d8e6f3399b80f144c842ab9f91be5d5->leave($__internal_e2437d2e785c61aba58c2b5be47c7b619d8e6f3399b80f144c842ab9f91be5d5_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c779e439abff58ab3c5d6304307811cf4e0e8fdd5b6fc20a9dbfdb690d52921 = $this->env->getExtension("native_profiler");
        $__internal_8c779e439abff58ab3c5d6304307811cf4e0e8fdd5b6fc20a9dbfdb690d52921->enter($__internal_8c779e439abff58ab3c5d6304307811cf4e0e8fdd5b6fc20a9dbfdb690d52921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "E-commerce";
        
        $__internal_8c779e439abff58ab3c5d6304307811cf4e0e8fdd5b6fc20a9dbfdb690d52921->leave($__internal_8c779e439abff58ab3c5d6304307811cf4e0e8fdd5b6fc20a9dbfdb690d52921_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28ce67e9853fa61da8d83a172f4045359f4fb443a703ddf98240fe8a65cd7b74 = $this->env->getExtension("native_profiler");
        $__internal_28ce67e9853fa61da8d83a172f4045359f4fb443a703ddf98240fe8a65cd7b74->enter($__internal_28ce67e9853fa61da8d83a172f4045359f4fb443a703ddf98240fe8a65cd7b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_28ce67e9853fa61da8d83a172f4045359f4fb443a703ddf98240fe8a65cd7b74->leave($__internal_28ce67e9853fa61da8d83a172f4045359f4fb443a703ddf98240fe8a65cd7b74_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_af50417cf15eded0887ab4dc21ce4be4a5f7076e1b355ce4b74e6d58596928bd = $this->env->getExtension("native_profiler");
        $__internal_af50417cf15eded0887ab4dc21ce4be4a5f7076e1b355ce4b74e6d58596928bd->enter($__internal_af50417cf15eded0887ab4dc21ce4be4a5f7076e1b355ce4b74e6d58596928bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "                ";
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 47)->display($context);
        // line 48
        echo "        ";
        
        $__internal_af50417cf15eded0887ab4dc21ce4be4a5f7076e1b355ce4b74e6d58596928bd->leave($__internal_af50417cf15eded0887ab4dc21ce4be4a5f7076e1b355ce4b74e6d58596928bd_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_d90a83431946a267de683c8546cdf1f771f550cb4f3779c043cec33af5bbebe6 = $this->env->getExtension("native_profiler");
        $__internal_d90a83431946a267de683c8546cdf1f771f550cb4f3779c043cec33af5bbebe6->enter($__internal_d90a83431946a267de683c8546cdf1f771f550cb4f3779c043cec33af5bbebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d90a83431946a267de683c8546cdf1f771f550cb4f3779c043cec33af5bbebe6->leave($__internal_d90a83431946a267de683c8546cdf1f771f550cb4f3779c043cec33af5bbebe6_prof);

    }

    // line 53
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_bda3a8aabce1ffe8d310af118043d839c8c9f95842d1a030c2441d6db3343e8a = $this->env->getExtension("native_profiler");
        $__internal_bda3a8aabce1ffe8d310af118043d839c8c9f95842d1a030c2441d6db3343e8a->enter($__internal_bda3a8aabce1ffe8d310af118043d839c8c9f95842d1a030c2441d6db3343e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

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
        
        $__internal_bda3a8aabce1ffe8d310af118043d839c8c9f95842d1a030c2441d6db3343e8a->leave($__internal_bda3a8aabce1ffe8d310af118043d839c8c9f95842d1a030c2441d6db3343e8a_prof);

    }

    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_0f9c8a9b71893ecff2f1973ea7a91a13a70d843c8704e1302ffc2b960a4eb92d = $this->env->getExtension("native_profiler");
        $__internal_0f9c8a9b71893ecff2f1973ea7a91a13a70d843c8704e1302ffc2b960a4eb92d->enter($__internal_0f9c8a9b71893ecff2f1973ea7a91a13a70d843c8704e1302ffc2b960a4eb92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        
        $__internal_0f9c8a9b71893ecff2f1973ea7a91a13a70d843c8704e1302ffc2b960a4eb92d->leave($__internal_0f9c8a9b71893ecff2f1973ea7a91a13a70d843c8704e1302ffc2b960a4eb92d_prof);

    }

    // line 67
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_422d64063272714bb8c32cf08c3945215b6d2875e9b6dc36012c6e0319af78a2 = $this->env->getExtension("native_profiler");
        $__internal_422d64063272714bb8c32cf08c3945215b6d2875e9b6dc36012c6e0319af78a2->enter($__internal_422d64063272714bb8c32cf08c3945215b6d2875e9b6dc36012c6e0319af78a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

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
        
        $__internal_422d64063272714bb8c32cf08c3945215b6d2875e9b6dc36012c6e0319af78a2->leave($__internal_422d64063272714bb8c32cf08c3945215b6d2875e9b6dc36012c6e0319af78a2_prof);

    }

    // line 88
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_bac8d6b5f8a87f0d0c1ff378711afdf98a85fae97fac12c30a28a50aa5eafefa = $this->env->getExtension("native_profiler");
        $__internal_bac8d6b5f8a87f0d0c1ff378711afdf98a85fae97fac12c30a28a50aa5eafefa->enter($__internal_bac8d6b5f8a87f0d0c1ff378711afdf98a85fae97fac12c30a28a50aa5eafefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 89
        echo "                      
                  ";
        
        $__internal_bac8d6b5f8a87f0d0c1ff378711afdf98a85fae97fac12c30a28a50aa5eafefa->leave($__internal_bac8d6b5f8a87f0d0c1ff378711afdf98a85fae97fac12c30a28a50aa5eafefa_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        $__internal_165eaba30cf6ee5e30371c0d305ac05912b93d69c8d9dd65be4883229fb93c54 = $this->env->getExtension("native_profiler");
        $__internal_165eaba30cf6ee5e30371c0d305ac05912b93d69c8d9dd65be4883229fb93c54->enter($__internal_165eaba30cf6ee5e30371c0d305ac05912b93d69c8d9dd65be4883229fb93c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 99
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 99)->display($context);
        // line 100
        echo "            ";
        
        $__internal_165eaba30cf6ee5e30371c0d305ac05912b93d69c8d9dd65be4883229fb93c54->leave($__internal_165eaba30cf6ee5e30371c0d305ac05912b93d69c8d9dd65be4883229fb93c54_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f8d412a5017b5787a2736bd70701e3d427f4b2490fc58e7044fd1d462633b27 = $this->env->getExtension("native_profiler");
        $__internal_4f8d412a5017b5787a2736bd70701e3d427f4b2490fc58e7044fd1d462633b27->enter($__internal_4f8d412a5017b5787a2736bd70701e3d427f4b2490fc58e7044fd1d462633b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4f8d412a5017b5787a2736bd70701e3d427f4b2490fc58e7044fd1d462633b27->leave($__internal_4f8d412a5017b5787a2736bd70701e3d427f4b2490fc58e7044fd1d462633b27_prof);

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
