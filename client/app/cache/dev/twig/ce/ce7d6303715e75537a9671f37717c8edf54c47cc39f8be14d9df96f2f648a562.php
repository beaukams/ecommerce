<?php

/* default/index.html.twig */
class __TwigTemplate_2f6b70ee3493f31798264e714e81b2d7f5978dfc523e5f242f5d5cf3faa5696a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'barre_menu' => array($this, 'block_barre_menu'),
            'le_contenu' => array($this, 'block_le_contenu'),
            'menu_nav' => array($this, 'block_menu_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2c0b01046bbcab1939801101dba44eaffca9277efda5fad14548f808150897f = $this->env->getExtension("native_profiler");
        $__internal_b2c0b01046bbcab1939801101dba44eaffca9277efda5fad14548f808150897f->enter($__internal_b2c0b01046bbcab1939801101dba44eaffca9277efda5fad14548f808150897f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2c0b01046bbcab1939801101dba44eaffca9277efda5fad14548f808150897f->leave($__internal_b2c0b01046bbcab1939801101dba44eaffca9277efda5fad14548f808150897f_prof);

    }

    // line 2
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_da9a4f9844a742a99a57e3095dfbfae672c78e0522cfc726f3f84602743f0b83 = $this->env->getExtension("native_profiler");
        $__internal_da9a4f9844a742a99a57e3095dfbfae672c78e0522cfc726f3f84602743f0b83->enter($__internal_da9a4f9844a742a99a57e3095dfbfae672c78e0522cfc726f3f84602743f0b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_da9a4f9844a742a99a57e3095dfbfae672c78e0522cfc726f3f84602743f0b83->leave($__internal_da9a4f9844a742a99a57e3095dfbfae672c78e0522cfc726f3f84602743f0b83_prof);

    }

    // line 7
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_958b703dd9d786155b071630869e243237c8788d4e081591443dcab1d1b42863 = $this->env->getExtension("native_profiler");
        $__internal_958b703dd9d786155b071630869e243237c8788d4e081591443dcab1d1b42863->enter($__internal_958b703dd9d786155b071630869e243237c8788d4e081591443dcab1d1b42863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 8
        echo "\t<div class=\"w3l_banner_nav_right\">
\t    <section class=\"slider\">
\t      <div class=\"flexslider\">
\t        <ul class=\"slides\">
\t          <li>
\t            <div class=\"w3l_banner_nav_right_banner\">
\t              <h3> <span> La Casamance une destination à ne pas manquée</span> </h3>
\t              <div class=\"\">
\t                <a href=\"products.html\" class=\"\" data-text=\"Shop now\"></a>
\t              </div>
\t            </div>
\t          </li>
\t          <li>
\t            <div class=\"w3l_banner_nav_right_banner1\">
\t              <h3> <span> </span> </h3>
\t              <div class=\"\">
\t                <a href=\"products.html\" class=\"\" data-text=\"Shop now\"> </a>
\t              </div>
\t            </div>
\t          </li>
\t          <li>
\t            <div class=\"w3l_banner_nav_right_banner2\">
\t              <h3>  <i> </i>  </h3>
\t              <div class=\"\">
\t                <a href=\"products.html\" class=\"\" data-text=\"Shop now\"></a>
\t              </div>
\t            </div>
\t          </li>
\t        </ul>
\t      </div>
\t    </section>
\t    <!-- flexSlider -->
\t      <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" property=\"\" />
\t      <script defer src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
\t      <script type=\"text/javascript\">
\t      \$(window).load(function(){
\t        \$('.flexslider').flexslider({
\t        animation: \"slide\",
\t        start: function(slider){
\t          \$('body').removeClass('loading');
\t        }
\t        });
\t      });
\t      </script>
\t    <!-- //flexSlider -->
\t  </div>
\t  <div class=\"clearfix\"></div>
\t</div>
\t<!--728x90-->
\t";
        // line 62
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t<!-- banner -->
\t<div class=\"\">
\t    <div class=\"\">
\t    </div>
\t    <div class=\"\">
\t      <div class=\"\">
\t      </div>
\t      <div class=\"clearfix\"> </div>
\t    </div>
\t    <div class=\"clearfix\"> </div>
\t</div>
\t<!---728x90-->
\t";
        // line 82
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({}); 

\t</script></div>
\t<!-- top-brands -->
\t<div class=\"top-brands\">
\t  <div class=\"container\">
\t    <h3></h3>
\t<!---728x90-->
\t";
        // line 96
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script>
\t</div>
\t    



";
        // line 104
        $this->displayBlock('menu_nav', $context, $blocks);
        // line 115
        echo "

<div class=\"ong\">




</div>

\t
";
        
        $__internal_958b703dd9d786155b071630869e243237c8788d4e081591443dcab1d1b42863->leave($__internal_958b703dd9d786155b071630869e243237c8788d4e081591443dcab1d1b42863_prof);

    }

    // line 104
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_6c2815101a5b745d8ed8a6f6bb38b245d872fce71a831b3dda61d7101938343f = $this->env->getExtension("native_profiler");
        $__internal_6c2815101a5b745d8ed8a6f6bb38b245d872fce71a831b3dda61d7101938343f->enter($__internal_6c2815101a5b745d8ed8a6f6bb38b245d872fce71a831b3dda61d7101938343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 105
        echo "  <div class=\"forn\">
  <ul class=\"menu-vertical\">
  <li class=\"mv-item\" ><a href=\"short-codes.html\">Nos Meilleurs Produits</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Meilleurs hotels</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Meilleurs restaurant</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Evasion</a></li>
  </ul>
  </div>

";
        
        $__internal_6c2815101a5b745d8ed8a6f6bb38b245d872fce71a831b3dda61d7101938343f->leave($__internal_6c2815101a5b745d8ed8a6f6bb38b245d872fce71a831b3dda61d7101938343f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 105,  167 => 104,  150 => 115,  148 => 104,  138 => 96,  127 => 82,  110 => 62,  91 => 41,  87 => 40,  53 => 8,  47 => 7,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block barre_menu %}{% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block le_contenu %}*/
/* 	<div class="w3l_banner_nav_right">*/
/* 	    <section class="slider">*/
/* 	      <div class="flexslider">*/
/* 	        <ul class="slides">*/
/* 	          <li>*/
/* 	            <div class="w3l_banner_nav_right_banner">*/
/* 	              <h3> <span> La Casamance une destination à ne pas manquée</span> </h3>*/
/* 	              <div class="">*/
/* 	                <a href="products.html" class="" data-text="Shop now"></a>*/
/* 	              </div>*/
/* 	            </div>*/
/* 	          </li>*/
/* 	          <li>*/
/* 	            <div class="w3l_banner_nav_right_banner1">*/
/* 	              <h3> <span> </span> </h3>*/
/* 	              <div class="">*/
/* 	                <a href="products.html" class="" data-text="Shop now"> </a>*/
/* 	              </div>*/
/* 	            </div>*/
/* 	          </li>*/
/* 	          <li>*/
/* 	            <div class="w3l_banner_nav_right_banner2">*/
/* 	              <h3>  <i> </i>  </h3>*/
/* 	              <div class="">*/
/* 	                <a href="products.html" class="" data-text="Shop now"></a>*/
/* 	              </div>*/
/* 	            </div>*/
/* 	          </li>*/
/* 	        </ul>*/
/* 	      </div>*/
/* 	    </section>*/
/* 	    <!-- flexSlider -->*/
/* 	      <link rel="stylesheet" href="{{ asset('bundles/Ecommerce/css/flexslider.css') }}" type="text/css" media="screen" property="" />*/
/* 	      <script defer src="{{ asset('bundles/Ecommerce/js/jquery.flexslider.js') }}"></script>*/
/* 	      <script type="text/javascript">*/
/* 	      $(window).load(function(){*/
/* 	        $('.flexslider').flexslider({*/
/* 	        animation: "slide",*/
/* 	        start: function(slider){*/
/* 	          $('body').removeClass('loading');*/
/* 	        }*/
/* 	        });*/
/* 	      });*/
/* 	      </script>*/
/* 	    <!-- //flexSlider -->*/
/* 	  </div>*/
/* 	  <div class="clearfix"></div>*/
/* 	</div>*/
/* 	<!--728x90-->*/
/* 	{# <div style="text-align: center;"><script async src="{{ asset('bundles/Ecommerce/js/f.txt')}}"></script>*/
/* 	<ins class="adsbygoogle"*/
/* 	   style="display:inline-block;width:728px;height:90px"*/
/* 	   data-ad-client="ca-pub-9153409599391170"*/
/* 	   data-ad-slot="6850850687"></ins> #}*/
/* 	<script>*/
/* 	(adsbygoogle = window.adsbygoogle || []).push({});*/
/* 	</script></div>*/
/* 	<!-- banner -->*/
/* 	<div class="">*/
/* 	    <div class="">*/
/* 	    </div>*/
/* 	    <div class="">*/
/* 	      <div class="">*/
/* 	      </div>*/
/* 	      <div class="clearfix"> </div>*/
/* 	    </div>*/
/* 	    <div class="clearfix"> </div>*/
/* 	</div>*/
/* 	<!---728x90-->*/
/* 	{# <div style="text-align: center;"><script async src="{{ asset('bundles/Ecommerce/js/f.txt')}}"></script>*/
/* 	<ins class="adsbygoogle"*/
/* 	   style="display:inline-block;width:728px;height:90px"*/
/* 	   data-ad-client="ca-pub-9153409599391170"*/
/* 	   data-ad-slot="6850850687"></ins> #}*/
/* 	<script>*/
/* 	(adsbygoogle = window.adsbygoogle || []).push({}); */
/* */
/* 	</script></div>*/
/* 	<!-- top-brands -->*/
/* 	<div class="top-brands">*/
/* 	  <div class="container">*/
/* 	    <h3></h3>*/
/* 	<!---728x90-->*/
/* 	{#<div style="text-align: center;"><script async src="{{ asset('bundles/Ecommerce/js/f.txt')}}"></script>*/
/* 	<ins class="adsbygoogle"*/
/* 	   style="display:block;width:728px;height:90px"*/
/* 	   data-ad-client="ca-pub-9153409599391170"*/
/* 	   data-ad-slot="6850850687"></ins> #}*/
/* 	<script>*/
/* 	(adsbygoogle = window.adsbygoogle || []).push({});*/
/* 	</script>*/
/* 	</div>*/
/* 	    */
/* */
/* */
/* */
/* {% block menu_nav %}*/
/*   <div class="forn">*/
/*   <ul class="menu-vertical">*/
/*   <li class="mv-item" ><a href="short-codes.html">Nos Meilleurs Produits</a></li>*/
/*   <li class="mv-item"><a href="short-codes.html">Meilleurs hotels</a></li>*/
/*   <li class="mv-item"><a href="short-codes.html">Meilleurs restaurant</a></li>*/
/*   <li class="mv-item"><a href="short-codes.html">Evasion</a></li>*/
/*   </ul>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* <div class="ong">*/
/* */
/* */
/* */
/* */
/* </div>*/
/* */
/* 	*/
/* {% endblock %}*/
/* */
/* */
