<?php

/* ::base.html.twig */
class __TwigTemplate_cb362733cc25a6d537ad567ef84d200069b9809d03de4bceb47e009b51664936 extends Twig_Template
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
            'menu_nav' => array($this, 'block_menu_nav'),
            'le_contenu' => array($this, 'block_le_contenu'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d370a1851113e52d4f51dc9eff3fb7e5c8cad873dac80d82eaea41b26db7c17 = $this->env->getExtension("native_profiler");
        $__internal_7d370a1851113e52d4f51dc9eff3fb7e5c8cad873dac80d82eaea41b26db7c17->enter($__internal_7d370a1851113e52d4f51dc9eff3fb7e5c8cad873dac80d82eaea41b26db7c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 98
        echo "
        <footer>
            ";
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "        </footer>
        

        ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "    </body>
</html>
";
        
        $__internal_7d370a1851113e52d4f51dc9eff3fb7e5c8cad873dac80d82eaea41b26db7c17->leave($__internal_7d370a1851113e52d4f51dc9eff3fb7e5c8cad873dac80d82eaea41b26db7c17_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dbae71f39ece0b279557ad6b6cf51e77b67ac4aa2e088a85eccda7721d9a94f = $this->env->getExtension("native_profiler");
        $__internal_3dbae71f39ece0b279557ad6b6cf51e77b67ac4aa2e088a85eccda7721d9a94f->enter($__internal_3dbae71f39ece0b279557ad6b6cf51e77b67ac4aa2e088a85eccda7721d9a94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3dbae71f39ece0b279557ad6b6cf51e77b67ac4aa2e088a85eccda7721d9a94f->leave($__internal_3dbae71f39ece0b279557ad6b6cf51e77b67ac4aa2e088a85eccda7721d9a94f_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_7e4b1e7ec86cc82dca9d8325003390a07699ff633ee04ad4aec497c9800e38d4 = $this->env->getExtension("native_profiler");
        $__internal_7e4b1e7ec86cc82dca9d8325003390a07699ff633ee04ad4aec497c9800e38d4->enter($__internal_7e4b1e7ec86cc82dca9d8325003390a07699ff633ee04ad4aec497c9800e38d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <meta name=\"keywords\" content=\"Ecommerce, Hotels, Cultures, Produits, Zinguinchor, Casamance, Sénégal\" />

            ";
        
        $__internal_7e4b1e7ec86cc82dca9d8325003390a07699ff633ee04ad4aec497c9800e38d4->leave($__internal_7e4b1e7ec86cc82dca9d8325003390a07699ff633ee04ad4aec497c9800e38d4_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6d1a7814f2fcab3951190c9b671b89192c54fea2fee1abc08151240a25eaf14 = $this->env->getExtension("native_profiler");
        $__internal_a6d1a7814f2fcab3951190c9b671b89192c54fea2fee1abc08151240a25eaf14->enter($__internal_a6d1a7814f2fcab3951190c9b671b89192c54fea2fee1abc08151240a25eaf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "E-commerce";
        
        $__internal_a6d1a7814f2fcab3951190c9b671b89192c54fea2fee1abc08151240a25eaf14->leave($__internal_a6d1a7814f2fcab3951190c9b671b89192c54fea2fee1abc08151240a25eaf14_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc7b19a28413167201d80a43ba75fdb86fea86a9b62a1cce31e44fa05a950017 = $this->env->getExtension("native_profiler");
        $__internal_dc7b19a28413167201d80a43ba75fdb86fea86a9b62a1cce31e44fa05a950017->enter($__internal_dc7b19a28413167201d80a43ba75fdb86fea86a9b62a1cce31e44fa05a950017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dc7b19a28413167201d80a43ba75fdb86fea86a9b62a1cce31e44fa05a950017->leave($__internal_dc7b19a28413167201d80a43ba75fdb86fea86a9b62a1cce31e44fa05a950017_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_2ff3694cce051267807ab1521d027ebe6a8b2845e644b0f41ba97fbec78287ad = $this->env->getExtension("native_profiler");
        $__internal_2ff3694cce051267807ab1521d027ebe6a8b2845e644b0f41ba97fbec78287ad->enter($__internal_2ff3694cce051267807ab1521d027ebe6a8b2845e644b0f41ba97fbec78287ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "                ";
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 47)->display($context);
        // line 48
        echo "        ";
        
        $__internal_2ff3694cce051267807ab1521d027ebe6a8b2845e644b0f41ba97fbec78287ad->leave($__internal_2ff3694cce051267807ab1521d027ebe6a8b2845e644b0f41ba97fbec78287ad_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_22da3d16c432cda71ba833bb2c76cfaecf68bb93dbd83aafc3f7609a40f42eee = $this->env->getExtension("native_profiler");
        $__internal_22da3d16c432cda71ba833bb2c76cfaecf68bb93dbd83aafc3f7609a40f42eee->enter($__internal_22da3d16c432cda71ba833bb2c76cfaecf68bb93dbd83aafc3f7609a40f42eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 97
        echo "        ";
        
        $__internal_22da3d16c432cda71ba833bb2c76cfaecf68bb93dbd83aafc3f7609a40f42eee->leave($__internal_22da3d16c432cda71ba833bb2c76cfaecf68bb93dbd83aafc3f7609a40f42eee_prof);

    }

    // line 53
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_b53e3e5ede60c7e7851ba998d3ba2f093544627cdc0bbce9422269963a781e10 = $this->env->getExtension("native_profiler");
        $__internal_b53e3e5ede60c7e7851ba998d3ba2f093544627cdc0bbce9422269963a781e10->enter($__internal_b53e3e5ede60c7e7851ba998d3ba2f093544627cdc0bbce9422269963a781e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

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
        
        $__internal_b53e3e5ede60c7e7851ba998d3ba2f093544627cdc0bbce9422269963a781e10->leave($__internal_b53e3e5ede60c7e7851ba998d3ba2f093544627cdc0bbce9422269963a781e10_prof);

    }

    public function block_barre_location($context, array $blocks = array())
    {
        $__internal_ec03b60df21900d5e1c97f31b39e32a6b4ff0727f49d59c10ce37e319f8be4fc = $this->env->getExtension("native_profiler");
        $__internal_ec03b60df21900d5e1c97f31b39e32a6b4ff0727f49d59c10ce37e319f8be4fc->enter($__internal_ec03b60df21900d5e1c97f31b39e32a6b4ff0727f49d59c10ce37e319f8be4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_location"));

        
        $__internal_ec03b60df21900d5e1c97f31b39e32a6b4ff0727f49d59c10ce37e319f8be4fc->leave($__internal_ec03b60df21900d5e1c97f31b39e32a6b4ff0727f49d59c10ce37e319f8be4fc_prof);

    }

    // line 67
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_8ede384d1de8c55f025018687f35ba5f99b85e2fda8f159c8940c539f99b1a27 = $this->env->getExtension("native_profiler");
        $__internal_8ede384d1de8c55f025018687f35ba5f99b85e2fda8f159c8940c539f99b1a27->enter($__internal_8ede384d1de8c55f025018687f35ba5f99b85e2fda8f159c8940c539f99b1a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

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
                        ";
        // line 83
        $this->displayBlock('menu_nav', $context, $blocks);
        // line 86
        echo "                       </div><!-- /.navbar-collapse -->
                    </nav>
                  </div>
                  
                  ";
        // line 90
        $this->displayBlock('le_contenu', $context, $blocks);
        // line 93
        echo "
                </div>
              <!-- //newsletter -->
            ";
        
        $__internal_8ede384d1de8c55f025018687f35ba5f99b85e2fda8f159c8940c539f99b1a27->leave($__internal_8ede384d1de8c55f025018687f35ba5f99b85e2fda8f159c8940c539f99b1a27_prof);

    }

    // line 83
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_4e65619c1fb5bba851008ea6e8ae457249e48da29de5e8eace2580acb586749e = $this->env->getExtension("native_profiler");
        $__internal_4e65619c1fb5bba851008ea6e8ae457249e48da29de5e8eace2580acb586749e->enter($__internal_4e65619c1fb5bba851008ea6e8ae457249e48da29de5e8eace2580acb586749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 84
        echo "
                        ";
        
        $__internal_4e65619c1fb5bba851008ea6e8ae457249e48da29de5e8eace2580acb586749e->leave($__internal_4e65619c1fb5bba851008ea6e8ae457249e48da29de5e8eace2580acb586749e_prof);

    }

    // line 90
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_b2aa9fc4acc4a3a4a461bd4bdf09cba8bd51c8e63165ece2c04283530f0e4300 = $this->env->getExtension("native_profiler");
        $__internal_b2aa9fc4acc4a3a4a461bd4bdf09cba8bd51c8e63165ece2c04283530f0e4300->enter($__internal_b2aa9fc4acc4a3a4a461bd4bdf09cba8bd51c8e63165ece2c04283530f0e4300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 91
        echo "                      
                  ";
        
        $__internal_b2aa9fc4acc4a3a4a461bd4bdf09cba8bd51c8e63165ece2c04283530f0e4300->leave($__internal_b2aa9fc4acc4a3a4a461bd4bdf09cba8bd51c8e63165ece2c04283530f0e4300_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        $__internal_044c065be21b32a839835ceb913bf037517318e6185f6fe1e93fb517b77bf400 = $this->env->getExtension("native_profiler");
        $__internal_044c065be21b32a839835ceb913bf037517318e6185f6fe1e93fb517b77bf400->enter($__internal_044c065be21b32a839835ceb913bf037517318e6185f6fe1e93fb517b77bf400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 101
        echo "                ";
        $this->loadTemplate("::footer.html.twig", "::base.html.twig", 101)->display($context);
        // line 102
        echo "            ";
        
        $__internal_044c065be21b32a839835ceb913bf037517318e6185f6fe1e93fb517b77bf400->leave($__internal_044c065be21b32a839835ceb913bf037517318e6185f6fe1e93fb517b77bf400_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af6415262ede1e36cff7358156ff8fbb93391a72037dc0e65fd9ec3107bbcf71 = $this->env->getExtension("native_profiler");
        $__internal_af6415262ede1e36cff7358156ff8fbb93391a72037dc0e65fd9ec3107bbcf71->enter($__internal_af6415262ede1e36cff7358156ff8fbb93391a72037dc0e65fd9ec3107bbcf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "
            <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/move-top.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 109
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
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/analytics.js"), "html", null, true);
        echo "\",'ga');
        ga('create', 'UA-30027142-1', 'w3layouts.com');
          ga('send', 'pageview');
        </script>
        <script async type='text/javascript' src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/fancybar6a2f.js?zoneid=1502,serve=C6ADVKE,placement=w3layouts"), "html", null, true);
        echo "\"  id='_fancybar_js'></script>


            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 133
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
        // line 165
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
        
        $__internal_af6415262ede1e36cff7358156ff8fbb93391a72037dc0e65fd9ec3107bbcf71->leave($__internal_af6415262ede1e36cff7358156ff8fbb93391a72037dc0e65fd9ec3107bbcf71_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  442 => 165,  407 => 133,  400 => 129,  393 => 125,  374 => 109,  370 => 108,  367 => 107,  361 => 106,  354 => 102,  351 => 101,  345 => 100,  337 => 91,  331 => 90,  323 => 84,  317 => 83,  307 => 93,  305 => 90,  299 => 86,  297 => 83,  280 => 68,  274 => 67,  250 => 59,  246 => 58,  240 => 54,  234 => 53,  227 => 97,  225 => 67,  222 => 66,  220 => 53,  217 => 52,  211 => 51,  204 => 48,  201 => 47,  195 => 46,  185 => 32,  180 => 30,  174 => 27,  168 => 24,  162 => 21,  157 => 19,  153 => 18,  149 => 16,  143 => 15,  131 => 12,  120 => 6,  114 => 5,  105 => 37,  101 => 35,  99 => 15,  95 => 13,  93 => 12,  90 => 11,  87 => 5,  81 => 4,  72 => 194,  70 => 106,  65 => 103,  63 => 100,  59 => 98,  57 => 51,  53 => 49,  51 => 46,  42 => 39,  40 => 4,  35 => 1,);
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
/*                         {% block menu_nav %}*/
/* */
/*                         {% endblock %}*/
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
