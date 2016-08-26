<?php

/* HotelBundle:Default:index.html.twig */
class __TwigTemplate_4703ca951808837bb403a7e569fc2cbb38054d76588834c76f8d8a1def7bc50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HotelBundle:Default:index.html.twig", 1);
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
        $__internal_6e4416fa92732f0b3306d4c4c9d4b0d5eafc1a8299ab1f5fae4ab8440538d4cd = $this->env->getExtension("native_profiler");
        $__internal_6e4416fa92732f0b3306d4c4c9d4b0d5eafc1a8299ab1f5fae4ab8440538d4cd->enter($__internal_6e4416fa92732f0b3306d4c4c9d4b0d5eafc1a8299ab1f5fae4ab8440538d4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HotelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4416fa92732f0b3306d4c4c9d4b0d5eafc1a8299ab1f5fae4ab8440538d4cd->leave($__internal_6e4416fa92732f0b3306d4c4c9d4b0d5eafc1a8299ab1f5fae4ab8440538d4cd_prof);

    }

    // line 2
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_86ca3a02bc4788ffebcfaa6363f88849007cbec21d61597982a67c0e5f45f4bf = $this->env->getExtension("native_profiler");
        $__internal_86ca3a02bc4788ffebcfaa6363f88849007cbec21d61597982a67c0e5f45f4bf->enter($__internal_86ca3a02bc4788ffebcfaa6363f88849007cbec21d61597982a67c0e5f45f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_86ca3a02bc4788ffebcfaa6363f88849007cbec21d61597982a67c0e5f45f4bf->leave($__internal_86ca3a02bc4788ffebcfaa6363f88849007cbec21d61597982a67c0e5f45f4bf_prof);

    }

    // line 4
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_1ddf65499eff3c62388a0e374b5f1ffdf1dd462ee8acdd2acf7dc65499f918a1 = $this->env->getExtension("native_profiler");
        $__internal_1ddf65499eff3c62388a0e374b5f1ffdf1dd462ee8acdd2acf7dc65499f918a1->enter($__internal_1ddf65499eff3c62388a0e374b5f1ffdf1dd462ee8acdd2acf7dc65499f918a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 5
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
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" property=\"\" />
\t      <script defer src=\"";
        // line 38
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
        // line 122
        echo "


<div class=\"ong\">


</div>




\t
";
        
        $__internal_1ddf65499eff3c62388a0e374b5f1ffdf1dd462ee8acdd2acf7dc65499f918a1->leave($__internal_1ddf65499eff3c62388a0e374b5f1ffdf1dd462ee8acdd2acf7dc65499f918a1_prof);

    }

    // line 104
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_80d83e79865afe4b7e08450ed4a6737de0dca3ff07cf7257f6dcd66ddb7544f5 = $this->env->getExtension("native_profiler");
        $__internal_80d83e79865afe4b7e08450ed4a6737de0dca3ff07cf7257f6dcd66ddb7544f5->enter($__internal_80d83e79865afe4b7e08450ed4a6737de0dca3ff07cf7257f6dcd66ddb7544f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 105
        echo "  <div class=\"forn\">
  <ul class=\"menu-vertical\">
  <li class=\"mv-item\" ><a href=\"short-codes.html\">Nos Meilleurs Produits</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Meilleurs hotels</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Meilleurs restaurant</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Evasion</a></li>
  </ul>
</div>

<div class=\"fleche_gauche\">


</div>



";
        
        $__internal_80d83e79865afe4b7e08450ed4a6737de0dca3ff07cf7257f6dcd66ddb7544f5->leave($__internal_80d83e79865afe4b7e08450ed4a6737de0dca3ff07cf7257f6dcd66ddb7544f5_prof);

    }

    public function getTemplateName()
    {
        return "HotelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 105,  172 => 104,  153 => 122,  151 => 104,  141 => 96,  130 => 82,  113 => 62,  91 => 38,  87 => 37,  53 => 5,  47 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block barre_menu %}{% endblock %}*/
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
/* */
/* */
/* */
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
/* </div>*/
/* */
/* <div class="fleche_gauche">*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* <div class="ong">*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* 	*/
/* {% endblock %}*/
/* */
/* */
