<?php

/* default/index.html.twig */
class __TwigTemplate_0c2a3d4c00d47b28bef1a84856b690a4c99617d813c805cd1c3a145a744a1d36 extends Twig_Template
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
        $__internal_6eefb55463fee43ec47cf44ce74b2d2b5ce742f41923776525f93718ee4b8a2f = $this->env->getExtension("native_profiler");
        $__internal_6eefb55463fee43ec47cf44ce74b2d2b5ce742f41923776525f93718ee4b8a2f->enter($__internal_6eefb55463fee43ec47cf44ce74b2d2b5ce742f41923776525f93718ee4b8a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eefb55463fee43ec47cf44ce74b2d2b5ce742f41923776525f93718ee4b8a2f->leave($__internal_6eefb55463fee43ec47cf44ce74b2d2b5ce742f41923776525f93718ee4b8a2f_prof);

    }

    // line 2
    public function block_barre_menu($context, array $blocks = array())
    {
        $__internal_e896b83efc0b954f5b5f59c1947c3c9d97a643cd76ef320e646ba94db886e6f4 = $this->env->getExtension("native_profiler");
        $__internal_e896b83efc0b954f5b5f59c1947c3c9d97a643cd76ef320e646ba94db886e6f4->enter($__internal_e896b83efc0b954f5b5f59c1947c3c9d97a643cd76ef320e646ba94db886e6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre_menu"));

        
        $__internal_e896b83efc0b954f5b5f59c1947c3c9d97a643cd76ef320e646ba94db886e6f4->leave($__internal_e896b83efc0b954f5b5f59c1947c3c9d97a643cd76ef320e646ba94db886e6f4_prof);

    }

    // line 4
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_25084b133c59b04d3646aa1676a81be4e8805388408b2698b36d9472ac88d998 = $this->env->getExtension("native_profiler");
        $__internal_25084b133c59b04d3646aa1676a81be4e8805388408b2698b36d9472ac88d998->enter($__internal_25084b133c59b04d3646aa1676a81be4e8805388408b2698b36d9472ac88d998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 5
        echo "  <ul class=\"nav navbar-nav nav_1\">
  <li><a href=\"short-codes.html\">Accueil</a></li>
  <li class=\"dropdown mega-dropdown active\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Boutique<span class=\"caret\"></span></a>        
  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
    <div class=\"w3ls_vegetables\">
      <ul>  
        <li><a href=\"vegetables.html\">Ajouter</a></li>
        <li><a href=\"vegetables.html\">Liste</a></li>
      </ul>
    </div>                  
  </div>        
  </li>
  
  <li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Hotels et Restaurants<span class=\"caret\"></span></a>
  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
    <div class=\"w3ls_vegetables\">
      <ul>
        <li><a href=\"drinks.html\">Nouveau</a></li>
        <li><a href=\"drinks.html\">Liste</a></li>
      </ul>
    </div>                  
  </div>  
  </li>
  <li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Cultures<span class=\"caret\"></span></a>
  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
    <div class=\"w3ls_vegetables\">
      <ul>
        <li><a href=\"frozen.html\">Nouveau</a></li>
        <li><a href=\"frozen.html\">Liste</a></li>
      </ul>
    </div>                  
  </div>  
  </li>
</ul>
";
        
        $__internal_25084b133c59b04d3646aa1676a81be4e8805388408b2698b36d9472ac88d998->leave($__internal_25084b133c59b04d3646aa1676a81be4e8805388408b2698b36d9472ac88d998_prof);

    }

    // line 45
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_5d52f3753f4ba427628f0e417eacaa76ee21107326634a0ead1b588df3d2806a = $this->env->getExtension("native_profiler");
        $__internal_5d52f3753f4ba427628f0e417eacaa76ee21107326634a0ead1b588df3d2806a->enter($__internal_5d52f3753f4ba427628f0e417eacaa76ee21107326634a0ead1b588df3d2806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 46
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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" property=\"\" />
\t      <script defer src=\"";
        // line 79
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
        // line 100
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t<!-- banner -->
\t<div class=\"banner_bottom\">
\t    <div class=\"wthree_banner_bottom_left_grid_sub\">
\t    </div>
\t    <div class=\"wthree_banner_bottom_left_grid_sub1\">
\t      <div class=\"col-md-4 wthree_banner_bottom_left\">
\t        <div class=\"wthree_banner_bottom_left_grid\">
\t          <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/4.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t          <div class=\"wthree_banner_bottom_left_grid_pos\">
\t            <h4>Discount Offer <span>25%</span></h4>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-md-4 wthree_banner_bottom_left\">
\t        <div class=\"wthree_banner_bottom_left_grid\"> 
\t        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/5.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t          <div class=\"wthree_banner_btm_pos\">
\t            <h3>introducing <span>best store</span> for <i>groceries</i></h3>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"col-md-4 wthree_banner_bottom_left\">
\t        <div class=\"wthree_banner_bottom_left_grid\">
\t          <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/6.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t          <div class=\"wthree_banner_btm_pos1\">
\t            <h3>Save <span>Upto</span> \$10</h3>
\t          </div>
\t        </div>
\t      </div>
\t      <div class=\"clearfix\"> </div>
\t    </div>
\t    <div class=\"clearfix\"> </div>
\t</div>
\t<!---728x90-->
\t";
        // line 142
        echo "\t<script>
\t(adsbygoogle = window.adsbygoogle || []).push({});
\t</script></div>
\t<!-- top-brands -->
\t<div class=\"top-brands\">
\t  <div class=\"container\">
\t    <h3>Hotels</h3>
\t<!---728x90-->
\t";
        // line 155
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
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/tag.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\" >
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img title=\" \" alt=\" \" src=\"";
        // line 170
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
        // line 206
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
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/offer.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t            </div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\">
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img src=\"";
        // line 245
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
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/offer.png"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t            </div>
\t            <div class=\"agile_top_brand_left_grid1\">
\t              <figure>
\t                <div class=\"snipcart-item block\">
\t                  <div class=\"snipcart-thumb\">
\t                    <a href=\"single.html\"><img src=\"";
        // line 284
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
\t<div class=\"fresh-vegetables\">
\t  <div class=\"container\">
\t    <h3>Top Products</h3>
\t    <div class=\"w3l_fresh_vegetables_grids\">
\t      <div class=\"col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left\">
\t        <div class=\"w3l_fresh_vegetables_grid2\">
\t          <ul>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">All Brands</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"vegetables.html\">Vegetables</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"vegetables.html\">Fruits</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"drinks.html\">Juices</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"pet.html\">Pet Food</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"bread.html\">Bread & Bakery</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"household.html\">Cleaning</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">Spices</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">Dry Fruits</a></li>
\t            <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">Dairy Products</a></li>
\t          </ul>
\t        </div>
\t      </div>
\t      <div class=\"col-md-9 w3l_fresh_vegetables_grid_right\">
\t        <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
\t          <div class=\"w3l_fresh_vegetables_grid1\">
\t            <img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/8.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t          </div>
\t        </div>
\t        <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
\t          <div class=\"w3l_fresh_vegetables_grid1\">
\t            <div class=\"w3l_fresh_vegetables_grid1_rel\">
\t              <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/7.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t              <div class=\"w3l_fresh_vegetables_grid1_rel_pos\">
\t                <div class=\"more m1\">
\t                  <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Shop now\">Shop now</a>
\t                </div>
\t              </div>
\t            </div>
\t          </div>
\t          <div class=\"w3l_fresh_vegetables_grid1_bottom\">
\t            <img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/10.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t            <div class=\"w3l_fresh_vegetables_grid1_bottom_pos\">
\t              <h5>Special Offers</h5>
\t            </div>
\t          </div>
\t        </div>
\t        <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
\t          <div class=\"w3l_fresh_vegetables_grid1\">
\t            <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/9.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t          </div>
\t          <div class=\"w3l_fresh_vegetables_grid1_bottom\">
\t            <img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/images/11.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
\t          </div>
\t        </div>
\t        <div class=\"clearfix\"> </div>
\t        <div class=\"agileinfo_move_text\">
\t          <div class=\"agileinfo_marquee\">
\t            <h4>get <span class=\"blink_me\">25% off</span> on first order and also get gift voucher</h4>
\t          </div>
\t          <div class=\"agileinfo_breaking_news\">
\t            <span> </span>
\t          </div>
\t          <div class=\"clearfix\"></div>
\t        </div>
\t      </div>
\t      <div class=\"clearfix\"> </div>
\t    </div>
\t  </div>
\t</div>
\t<!-- //fresh-vegetables -->
\t<!-- newsletter -->
\t<div class=\"newsletter\">
\t  <div class=\"container\">
\t    <div class=\"w3agile_newsletter_left\">
\t      <h3>S'abonner pour recevoir les newsletters</h3>
\t    </div>
\t    <div class=\"w3agile_newsletter_right\">
\t      <form action=\"#\" method=\"post\">
\t        <input type=\"email\" name=\"Email\" value=\"\" placeholder=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email@Email.email';}\" required=\"\">
\t        <input type=\"submit\" value=\"Aboonez-vous\">
\t      </form>
\t    </div>
\t    <div class=\"clearfix\"> </div>
\t  </div>
";
        
        $__internal_5d52f3753f4ba427628f0e417eacaa76ee21107326634a0ead1b588df3d2806a->leave($__internal_5d52f3753f4ba427628f0e417eacaa76ee21107326634a0ead1b588df3d2806a_prof);

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
        return array (  467 => 369,  461 => 366,  450 => 358,  438 => 349,  429 => 343,  367 => 284,  358 => 278,  322 => 245,  313 => 239,  277 => 206,  238 => 170,  230 => 165,  218 => 155,  208 => 142,  194 => 126,  183 => 118,  172 => 110,  160 => 100,  141 => 79,  137 => 78,  103 => 46,  97 => 45,  53 => 5,  47 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block barre_menu %}{% endblock %}*/
/* */
/* {% block menu_nav %}*/
/*   <ul class="nav navbar-nav nav_1">*/
/*   <li><a href="short-codes.html">Accueil</a></li>*/
/*   <li class="dropdown mega-dropdown active">*/
/*   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Boutique<span class="caret"></span></a>        */
/*   <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*     <div class="w3ls_vegetables">*/
/*       <ul>  */
/*         <li><a href="vegetables.html">Ajouter</a></li>*/
/*         <li><a href="vegetables.html">Liste</a></li>*/
/*       </ul>*/
/*     </div>                  */
/*   </div>        */
/*   </li>*/
/*   */
/*   <li class="dropdown">*/
/*   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels et Restaurants<span class="caret"></span></a>*/
/*   <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*     <div class="w3ls_vegetables">*/
/*       <ul>*/
/*         <li><a href="drinks.html">Nouveau</a></li>*/
/*         <li><a href="drinks.html">Liste</a></li>*/
/*       </ul>*/
/*     </div>                  */
/*   </div>  */
/*   </li>*/
/*   <li class="dropdown">*/
/*   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cultures<span class="caret"></span></a>*/
/*   <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*     <div class="w3ls_vegetables">*/
/*       <ul>*/
/*         <li><a href="frozen.html">Nouveau</a></li>*/
/*         <li><a href="frozen.html">Liste</a></li>*/
/*       </ul>*/
/*     </div>                  */
/*   </div>  */
/*   </li>*/
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
/* 	        <div class="wthree_banner_bottom_left_grid">*/
/* 	          <img src="{{asset('bundles/Ecommerce/images/4.jpg')}}" alt=" " class="img-responsive" />*/
/* 	          <div class="wthree_banner_bottom_left_grid_pos">*/
/* 	            <h4>Discount Offer <span>25%</span></h4>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	      </div>*/
/* 	      <div class="col-md-4 wthree_banner_bottom_left">*/
/* 	        <div class="wthree_banner_bottom_left_grid"> */
/* 	        <img src="{{asset('bundles/Ecommerce/images/5.jpg')}}" alt=" " class="img-responsive" />*/
/* 	          <div class="wthree_banner_btm_pos">*/
/* 	            <h3>introducing <span>best store</span> for <i>groceries</i></h3>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	      </div>*/
/* 	      <div class="col-md-4 wthree_banner_bottom_left">*/
/* 	        <div class="wthree_banner_bottom_left_grid">*/
/* 	          <img src="{{asset('bundles/Ecommerce/images/6.jpg')}}" alt=" " class="img-responsive" />*/
/* 	          <div class="wthree_banner_btm_pos1">*/
/* 	            <h3>Save <span>Upto</span> $10</h3>*/
/* 	          </div>*/
/* 	        </div>*/
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
/* 	<div class="fresh-vegetables">*/
/* 	  <div class="container">*/
/* 	    <h3>Top Products</h3>*/
/* 	    <div class="w3l_fresh_vegetables_grids">*/
/* 	      <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">*/
/* 	        <div class="w3l_fresh_vegetables_grid2">*/
/* 	          <ul>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>*/
/* 	            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a></li>*/
/* 	          </ul>*/
/* 	        </div>*/
/* 	      </div>*/
/* 	      <div class="col-md-9 w3l_fresh_vegetables_grid_right">*/
/* 	        <div class="col-md-4 w3l_fresh_vegetables_grid">*/
/* 	          <div class="w3l_fresh_vegetables_grid1">*/
/* 	            <img src="{{ asset('bundles/Ecommerce/images/8.jpg') }}" alt=" " class="img-responsive" />*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        <div class="col-md-4 w3l_fresh_vegetables_grid">*/
/* 	          <div class="w3l_fresh_vegetables_grid1">*/
/* 	            <div class="w3l_fresh_vegetables_grid1_rel">*/
/* 	              <img src="{{ asset('bundles/Ecommerce/images/7.jpg') }}" alt=" " class="img-responsive" />*/
/* 	              <div class="w3l_fresh_vegetables_grid1_rel_pos">*/
/* 	                <div class="more m1">*/
/* 	                  <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>*/
/* 	                </div>*/
/* 	              </div>*/
/* 	            </div>*/
/* 	          </div>*/
/* 	          <div class="w3l_fresh_vegetables_grid1_bottom">*/
/* 	            <img src="{{ asset('bundles/Ecommerce/images/10.jpg') }}" alt=" " class="img-responsive" />*/
/* 	            <div class="w3l_fresh_vegetables_grid1_bottom_pos">*/
/* 	              <h5>Special Offers</h5>*/
/* 	            </div>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        <div class="col-md-4 w3l_fresh_vegetables_grid">*/
/* 	          <div class="w3l_fresh_vegetables_grid1">*/
/* 	            <img src="{{ asset('bundles/Ecommerce/images/9.jpg') }}" alt=" " class="img-responsive" />*/
/* 	          </div>*/
/* 	          <div class="w3l_fresh_vegetables_grid1_bottom">*/
/* 	            <img src="{{ asset('bundles/Ecommerce/images/11.jpg') }}" alt=" " class="img-responsive" />*/
/* 	          </div>*/
/* 	        </div>*/
/* 	        <div class="clearfix"> </div>*/
/* 	        <div class="agileinfo_move_text">*/
/* 	          <div class="agileinfo_marquee">*/
/* 	            <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>*/
/* 	          </div>*/
/* 	          <div class="agileinfo_breaking_news">*/
/* 	            <span> </span>*/
/* 	          </div>*/
/* 	          <div class="clearfix"></div>*/
/* 	        </div>*/
/* 	      </div>*/
/* 	      <div class="clearfix"> </div>*/
/* 	    </div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- //fresh-vegetables -->*/
/* 	<!-- newsletter -->*/
/* 	<div class="newsletter">*/
/* 	  <div class="container">*/
/* 	    <div class="w3agile_newsletter_left">*/
/* 	      <h3>S'abonner pour recevoir les newsletters</h3>*/
/* 	    </div>*/
/* 	    <div class="w3agile_newsletter_right">*/
/* 	      <form action="#" method="post">*/
/* 	        <input type="email" name="Email" value="" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email@Email.email';}" required="">*/
/* 	        <input type="submit" value="Aboonez-vous">*/
/* 	      </form>*/
/* 	    </div>*/
/* 	    <div class="clearfix"> </div>*/
/* 	  </div>*/
/* {% endblock %}*/
/* */
/* */
