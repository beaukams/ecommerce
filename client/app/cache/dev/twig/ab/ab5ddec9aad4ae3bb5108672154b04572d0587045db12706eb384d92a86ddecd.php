<?php

/* default/index.html.twig */
class __TwigTemplate_09e151c037cccedaa4dcc2c25fd151d3478c63141c45e040766b6167840a9689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'barre_menu' => array($this, 'block_barre_menu'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52e162b3c240ad5fd8ca080a70d6de093086aaf68f72b7eac9b5bac05ead0697 = $this->env->getExtension("native_profiler");
        $__internal_52e162b3c240ad5fd8ca080a70d6de093086aaf68f72b7eac9b5bac05ead0697->enter($__internal_52e162b3c240ad5fd8ca080a70d6de093086aaf68f72b7eac9b5bac05ead0697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52e162b3c240ad5fd8ca080a70d6de093086aaf68f72b7eac9b5bac05ead0697->leave($__internal_52e162b3c240ad5fd8ca080a70d6de093086aaf68f72b7eac9b5bac05ead0697_prof);

    }

    // line 2
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_2f2e90105391b0060c233545673d550d4ba0835266704287826a50fbb0b3e098 = $this->env->getExtension("native_profiler");
        $__internal_2f2e90105391b0060c233545673d550d4ba0835266704287826a50fbb0b3e098->enter($__internal_2f2e90105391b0060c233545673d550d4ba0835266704287826a50fbb0b3e098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_2f2e90105391b0060c233545673d550d4ba0835266704287826a50fbb0b3e098->leave($__internal_2f2e90105391b0060c233545673d550d4ba0835266704287826a50fbb0b3e098_prof);

    }

    // line 4
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_47766e490499bd7e34f36a4a7412fd0e8c0487a0baa632110b1f22e3438010b7 = $this->env->getExtension("native_profiler");
        $__internal_47766e490499bd7e34f36a4a7412fd0e8c0487a0baa632110b1f22e3438010b7->enter($__internal_47766e490499bd7e34f36a4a7412fd0e8c0487a0baa632110b1f22e3438010b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 5
        echo "  <ul class=\"nav navbar-nav nav_1\">
  <li><a class= \"coul\" href=\"short-codes.html\">Accueil</a></li>
  <li><a href=\"short-codes.html\">Boutique</a></li>
  <li><a href=\"short-codes.html\">Hotels et Restaurants</a></li>
  <li><a href=\"short-codes.html\">Cultures</a></li>
</ul>
";
        
        $__internal_47766e490499bd7e34f36a4a7412fd0e8c0487a0baa632110b1f22e3438010b7->leave($__internal_47766e490499bd7e34f36a4a7412fd0e8c0487a0baa632110b1f22e3438010b7_prof);

    }

    // line 14
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_1fd8172964e34d1e578cd1fb2bd791ccca46c817f4beefbd593b947bbde9f3aa = $this->env->getExtension("native_profiler");
        $__internal_1fd8172964e34d1e578cd1fb2bd791ccca46c817f4beefbd593b947bbde9f3aa->enter($__internal_1fd8172964e34d1e578cd1fb2bd791ccca46c817f4beefbd593b947bbde9f3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 15
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
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" property=\"\" />
\t      <script defer src=\"";
        // line 48
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
        // line 69
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t<!-- banner -->
\t<div class=\"banner_bottom\">
\t    <div class=\"wthree_banner_bottom_left_grid_sub\">
\t    </div>
\t    <div class=\"wthree_banner_bottom_left_grid_sub1\">
\t      <div class=\"col-md-4 wthree_banner_bottom_left\">
\t      </div>
\t      <div class=\"clearfix\"> </div>
\t    </div>
\t    <div class=\"clearfix\"> </div>
\t</div>
\t<!---728x90-->
\t";
        // line 89
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t<!-- top-brands -->
\t<div class=\"top-brands\">
\t  <div class=\"container\">
\t    <h3>Hotels</h3>
\t<!---728x90-->
\t";
        // line 102
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t    <div class=\"agile_top_brands_grids\">
\t        <table class=\"forme\" margin-left=\"200px\" >
\t          <tr>
\t      <div class=\"col-md-3 top_brand_left\">
\t      <td>
\t        <div class=\"hover14 column\">
\t          <div class=\"agile_top_brand_left_grid\"> 
\t            <div class=\"tag\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/tag.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\" >
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img title=\" \" alt=\" \" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/1.png"), "html", null, true);
        echo "\" /></a>    
\t                    <p>fortune sunflower oil</p>
\t                    <h4>\$7.99 <span>\$10.00</span></h4>
\t                  </div>
\t                  <div class=\"snipcart-details top_brand_home_details\">
\t                    <form action=\"#\" method=\"post\">
\t                      <fieldset>
\t                        <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
\t                        <input type=\"hidden\" name=\"add\" value=\"1\" />
\t                        <input type=\"hidden\" name=\"business\" value=\" \" />
\t                        <input type=\"hidden\" name=\"item_name\" value=\"Fortune Sunflower Oil\" />
\t                        <input type=\"hidden\" name=\"amount\" value=\"7.99\" />
\t                        <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
\t                        <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
\t                        <input type=\"hidden\" name=\"return\" value=\" \" />
\t                        <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
\t                        <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
\t                      </fieldset>
\t                    </form>
\t                  </div>
\t                </div>
\t              </figure>
\t            </div>
\t          </div>
\t        </div>
\t        </td>
\t      </div>

\t      <div class=\"col-md-3 top_brand_left\">
\t      <td>
\t        <div class=\"hover14 column\">
\t          <div class=\"agile_top_brand_left_grid\">
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\" >
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img title=\" \" alt=\" \" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/3.png"), "html", null, true);
        echo "\" /></a>    
\t                    <p>basmati rise (5 Kg)</p>
\t                    <h4>\$11.99 <span>\$15.00</span></h4>
\t                  </div>
\t                  <div class=\"snipcart-details top_brand_home_details\">
\t                    <form action=\"#\" method=\"post\">
\t                      <fieldset>
\t                        <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
\t                        <input type=\"hidden\" name=\"add\" value=\"1\" />
\t                        <input type=\"hidden\" name=\"business\" value=\" \" />
\t                        <input type=\"hidden\" name=\"item_name\" value=\"basmati rise\" />
\t                        <input type=\"hidden\" name=\"amount\" value=\"11.99\" />
\t                        <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
\t                        <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
\t                        <input type=\"hidden\" name=\"return\" value=\" \" />
\t                        <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
\t                        <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
\t                      </fieldset>
\t                    </form>
\t                  </div>
\t                </div>
\t              </figure>
\t            </div>
\t          </div>
\t        </div>
\t        </td>
\t      </div>

\t      <div class=\"col-md-3 top_brand_left\">
\t      <td>
\t        <div class=\"hover14 column\">
\t          <div class=\"agile_top_brand_left_grid\">
\t            <div class=\"agile_top_brand_left_grid_pos\">
\t              <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/offer.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t            </div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\">
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/2.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a>
\t                    <p>Pepsi soft drink (2 Ltr)</p>
\t                    <h4>\$8.00 <span>\$10.00</span></h4>
\t                  </div>
\t                  <div class=\"snipcart-details top_brand_home_details\">
\t                    <form action=\"#\" method=\"post\">
\t                      <fieldset>
\t                        <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
\t                        <input type=\"hidden\" name=\"add\" value=\"1\" />
\t                        <input type=\"hidden\" name=\"business\" value=\" \" />
\t                        <input type=\"hidden\" name=\"item_name\" value=\"Pepsi soft drink\" />
\t                        <input type=\"hidden\" name=\"amount\" value=\"8.00\" />
\t                        <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
\t                        <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
\t                        <input type=\"hidden\" name=\"return\" value=\" \" />
\t                        <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
\t                        <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
\t                      </fieldset>
\t                    </form>
\t                  </div>
\t                </div>
\t              </figure>
\t            </div>
\t          </div>
\t        </div>
\t        </td>
\t      </div>
\t      
\t      <div class=\"col-md-3 top_brand_left\">
\t      <td>
\t        <div class=\"hover14 column\">
\t          <div class=\"agile_top_brand_left_grid\">
\t            <div class=\"agile_top_brand_left_grid_pos\">
\t              <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/offer.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t            </div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\">
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/4.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a>
\t                    <p>dogs food (4 Kg)</p>
\t                    <h4>\$9.00 <span>\$11.00</span></h4>
\t                  </div>
\t                  <div class=\"snipcart-details top_brand_home_details\">
\t                    <form action=\"#\" method=\"post\">
\t                      <fieldset>
\t                        <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
\t                        <input type=\"hidden\" name=\"add\" value=\"1\" />
\t                        <input type=\"hidden\" name=\"business\" value=\" \" />
\t                        <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
\t                        <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
\t                        <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
\t                        <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
\t                        <input type=\"hidden\" name=\"return\" value=\" \" />
\t                        <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
\t                        <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
\t                      </fieldset>
\t                    </form>
\t                  </div>
\t                </div>
\t              </figure>
\t            </div>
\t          </div>
\t        </div>
\t        </td>
\t      </div>

\t      <div class=\"clearfix\"> </div>
\t    </div>
\t  </div>
\t</tr>
\t</table>  
\t</div>
\t<!-- //top-brands -->
\t<!-- fresh-vegetables -->
\t


\t      
\t<!-- //fresh-vegetables -->
\t<!-- newsletter -->
\t
";
        
        $__internal_1fd8172964e34d1e578cd1fb2bd791ccca46c817f4beefbd593b947bbde9f3aa->leave($__internal_1fd8172964e34d1e578cd1fb2bd791ccca46c817f4beefbd593b947bbde9f3aa_prof);

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
        return array (  305 => 231,  296 => 225,  260 => 192,  251 => 186,  215 => 153,  176 => 117,  168 => 112,  156 => 102,  146 => 89,  129 => 69,  110 => 48,  106 => 47,  72 => 15,  66 => 14,  53 => 5,  47 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block barre_menu %}{% endblock %}*/
/* */
/* {% block menu_nav %}*/
/*   <ul class="nav navbar-nav nav_1">*/
/*   <li><a class= "coul" href="short-codes.html">Accueil</a></li>*/
/*   <li><a href="short-codes.html">Boutique</a></li>*/
/*   <li><a href="short-codes.html">Hotels et Restaurants</a></li>*/
/*   <li><a href="short-codes.html">Cultures</a></li>*/
/* </ul>*/
/* {% endblock %}*/
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
/* 	<div class="banner_bottom">*/
/* 	    <div class="wthree_banner_bottom_left_grid_sub">*/
/* 	    </div>*/
/* 	    <div class="wthree_banner_bottom_left_grid_sub1">*/
/* 	      <div class="col-md-4 wthree_banner_bottom_left">*/
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
/* 	(adsbygoogle = window.adsbygoogle || []).push({});*/
/* 	</script></div>*/
/* 	<!-- top-brands -->*/
/* 	<div class="top-brands">*/
/* 	  <div class="container">*/
/* 	    <h3>Hotels</h3>*/
/* 	<!---728x90-->*/
/* 	{#<div style="text-align: center;"><script async src="{{ asset('bundles/Ecommerce/js/f.txt')}}"></script>*/
/* 	<ins class="adsbygoogle"*/
/* 	   style="display:inline-block;width:728px;height:90px"*/
/* 	   data-ad-client="ca-pub-9153409599391170"*/
/* 	   data-ad-slot="6850850687"></ins> #}*/
/* 	<script>*/
/* 	(adsbygoogle = window.adsbygoogle || []).push({});*/
/* 	</script></div>*/
/* 	    <div class="agile_top_brands_grids">*/
/* 	        <table class="forme" margin-left="200px" >*/
/* 	          <tr>*/
/* 	      <div class="col-md-3 top_brand_left">*/
/* 	      <td>*/
/* 	        <div class="hover14 column">*/
/* 	          <div class="agile_top_brand_left_grid"> */
/* 	            <div class="tag"><img src="{{ asset('bundles/Ecommerce/images/tag.png') }}" alt=" " class="img-responsive" /></div>*/
/* 	            <div class="agile_top_brand_left_grid1">*/
/* 	              <figure>*/
/* 	                <div class="snipcart-item block" >*/
/* 	                  <div class="snipcart-thumb">*/
/* 	                    <a href="single.html"><img title=" " alt=" " src="{{ asset('bundles/Ecommerce/images/1.png') }}" /></a>    */
/* 	                    <p>fortune sunflower oil</p>*/
/* 	                    <h4>$7.99 <span>$10.00</span></h4>*/
/* 	                  </div>*/
/* 	                  <div class="snipcart-details top_brand_home_details">*/
/* 	                    <form action="#" method="post">*/
/* 	                      <fieldset>*/
/* 	                        <input type="hidden" name="cmd" value="_cart" />*/
/* 	                        <input type="hidden" name="add" value="1" />*/
/* 	                        <input type="hidden" name="business" value=" " />*/
/* 	                        <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />*/
/* 	                        <input type="hidden" name="amount" value="7.99" />*/
/* 	                        <input type="hidden" name="discount_amount" value="1.00" />*/
/* 	                        <input type="hidden" name="currency_code" value="USD" />*/
/* 	                        <input type="hidden" name="return" value=" " />*/
/* 	                        <input type="hidden" name="cancel_return" value=" " />*/
/* 	                        <input type="submit" name="submit" value="Add to cart" class="button" />*/
/* 	                      </fieldset>*/
/* 	                    </form>*/
/* 	                  </div>*/
/* 	                </div>*/
/* 	              </figure>*/
/* 	            </div>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        </td>*/
/* 	      </div>*/
/* */
/* 	      <div class="col-md-3 top_brand_left">*/
/* 	      <td>*/
/* 	        <div class="hover14 column">*/
/* 	          <div class="agile_top_brand_left_grid">*/
/* 	            <div class="agile_top_brand_left_grid1">*/
/* 	              <figure>*/
/* 	                <div class="snipcart-item block" >*/
/* 	                  <div class="snipcart-thumb">*/
/* 	                    <a href="single.html"><img title=" " alt=" " src="{{ asset('bundles/Ecommerce/images/3.png') }}" /></a>    */
/* 	                    <p>basmati rise (5 Kg)</p>*/
/* 	                    <h4>$11.99 <span>$15.00</span></h4>*/
/* 	                  </div>*/
/* 	                  <div class="snipcart-details top_brand_home_details">*/
/* 	                    <form action="#" method="post">*/
/* 	                      <fieldset>*/
/* 	                        <input type="hidden" name="cmd" value="_cart" />*/
/* 	                        <input type="hidden" name="add" value="1" />*/
/* 	                        <input type="hidden" name="business" value=" " />*/
/* 	                        <input type="hidden" name="item_name" value="basmati rise" />*/
/* 	                        <input type="hidden" name="amount" value="11.99" />*/
/* 	                        <input type="hidden" name="discount_amount" value="1.00" />*/
/* 	                        <input type="hidden" name="currency_code" value="USD" />*/
/* 	                        <input type="hidden" name="return" value=" " />*/
/* 	                        <input type="hidden" name="cancel_return" value=" " />*/
/* 	                        <input type="submit" name="submit" value="Add to cart" class="button" />*/
/* 	                      </fieldset>*/
/* 	                    </form>*/
/* 	                  </div>*/
/* 	                </div>*/
/* 	              </figure>*/
/* 	            </div>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        </td>*/
/* 	      </div>*/
/* */
/* 	      <div class="col-md-3 top_brand_left">*/
/* 	      <td>*/
/* 	        <div class="hover14 column">*/
/* 	          <div class="agile_top_brand_left_grid">*/
/* 	            <div class="agile_top_brand_left_grid_pos">*/
/* 	              <img src="{{ asset('bundles/Ecommerce/images/offer.png') }}" alt=" " class="img-responsive" />*/
/* 	            </div>*/
/* 	            <div class="agile_top_brand_left_grid1">*/
/* 	              <figure>*/
/* 	                <div class="snipcart-item block">*/
/* 	                  <div class="snipcart-thumb">*/
/* 	                    <a href="single.html"><img src="{{ asset('bundles/Ecommerce/images/2.png') }}" alt=" " class="img-responsive" /></a>*/
/* 	                    <p>Pepsi soft drink (2 Ltr)</p>*/
/* 	                    <h4>$8.00 <span>$10.00</span></h4>*/
/* 	                  </div>*/
/* 	                  <div class="snipcart-details top_brand_home_details">*/
/* 	                    <form action="#" method="post">*/
/* 	                      <fieldset>*/
/* 	                        <input type="hidden" name="cmd" value="_cart" />*/
/* 	                        <input type="hidden" name="add" value="1" />*/
/* 	                        <input type="hidden" name="business" value=" " />*/
/* 	                        <input type="hidden" name="item_name" value="Pepsi soft drink" />*/
/* 	                        <input type="hidden" name="amount" value="8.00" />*/
/* 	                        <input type="hidden" name="discount_amount" value="1.00" />*/
/* 	                        <input type="hidden" name="currency_code" value="USD" />*/
/* 	                        <input type="hidden" name="return" value=" " />*/
/* 	                        <input type="hidden" name="cancel_return" value=" " />*/
/* 	                        <input type="submit" name="submit" value="Add to cart" class="button" />*/
/* 	                      </fieldset>*/
/* 	                    </form>*/
/* 	                  </div>*/
/* 	                </div>*/
/* 	              </figure>*/
/* 	            </div>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        </td>*/
/* 	      </div>*/
/* 	      */
/* 	      <div class="col-md-3 top_brand_left">*/
/* 	      <td>*/
/* 	        <div class="hover14 column">*/
/* 	          <div class="agile_top_brand_left_grid">*/
/* 	            <div class="agile_top_brand_left_grid_pos">*/
/* 	              <img src="{{ asset('bundles/Ecommerce/images/offer.png') }}" alt=" " class="img-responsive" />*/
/* 	            </div>*/
/* 	            <div class="agile_top_brand_left_grid1">*/
/* 	              <figure>*/
/* 	                <div class="snipcart-item block">*/
/* 	                  <div class="snipcart-thumb">*/
/* 	                    <a href="single.html"><img src="{{ asset('bundles/Ecommerce/images/4.png') }}" alt=" " class="img-responsive" /></a>*/
/* 	                    <p>dogs food (4 Kg)</p>*/
/* 	                    <h4>$9.00 <span>$11.00</span></h4>*/
/* 	                  </div>*/
/* 	                  <div class="snipcart-details top_brand_home_details">*/
/* 	                    <form action="#" method="post">*/
/* 	                      <fieldset>*/
/* 	                        <input type="hidden" name="cmd" value="_cart" />*/
/* 	                        <input type="hidden" name="add" value="1" />*/
/* 	                        <input type="hidden" name="business" value=" " />*/
/* 	                        <input type="hidden" name="item_name" value="dogs food" />*/
/* 	                        <input type="hidden" name="amount" value="9.00" />*/
/* 	                        <input type="hidden" name="discount_amount" value="1.00" />*/
/* 	                        <input type="hidden" name="currency_code" value="USD" />*/
/* 	                        <input type="hidden" name="return" value=" " />*/
/* 	                        <input type="hidden" name="cancel_return" value=" " />*/
/* 	                        <input type="submit" name="submit" value="Add to cart" class="button" />*/
/* 	                      </fieldset>*/
/* 	                    </form>*/
/* 	                  </div>*/
/* 	                </div>*/
/* 	              </figure>*/
/* 	            </div>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        </td>*/
/* 	      </div>*/
/* */
/* 	      <div class="clearfix"> </div>*/
/* 	    </div>*/
/* 	  </div>*/
/* 	</tr>*/
/* 	</table>  */
/* 	</div>*/
/* 	<!-- //top-brands -->*/
/* 	<!-- fresh-vegetables -->*/
/* 	*/
/* */
/* */
/* 	      */
/* 	<!-- //fresh-vegetables -->*/
/* 	<!-- newsletter -->*/
/* 	*/
/* {% endblock %}*/
/* */
/* */
