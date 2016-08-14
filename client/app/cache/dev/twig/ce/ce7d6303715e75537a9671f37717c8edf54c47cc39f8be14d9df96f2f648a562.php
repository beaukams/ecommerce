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
        $__internal_be761416edcdd931af40e98af09fe1e266a5557179efdb856b111ff176dfc67d = $this->env->getExtension("native_profiler");
        $__internal_be761416edcdd931af40e98af09fe1e266a5557179efdb856b111ff176dfc67d->enter($__internal_be761416edcdd931af40e98af09fe1e266a5557179efdb856b111ff176dfc67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be761416edcdd931af40e98af09fe1e266a5557179efdb856b111ff176dfc67d->leave($__internal_be761416edcdd931af40e98af09fe1e266a5557179efdb856b111ff176dfc67d_prof);

    }

    // line 2
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_96bc7127f2497b584e7d4f28a560201853b282dabda802aaf53fbd75b0e2a4af = $this->env->getExtension("native_profiler");
        $__internal_96bc7127f2497b584e7d4f28a560201853b282dabda802aaf53fbd75b0e2a4af->enter($__internal_96bc7127f2497b584e7d4f28a560201853b282dabda802aaf53fbd75b0e2a4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_96bc7127f2497b584e7d4f28a560201853b282dabda802aaf53fbd75b0e2a4af->leave($__internal_96bc7127f2497b584e7d4f28a560201853b282dabda802aaf53fbd75b0e2a4af_prof);

    }

    // line 7
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_9103aed16ab860116a7011dd2f6dfc460a58c5a35dd12247aa226f3e6840993b = $this->env->getExtension("native_profiler");
        $__internal_9103aed16ab860116a7011dd2f6dfc460a58c5a35dd12247aa226f3e6840993b->enter($__internal_9103aed16ab860116a7011dd2f6dfc460a58c5a35dd12247aa226f3e6840993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

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
\t    <h3>Hotels</h3>
\t<!---728x90-->
\t";
        // line 96
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
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/tag.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\" >
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img title=\" \" alt=\" \" src=\"";
        // line 111
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
        // line 147
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





";
        // line 179
        $this->displayBlock('menu_nav', $context, $blocks);
        // line 190
        echo "


<!-- banner -->
\t<div class=\"\">
\t    <div class=\"\">
\t    </div>
\t    <div class=\"\">
\t      <div class=\"\">
\t      </div>
\t      <div class=\"\"> </div>
\t    </div>
\t    <div class=\"\"> </div>
\t</div>
\t<!---728x90-->
\t";
        // line 210
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t<!-- top-brandes -->
\t<div class=\"top-brandes\">
\t  <div class=\"container\">
\t    <h3>Hotels</h3>
\t<!---728x90-->
\t";
        // line 223
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t    <div class=\"agile_top_brands_grids\">
\t        <table class=\"for\" margin-left=\"200px\" >
\t          <tr>
\t      <div class=\"col-md-3 top_brand_left\">
\t      <td>
\t        <div class=\"hover14 column\">
\t          <div class=\"agile_top_brand_left_grid\"> 
\t            <div class=\"tag\"><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/tag.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\" >
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img title=\" \" alt=\" \" src=\"";
        // line 238
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
        // line 274
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
\t      </div>





















\t      <div class=\"col-md-3 top_brand_left\">
\t      <td>
\t        <div class=\"hover14 column\">
\t          <div class=\"agile_top_brand_left_grid\">
\t            <div class=\"agile_top_brand_left_grid_pos\">
\t              <img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/offer.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t            </div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\">
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img src=\"";
        // line 334
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
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/offer.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t            </div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\">
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img src=\"";
        // line 373
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
        
        $__internal_9103aed16ab860116a7011dd2f6dfc460a58c5a35dd12247aa226f3e6840993b->leave($__internal_9103aed16ab860116a7011dd2f6dfc460a58c5a35dd12247aa226f3e6840993b_prof);

    }

    // line 179
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_b662b8af6a6c04221a7cda2652214abcd5ecf55c1d1a4024bde1421ee872c03b = $this->env->getExtension("native_profiler");
        $__internal_b662b8af6a6c04221a7cda2652214abcd5ecf55c1d1a4024bde1421ee872c03b->enter($__internal_b662b8af6a6c04221a7cda2652214abcd5ecf55c1d1a4024bde1421ee872c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 180
        echo "  <div class=\"forn\">
  <ul class=\"menu-vertical\">
  <li class=\"mv-item\" ><a href=\"short-codes.html\">Accueil</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Boutique</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Hotels et Restaurants</a></li>
  <li class=\"mv-item\"><a href=\"short-codes.html\">Cultures</a></li>
  </ul>
  </div>

";
        
        $__internal_b662b8af6a6c04221a7cda2652214abcd5ecf55c1d1a4024bde1421ee872c03b->leave($__internal_b662b8af6a6c04221a7cda2652214abcd5ecf55c1d1a4024bde1421ee872c03b_prof);

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
        return array (  488 => 180,  482 => 179,  431 => 373,  422 => 367,  386 => 334,  377 => 328,  320 => 274,  281 => 238,  273 => 233,  261 => 223,  251 => 210,  234 => 190,  232 => 179,  197 => 147,  158 => 111,  150 => 106,  138 => 96,  127 => 82,  110 => 62,  91 => 41,  87 => 40,  53 => 8,  47 => 7,  36 => 2,  11 => 1,);
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
/* 	    <h3>Hotels</h3>*/
/* 	<!---728x90-->*/
/* 	{#<div style="text-align: center;"><script async src="{{ asset('bundles/Ecommerce/js/f.txt')}}"></script>*/
/* 	<ins class="adsbygoogle"*/
/* 	   style="display:block;width:728px;height:90px"*/
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
/* */
/* */
/* */
/* */
/* {% block menu_nav %}*/
/*   <div class="forn">*/
/*   <ul class="menu-vertical">*/
/*   <li class="mv-item" ><a href="short-codes.html">Accueil</a></li>*/
/*   <li class="mv-item"><a href="short-codes.html">Boutique</a></li>*/
/*   <li class="mv-item"><a href="short-codes.html">Hotels et Restaurants</a></li>*/
/*   <li class="mv-item"><a href="short-codes.html">Cultures</a></li>*/
/*   </ul>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* <!-- banner -->*/
/* 	<div class="">*/
/* 	    <div class="">*/
/* 	    </div>*/
/* 	    <div class="">*/
/* 	      <div class="">*/
/* 	      </div>*/
/* 	      <div class=""> </div>*/
/* 	    </div>*/
/* 	    <div class=""> </div>*/
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
/* 	<!-- top-brandes -->*/
/* 	<div class="top-brandes">*/
/* 	  <div class="container">*/
/* 	    <h3>Hotels</h3>*/
/* 	<!---728x90-->*/
/* 	{#<div style="text-align: center;"><script async src="{{ asset('bundles/Ecommerce/js/f.txt')}}"></script>*/
/* 	<ins class="adsbygoogle"*/
/* 	   style="display:inline-block;width:728px;height:90px; margin-top:20px"*/
/* 	   data-ad-client="ca-pub-9153409599391170"*/
/* 	   data-ad-slot="6850850687"></ins> #}*/
/* 	<script>*/
/* 	(adsbygoogle = window.adsbygoogle || []).push({});*/
/* 	</script></div>*/
/* 	    <div class="agile_top_brands_grids">*/
/* 	        <table class="for" margin-left="200px" >*/
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
/* 	      </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
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
