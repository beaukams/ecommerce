<?php

/* EcommerceBoutiqueBundle:Default:index.html.twig */
class __TwigTemplate_e1f3332aea396d43cee7ce519a28a78c03d7ee1dcb7b8b1cbf2c4262e5bd5055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c29e3f48b9a8f5e78e970d37e55008263ccfbac166f40d7c85ea3a8856df56a6 = $this->env->getExtension("native_profiler");
        $__internal_c29e3f48b9a8f5e78e970d37e55008263ccfbac166f40d7c85ea3a8856df56a6->enter($__internal_c29e3f48b9a8f5e78e970d37e55008263ccfbac166f40d7c85ea3a8856df56a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<title>Wing the Air</title>
<meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />


 <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!--[if lte IE 6]><style type=\"text/css\" media=\"screen\">.tabbed { height:420px; }</style><![endif]--> 



<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery-1.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery.jcarousel.pack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery.slide.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Ecommerce/js/jquery-func.js"), "html", null, true);
        echo "\"></script>

</head> 

<body>
<!-- Top -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<script async type='text/javascript' src='../../../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>


<!-- header -->
  <div class=\"agileits_header\">
    <div class=\"w3l_offers\">
      <a href=\"products.html\">Today's special Offers !</a>
    </div>
    <div class=\"w3l_search\">
      <form action=\"#\" method=\"post\">
        <input type=\"text\" name=\"Product\" value=\"Search a product...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search a product...';}\" required=\"\">
        <input type=\"submit\" value=\" \">
      </form>
    </div>
    <div class=\"product_list_header\">  
      <form action=\"#\" method=\"post\" class=\"last\">
                <fieldset>
                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                    <input type=\"hidden\" name=\"display\" value=\"1\" />
                    <input type=\"submit\" name=\"submit\" value=\"View your cart\" class=\"button\" />
                </fieldset>
            </form>
    </div>
    <div class=\"w3l_header_right\">
      <ul>
        <li class=\"dropdown profile_details_drop\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i><span class=\"caret\"></span></a>
          <div class=\"mega-dropdown-menu\">
            <div class=\"w3ls_vegetables\">
              <ul class=\"dropdown-menu drp-mnu\">
                <li><a href=\"login.html\">Login</a></li> 
                <li><a href=\"login.html\">Sign Up</a></li>
              </ul>
            </div>                  
          </div>  
        </li>
      </ul>
    </div>
    <div class=\"w3l_header_right1\">
      <h2><a href=\"mail.html\">Contact Us</a></h2>
    </div>
    <div class=\"clearfix\"> </div>
  </div>
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
  <div class=\"logo_products\">
    <div class=\"container\">
      <div class=\"w3ls_logo_products_left\">
        <h1><a href=\"index-2.html\"><span>Grocery</span> Store</a></h1>
      </div>
      <div class=\"w3ls_logo_products_left1\">
        <ul class=\"special_items\">
          <li><a href=\"events.html\">Events</a><i>/</i></li>
          <li><a href=\"about.html\">About Us</a><i>/</i></li>
          <li><a href=\"products.html\">Best Deals</a><i>/</i></li>
          <li><a href=\"services.html\">Services</a></li>
        </ul>
      </div>
      <div class=\"w3ls_logo_products_left1\">
        <ul class=\"phone_email\">
          <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>(+0123) 234 567</li>
          <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i><a href=\"mailto:store@grocery.com\">store@grocery.com</a></li>
        </ul>
      </div>
      <div class=\"clearfix\"> </div>
    </div>
  </div>
<!-- //header -->
<!-- banner -->
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
          <ul class=\"nav navbar-nav nav_1\">
            <li><a href=\"products.html\">Branded Foods</a></li>
            <li><a href=\"household.html\">Households</a></li>
            <li class=\"dropdown mega-dropdown active\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Veggies & Fruits<span class=\"caret\"></span></a>        
              <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
                <div class=\"w3ls_vegetables\">
                  <ul>  
                    <li><a href=\"vegetables.html\">Vegetables</a></li>
                    <li><a href=\"vegetables.html\">Fruits</a></li>
                  </ul>
                </div>                  
              </div>        
            </li>
            <li><a href=\"kitchen.html\">Kitchen</a></li>
            <li><a href=\"short-codes.html\">Short Codes</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Beverages<span class=\"caret\"></span></a>
              <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
                <div class=\"w3ls_vegetables\">
                  <ul>
                    <li><a href=\"drinks.html\">Soft Drinks</a></li>
                    <li><a href=\"drinks.html\">Juices</a></li>
                  </ul>
                </div>                  
              </div>  
            </li>
            <li><a href=\"pet.html\">Pet Food</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Frozen Foods<span class=\"caret\"></span></a>
              <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
                <div class=\"w3ls_vegetables\">
                  <ul>
                    <li><a href=\"frozen.html\">Frozen Snacks</a></li>
                    <li><a href=\"frozen.html\">Frozen Nonveg</a></li>
                  </ul>
                </div>                  
              </div>  
            </li>
            <li><a href=\"bread.html\">Bread & Bakery</a></li>
          </ul>
         </div><!-- /.navbar-collapse -->
      </nav>
    </div>
    <div class=\"w3l_banner_nav_right\">
      <section class=\"slider\">
        <div class=\"flexslider\">
          <ul class=\"slides\">
            <li>
              <div class=\"w3l_banner_nav_right_banner\">
                <h3>Make your <span>food</span> with Spicy.</h3>
                <div class=\"more\">
                  <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Shop now\">Shop now</a>
                </div>
              </div>
            </li>
            <li>
              <div class=\"w3l_banner_nav_right_banner1\">
                <h3>Make your <span>food</span> with Spicy.</h3>
                <div class=\"more\">
                  <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Shop now\">Shop now</a>
                </div>
              </div>
            </li>
            <li>
              <div class=\"w3l_banner_nav_right_banner2\">
                <h3>upto <i>50%</i> off.</h3>
                <div class=\"more\">
                  <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Shop now\">Shop now</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- flexSlider -->
        <link rel=\"stylesheet\" href=\"css/flexslider.css\" type=\"text/css\" media=\"screen\" property=\"\" />
        <script defer src=\"js/jquery.flexslider.js\"></script>
        <script type=\"text/javascript\">
        \$(window).load(function(){
          \$('.flexslider').flexslider({
          animation: \"slide\",
          start: function(slider){
            \$('body').removeClass('loading');
          }
          });
        });
        </script>
      <!-- //flexSlider -->
    </div>
    <div class=\"clearfix\"></div>
  </div>
<!---728x90--->
<div style=\"text-align: center;\"><script async src=\"../../../../../../pagead2.googlesyndication.com/pagead/js/f.txt\"></script>
<ins class=\"adsbygoogle\"
     style=\"display:inline-block;width:728px;height:90px\"
     data-ad-client=\"ca-pub-9153409599391170\"
     data-ad-slot=\"6850850687\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<!-- banner -->
  <div class=\"banner_bottom\">
      <div class=\"wthree_banner_bottom_left_grid_sub\">
      </div>
      <div class=\"wthree_banner_bottom_left_grid_sub1\">
        <div class=\"col-md-4 wthree_banner_bottom_left\">
          <div class=\"wthree_banner_bottom_left_grid\">
            <img src=\"images/4.jpg\" alt=\" \" class=\"img-responsive\" />
            <div class=\"wthree_banner_bottom_left_grid_pos\">
              <h4>Discount Offer <span>25%</span></h4>
            </div>
          </div>
        </div>
        <div class=\"col-md-4 wthree_banner_bottom_left\">
          <div class=\"wthree_banner_bottom_left_grid\">
            <img src=\"images/5.jpg\" alt=\" \" class=\"img-responsive\" />
            <div class=\"wthree_banner_btm_pos\">
              <h3>introducing <span>best store</span> for <i>groceries</i></h3>
            </div>
          </div>
        </div>
        <div class=\"col-md-4 wthree_banner_bottom_left\">
          <div class=\"wthree_banner_bottom_left_grid\">
            <img src=\"images/6.jpg\" alt=\" \" class=\"img-responsive\" />
            <div class=\"wthree_banner_btm_pos1\">
              <h3>Save <span>Upto</span> \$10</h3>
            </div>
          </div>
        </div>
        <div class=\"clearfix\"> </div>
      </div>
      <div class=\"clearfix\"> </div>
  </div>
<!---728x90--->
<div style=\"text-align: center;\"><script async src=\"../../../../../../pagead2.googlesyndication.com/pagead/js/f.txt\"></script>
<ins class=\"adsbygoogle\"
     style=\"display:inline-block;width:728px;height:90px\"
     data-ad-client=\"ca-pub-9153409599391170\"
     data-ad-slot=\"6850850687\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<!-- top-brands -->
  <div class=\"top-brands\">
    <div class=\"container\">
      <h3>Hot Offers</h3>
<!---728x90--->
<div style=\"text-align: center;\"><script async src=\"../../../../../../pagead2.googlesyndication.com/pagead/js/f.txt\"></script>
<ins class=\"adsbygoogle\"
     style=\"display:inline-block;width:728px;height:90px\"
     data-ad-client=\"ca-pub-9153409599391170\"
     data-ad-slot=\"6850850687\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
      <div class=\"agile_top_brands_grids\">
        <div class=\"col-md-3 top_brand_left\">
          <div class=\"hover14 column\">
            <div class=\"agile_top_brand_left_grid\">
              <div class=\"tag\"><img src=\"images/tag.png\" alt=\" \" class=\"img-responsive\" /></div>
              <div class=\"agile_top_brand_left_grid1\">
                <figure>
                  <div class=\"snipcart-item block\" >
                    <div class=\"snipcart-thumb\">
                      <a href=\"single.html\"><img title=\" \" alt=\" \" src=\"images/1.png\" /></a>    
                      <p>fortune sunflower oil</p>
                      <h4>\$7.99 <span>\$10.00</span></h4>
                    </div>
                    <div class=\"snipcart-details top_brand_home_details\">
                      <form action=\"#\" method=\"post\">
                        <fieldset>
                          <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                          <input type=\"hidden\" name=\"add\" value=\"1\" />
                          <input type=\"hidden\" name=\"business\" value=\" \" />
                          <input type=\"hidden\" name=\"item_name\" value=\"Fortune Sunflower Oil\" />
                          <input type=\"hidden\" name=\"amount\" value=\"7.99\" />
                          <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                          <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                          <input type=\"hidden\" name=\"return\" value=\" \" />
                          <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                          <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3 top_brand_left\">
          <div class=\"hover14 column\">
            <div class=\"agile_top_brand_left_grid\">
              <div class=\"agile_top_brand_left_grid1\">
                <figure>
                  <div class=\"snipcart-item block\" >
                    <div class=\"snipcart-thumb\">
                      <a href=\"single.html\"><img title=\" \" alt=\" \" src=\"images/3.png\" /></a>    
                      <p>basmati rise (5 Kg)</p>
                      <h4>\$11.99 <span>\$15.00</span></h4>
                    </div>
                    <div class=\"snipcart-details top_brand_home_details\">
                      <form action=\"#\" method=\"post\">
                        <fieldset>
                          <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                          <input type=\"hidden\" name=\"add\" value=\"1\" />
                          <input type=\"hidden\" name=\"business\" value=\" \" />
                          <input type=\"hidden\" name=\"item_name\" value=\"basmati rise\" />
                          <input type=\"hidden\" name=\"amount\" value=\"11.99\" />
                          <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                          <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                          <input type=\"hidden\" name=\"return\" value=\" \" />
                          <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                          <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3 top_brand_left\">
          <div class=\"hover14 column\">
            <div class=\"agile_top_brand_left_grid\">
              <div class=\"agile_top_brand_left_grid_pos\">
                <img src=\"images/offer.png\" alt=\" \" class=\"img-responsive\" />
              </div>
              <div class=\"agile_top_brand_left_grid1\">
                <figure>
                  <div class=\"snipcart-item block\">
                    <div class=\"snipcart-thumb\">
                      <a href=\"single.html\"><img src=\"images/2.png\" alt=\" \" class=\"img-responsive\" /></a>
                      <p>Pepsi soft drink (2 Ltr)</p>
                      <h4>\$8.00 <span>\$10.00</span></h4>
                    </div>
                    <div class=\"snipcart-details top_brand_home_details\">
                      <form action=\"#\" method=\"post\">
                        <fieldset>
                          <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                          <input type=\"hidden\" name=\"add\" value=\"1\" />
                          <input type=\"hidden\" name=\"business\" value=\" \" />
                          <input type=\"hidden\" name=\"item_name\" value=\"Pepsi soft drink\" />
                          <input type=\"hidden\" name=\"amount\" value=\"8.00\" />
                          <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                          <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                          <input type=\"hidden\" name=\"return\" value=\" \" />
                          <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                          <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-3 top_brand_left\">
          <div class=\"hover14 column\">
            <div class=\"agile_top_brand_left_grid\">
              <div class=\"agile_top_brand_left_grid_pos\">
                <img src=\"images/offer.png\" alt=\" \" class=\"img-responsive\" />
              </div>
              <div class=\"agile_top_brand_left_grid1\">
                <figure>
                  <div class=\"snipcart-item block\">
                    <div class=\"snipcart-thumb\">
                      <a href=\"single.html\"><img src=\"images/4.png\" alt=\" \" class=\"img-responsive\" /></a>
                      <p>dogs food (4 Kg)</p>
                      <h4>\$9.00 <span>\$11.00</span></h4>
                    </div>
                    <div class=\"snipcart-details top_brand_home_details\">
                      <form action=\"#\" method=\"post\">
                        <fieldset>
                          <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                          <input type=\"hidden\" name=\"add\" value=\"1\" />
                          <input type=\"hidden\" name=\"business\" value=\" \" />
                          <input type=\"hidden\" name=\"item_name\" value=\"dogs food\" />
                          <input type=\"hidden\" name=\"amount\" value=\"9.00\" />
                          <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                          <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                          <input type=\"hidden\" name=\"return\" value=\" \" />
                          <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                          <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class=\"clearfix\"> </div>
      </div>
    </div>
  </div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
  <div class=\"fresh-vegetables\">
    <div class=\"container\">
      <h3>Top Products</h3>
      <div class=\"w3l_fresh_vegetables_grids\">
        <div class=\"col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left\">
          <div class=\"w3l_fresh_vegetables_grid2\">
            <ul>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">All Brands</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"vegetables.html\">Vegetables</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"vegetables.html\">Fruits</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"drinks.html\">Juices</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"pet.html\">Pet Food</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"bread.html\">Bread & Bakery</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"household.html\">Cleaning</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">Spices</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">Dry Fruits</a></li>
              <li><i class=\"fa fa-check\" aria-hidden=\"true\"></i><a href=\"products.html\">Dairy Products</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-md-9 w3l_fresh_vegetables_grid_right\">
          <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
            <div class=\"w3l_fresh_vegetables_grid1\">
              <img src=\"images/8.jpg\" alt=\" \" class=\"img-responsive\" />
            </div>
          </div>
          <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
            <div class=\"w3l_fresh_vegetables_grid1\">
              <div class=\"w3l_fresh_vegetables_grid1_rel\">
                <img src=\"images/7.jpg\" alt=\" \" class=\"img-responsive\" />
                <div class=\"w3l_fresh_vegetables_grid1_rel_pos\">
                  <div class=\"more m1\">
                    <a href=\"products.html\" class=\"button--saqui button--round-l button--text-thick\" data-text=\"Shop now\">Shop now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"w3l_fresh_vegetables_grid1_bottom\">
              <img src=\"images/10.jpg\" alt=\" \" class=\"img-responsive\" />
              <div class=\"w3l_fresh_vegetables_grid1_bottom_pos\">
                <h5>Special Offers</h5>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 w3l_fresh_vegetables_grid\">
            <div class=\"w3l_fresh_vegetables_grid1\">
              <img src=\"images/9.jpg\" alt=\" \" class=\"img-responsive\" />
            </div>
            <div class=\"w3l_fresh_vegetables_grid1_bottom\">
              <img src=\"images/11.jpg\" alt=\" \" class=\"img-responsive\" />
            </div>
          </div>
          <div class=\"clearfix\"> </div>
          <div class=\"agileinfo_move_text\">
            <div class=\"agileinfo_marquee\">
              <h4>get <span class=\"blink_me\">25% off</span> on first order and also get gift voucher</h4>
            </div>
            <div class=\"agileinfo_breaking_news\">
              <span> </span>
            </div>
            <div class=\"clearfix\"></div>
          </div>
        </div>
        <div class=\"clearfix\"> </div>
      </div>
    </div>
  </div>
<!-- //fresh-vegetables -->
<!-- newsletter -->
  <div class=\"newsletter\">
    <div class=\"container\">
      <div class=\"w3agile_newsletter_left\">
        <h3>sign up for our newsletter</h3>
      </div>
      <div class=\"w3agile_newsletter_right\">
        <form action=\"#\" method=\"post\">
          <input type=\"email\" name=\"Email\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\" required=\"\">
          <input type=\"submit\" value=\"subscribe now\">
        </form>
      </div>
      <div class=\"clearfix\"> </div>
    </div>
  </div>
<!-- //newsletter -->
<!-- footer -->
  <div class=\"footer\">
    <div class=\"container\">
      <div class=\"col-md-3 w3_footer_grid\">
        <h3>information</h3>
        <ul class=\"w3_footer_grid_list\">
          <li><a href=\"events.html\">Events</a></li>
          <li><a href=\"about.html\">About Us</a></li>
          <li><a href=\"products.html\">Best Deals</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"short-codes.html\">Short Codes</a></li>
        </ul>
      </div>
      <div class=\"col-md-3 w3_footer_grid\">
        <h3>policy info</h3>
        <ul class=\"w3_footer_grid_list\">
          <li><a href=\"faqs.html\">FAQ</a></li>
          <li><a href=\"privacy.html\">privacy policy</a></li>
          <li><a href=\"privacy.html\">terms of use</a></li>
        </ul>
      </div>
      <div class=\"col-md-3 w3_footer_grid\">
        <h3>what in stores</h3>
        <ul class=\"w3_footer_grid_list\">
          <li><a href=\"pet.html\">Pet Food</a></li>
          <li><a href=\"frozen.html\">Frozen Snacks</a></li>
          <li><a href=\"kitchen.html\">Kitchen</a></li>
          <li><a href=\"products.html\">Branded Foods</a></li>
          <li><a href=\"household.html\">Households</a></li>
        </ul>
      </div>
      <div class=\"col-md-3 w3_footer_grid\">
        <h3>twitter posts</h3>
        <ul class=\"w3_footer_grid_list1\">
          <li><label class=\"fa fa-twitter\" aria-hidden=\"true\"></label><i>01 day ago</i><span>Non numquam <a href=\"#\">http://sd.ds/13jklf#</a>
            eius modi tempora incidunt ut labore et
            <a href=\"#\">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
          <li><label class=\"fa fa-twitter\" aria-hidden=\"true\"></label><i>02 day ago</i><span>Con numquam <a href=\"#\">http://fd.uf/56hfg#</a>
            eius modi tempora incidunt ut labore et
            <a href=\"#\">http://fd.uf/56hfg#</a>quo nulla.</span></li>
        </ul>
      </div>
      <div class=\"clearfix\"> </div>
      <div class=\"agile_footer_grids\">
        <div class=\"col-md-3 w3_footer_grid agile_footer_grids_w3_footer\">
          <div class=\"w3_footer_grid_bottom\">
            <h4>100% secure payments</h4>
            <img src=\"images/card.png\" alt=\" \" class=\"img-responsive\" />
          </div>
        </div>
        <div class=\"col-md-3 w3_footer_grid agile_footer_grids_w3_footer\">
          <div class=\"w3_footer_grid_bottom\">
            <h5>connect with us</h5>
            <ul class=\"agileits_social_icons\">
              <li><a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\" class=\"instagram\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\" class=\"dribbble\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
            </ul>
          </div>
        </div>
        <div class=\"clearfix\"> </div>
      </div>
      <div class=\"wthree_footer_copy\">
        <p>© 2016 Grocery Store. All rights reserved | Design by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
      </div>
    </div>
  </div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src=\"js/bootstrap.min.js\"></script>
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
<script src=\"js/minicart.min.js\"></script>
<script>
  // Mini Cart
  paypal.minicart.render({
    action: '#'
  });

  if (~window.location.search.indexOf('reset=true')) {
    paypal.minicart.reset();
  }
</script>
<!-- End Main -->
</body>
</html>
";
        
        $__internal_c29e3f48b9a8f5e78e970d37e55008263ccfbac166f40d7c85ea3a8856df56a6->leave($__internal_c29e3f48b9a8f5e78e970d37e55008263ccfbac166f40d7c85ea3a8856df56a6_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  52 => 17,  48 => 16,  44 => 15,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/* <title>Wing the Air</title>*/
/* <meta http-equiv="Content-type" content="text/html; charset=utf-8" />*/
/* */
/* */
/*  <link href="{{ asset('bundles/Ecommerce/css/style.css') }}" rel="stylesheet">*/
/*  <link href="{{ asset('bundles/Ecommerce/css/bootstrap.css') }}" rel="stylesheet">*/
/* */
/* <!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]--> */
/* */
/* */
/* */
/* <script src="{{ asset('bundles/Ecommerce/js/jquery-1.4.1.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/Ecommerce/js/jquery.jcarousel.pack.js') }}"></script>*/
/* <script src="{{ asset('bundles/Ecommerce/js/jquery.slide.js') }}"></script>*/
/* <script src="{{ asset('bundles/Ecommerce/js/jquery-func.js') }}"></script>*/
/* */
/* </head> */
/* */
/* <body>*/
/* <!-- Top -->*/
/* <script>*/
/*   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*   })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');*/
/* ga('create', 'UA-30027142-1', 'w3layouts.com');*/
/*   ga('send', 'pageview');*/
/* </script>*/
/* <script async type='text/javascript' src='../../../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>*/
/* */
/* */
/* <!-- header -->*/
/*   <div class="agileits_header">*/
/*     <div class="w3l_offers">*/
/*       <a href="products.html">Today's special Offers !</a>*/
/*     </div>*/
/*     <div class="w3l_search">*/
/*       <form action="#" method="post">*/
/*         <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">*/
/*         <input type="submit" value=" ">*/
/*       </form>*/
/*     </div>*/
/*     <div class="product_list_header">  */
/*       <form action="#" method="post" class="last">*/
/*                 <fieldset>*/
/*                     <input type="hidden" name="cmd" value="_cart" />*/
/*                     <input type="hidden" name="display" value="1" />*/
/*                     <input type="submit" name="submit" value="View your cart" class="button" />*/
/*                 </fieldset>*/
/*             </form>*/
/*     </div>*/
/*     <div class="w3l_header_right">*/
/*       <ul>*/
/*         <li class="dropdown profile_details_drop">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>*/
/*           <div class="mega-dropdown-menu">*/
/*             <div class="w3ls_vegetables">*/
/*               <ul class="dropdown-menu drp-mnu">*/
/*                 <li><a href="login.html">Login</a></li> */
/*                 <li><a href="login.html">Sign Up</a></li>*/
/*               </ul>*/
/*             </div>                  */
/*           </div>  */
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="w3l_header_right1">*/
/*       <h2><a href="mail.html">Contact Us</a></h2>*/
/*     </div>*/
/*     <div class="clearfix"> </div>*/
/*   </div>*/
/* <!-- script-for sticky-nav -->*/
/*   <script>*/
/*   $(document).ready(function() {*/
/*      var navoffeset=$(".agileits_header").offset().top;*/
/*      $(window).scroll(function(){*/
/*       var scrollpos=$(window).scrollTop(); */
/*       if(scrollpos >=navoffeset){*/
/*         $(".agileits_header").addClass("fixed");*/
/*       }else{*/
/*         $(".agileits_header").removeClass("fixed");*/
/*       }*/
/*      });*/
/*      */
/*   });*/
/*   </script>*/
/* <!-- //script-for sticky-nav -->*/
/*   <div class="logo_products">*/
/*     <div class="container">*/
/*       <div class="w3ls_logo_products_left">*/
/*         <h1><a href="index-2.html"><span>Grocery</span> Store</a></h1>*/
/*       </div>*/
/*       <div class="w3ls_logo_products_left1">*/
/*         <ul class="special_items">*/
/*           <li><a href="events.html">Events</a><i>/</i></li>*/
/*           <li><a href="about.html">About Us</a><i>/</i></li>*/
/*           <li><a href="products.html">Best Deals</a><i>/</i></li>*/
/*           <li><a href="services.html">Services</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="w3ls_logo_products_left1">*/
/*         <ul class="phone_email">*/
/*           <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>*/
/*           <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="clearfix"> </div>*/
/*     </div>*/
/*   </div>*/
/* <!-- //header -->*/
/* <!-- banner -->*/
/*   <div class="banner">*/
/*     <div class="w3l_banner_nav_left">*/
/*       <nav class="navbar nav_bottom">*/
/*        <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header nav_2">*/
/*           <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           </button>*/
/*          </div> */
/*          <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">*/
/*           <ul class="nav navbar-nav nav_1">*/
/*             <li><a href="products.html">Branded Foods</a></li>*/
/*             <li><a href="household.html">Households</a></li>*/
/*             <li class="dropdown mega-dropdown active">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>        */
/*               <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*                 <div class="w3ls_vegetables">*/
/*                   <ul>  */
/*                     <li><a href="vegetables.html">Vegetables</a></li>*/
/*                     <li><a href="vegetables.html">Fruits</a></li>*/
/*                   </ul>*/
/*                 </div>                  */
/*               </div>        */
/*             </li>*/
/*             <li><a href="kitchen.html">Kitchen</a></li>*/
/*             <li><a href="short-codes.html">Short Codes</a></li>*/
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>*/
/*               <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*                 <div class="w3ls_vegetables">*/
/*                   <ul>*/
/*                     <li><a href="drinks.html">Soft Drinks</a></li>*/
/*                     <li><a href="drinks.html">Juices</a></li>*/
/*                   </ul>*/
/*                 </div>                  */
/*               </div>  */
/*             </li>*/
/*             <li><a href="pet.html">Pet Food</a></li>*/
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>*/
/*               <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*                 <div class="w3ls_vegetables">*/
/*                   <ul>*/
/*                     <li><a href="frozen.html">Frozen Snacks</a></li>*/
/*                     <li><a href="frozen.html">Frozen Nonveg</a></li>*/
/*                   </ul>*/
/*                 </div>                  */
/*               </div>  */
/*             </li>*/
/*             <li><a href="bread.html">Bread & Bakery</a></li>*/
/*           </ul>*/
/*          </div><!-- /.navbar-collapse -->*/
/*       </nav>*/
/*     </div>*/
/*     <div class="w3l_banner_nav_right">*/
/*       <section class="slider">*/
/*         <div class="flexslider">*/
/*           <ul class="slides">*/
/*             <li>*/
/*               <div class="w3l_banner_nav_right_banner">*/
/*                 <h3>Make your <span>food</span> with Spicy.</h3>*/
/*                 <div class="more">*/
/*                   <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>*/
/*                 </div>*/
/*               </div>*/
/*             </li>*/
/*             <li>*/
/*               <div class="w3l_banner_nav_right_banner1">*/
/*                 <h3>Make your <span>food</span> with Spicy.</h3>*/
/*                 <div class="more">*/
/*                   <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>*/
/*                 </div>*/
/*               </div>*/
/*             </li>*/
/*             <li>*/
/*               <div class="w3l_banner_nav_right_banner2">*/
/*                 <h3>upto <i>50%</i> off.</h3>*/
/*                 <div class="more">*/
/*                   <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>*/
/*                 </div>*/
/*               </div>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </section>*/
/*       <!-- flexSlider -->*/
/*         <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />*/
/*         <script defer src="js/jquery.flexslider.js"></script>*/
/*         <script type="text/javascript">*/
/*         $(window).load(function(){*/
/*           $('.flexslider').flexslider({*/
/*           animation: "slide",*/
/*           start: function(slider){*/
/*             $('body').removeClass('loading');*/
/*           }*/
/*           });*/
/*         });*/
/*         </script>*/
/*       <!-- //flexSlider -->*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/*   </div>*/
/* <!---728x90--->*/
/* <div style="text-align: center;"><script async src="../../../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>*/
/* <ins class="adsbygoogle"*/
/*      style="display:inline-block;width:728px;height:90px"*/
/*      data-ad-client="ca-pub-9153409599391170"*/
/*      data-ad-slot="6850850687"></ins>*/
/* <script>*/
/* (adsbygoogle = window.adsbygoogle || []).push({});*/
/* </script></div>*/
/* <!-- banner -->*/
/*   <div class="banner_bottom">*/
/*       <div class="wthree_banner_bottom_left_grid_sub">*/
/*       </div>*/
/*       <div class="wthree_banner_bottom_left_grid_sub1">*/
/*         <div class="col-md-4 wthree_banner_bottom_left">*/
/*           <div class="wthree_banner_bottom_left_grid">*/
/*             <img src="images/4.jpg" alt=" " class="img-responsive" />*/
/*             <div class="wthree_banner_bottom_left_grid_pos">*/
/*               <h4>Discount Offer <span>25%</span></h4>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-4 wthree_banner_bottom_left">*/
/*           <div class="wthree_banner_bottom_left_grid">*/
/*             <img src="images/5.jpg" alt=" " class="img-responsive" />*/
/*             <div class="wthree_banner_btm_pos">*/
/*               <h3>introducing <span>best store</span> for <i>groceries</i></h3>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-4 wthree_banner_bottom_left">*/
/*           <div class="wthree_banner_bottom_left_grid">*/
/*             <img src="images/6.jpg" alt=" " class="img-responsive" />*/
/*             <div class="wthree_banner_btm_pos1">*/
/*               <h3>Save <span>Upto</span> $10</h3>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="clearfix"> </div>*/
/*       </div>*/
/*       <div class="clearfix"> </div>*/
/*   </div>*/
/* <!---728x90--->*/
/* <div style="text-align: center;"><script async src="../../../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>*/
/* <ins class="adsbygoogle"*/
/*      style="display:inline-block;width:728px;height:90px"*/
/*      data-ad-client="ca-pub-9153409599391170"*/
/*      data-ad-slot="6850850687"></ins>*/
/* <script>*/
/* (adsbygoogle = window.adsbygoogle || []).push({});*/
/* </script></div>*/
/* <!-- top-brands -->*/
/*   <div class="top-brands">*/
/*     <div class="container">*/
/*       <h3>Hot Offers</h3>*/
/* <!---728x90--->*/
/* <div style="text-align: center;"><script async src="../../../../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>*/
/* <ins class="adsbygoogle"*/
/*      style="display:inline-block;width:728px;height:90px"*/
/*      data-ad-client="ca-pub-9153409599391170"*/
/*      data-ad-slot="6850850687"></ins>*/
/* <script>*/
/* (adsbygoogle = window.adsbygoogle || []).push({});*/
/* </script></div>*/
/*       <div class="agile_top_brands_grids">*/
/*         <div class="col-md-3 top_brand_left">*/
/*           <div class="hover14 column">*/
/*             <div class="agile_top_brand_left_grid">*/
/*               <div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>*/
/*               <div class="agile_top_brand_left_grid1">*/
/*                 <figure>*/
/*                   <div class="snipcart-item block" >*/
/*                     <div class="snipcart-thumb">*/
/*                       <a href="single.html"><img title=" " alt=" " src="images/1.png" /></a>    */
/*                       <p>fortune sunflower oil</p>*/
/*                       <h4>$7.99 <span>$10.00</span></h4>*/
/*                     </div>*/
/*                     <div class="snipcart-details top_brand_home_details">*/
/*                       <form action="#" method="post">*/
/*                         <fieldset>*/
/*                           <input type="hidden" name="cmd" value="_cart" />*/
/*                           <input type="hidden" name="add" value="1" />*/
/*                           <input type="hidden" name="business" value=" " />*/
/*                           <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />*/
/*                           <input type="hidden" name="amount" value="7.99" />*/
/*                           <input type="hidden" name="discount_amount" value="1.00" />*/
/*                           <input type="hidden" name="currency_code" value="USD" />*/
/*                           <input type="hidden" name="return" value=" " />*/
/*                           <input type="hidden" name="cancel_return" value=" " />*/
/*                           <input type="submit" name="submit" value="Add to cart" class="button" />*/
/*                         </fieldset>*/
/*                       </form>*/
/*                     </div>*/
/*                   </div>*/
/*                 </figure>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 top_brand_left">*/
/*           <div class="hover14 column">*/
/*             <div class="agile_top_brand_left_grid">*/
/*               <div class="agile_top_brand_left_grid1">*/
/*                 <figure>*/
/*                   <div class="snipcart-item block" >*/
/*                     <div class="snipcart-thumb">*/
/*                       <a href="single.html"><img title=" " alt=" " src="images/3.png" /></a>    */
/*                       <p>basmati rise (5 Kg)</p>*/
/*                       <h4>$11.99 <span>$15.00</span></h4>*/
/*                     </div>*/
/*                     <div class="snipcart-details top_brand_home_details">*/
/*                       <form action="#" method="post">*/
/*                         <fieldset>*/
/*                           <input type="hidden" name="cmd" value="_cart" />*/
/*                           <input type="hidden" name="add" value="1" />*/
/*                           <input type="hidden" name="business" value=" " />*/
/*                           <input type="hidden" name="item_name" value="basmati rise" />*/
/*                           <input type="hidden" name="amount" value="11.99" />*/
/*                           <input type="hidden" name="discount_amount" value="1.00" />*/
/*                           <input type="hidden" name="currency_code" value="USD" />*/
/*                           <input type="hidden" name="return" value=" " />*/
/*                           <input type="hidden" name="cancel_return" value=" " />*/
/*                           <input type="submit" name="submit" value="Add to cart" class="button" />*/
/*                         </fieldset>*/
/*                       </form>*/
/*                     </div>*/
/*                   </div>*/
/*                 </figure>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 top_brand_left">*/
/*           <div class="hover14 column">*/
/*             <div class="agile_top_brand_left_grid">*/
/*               <div class="agile_top_brand_left_grid_pos">*/
/*                 <img src="images/offer.png" alt=" " class="img-responsive" />*/
/*               </div>*/
/*               <div class="agile_top_brand_left_grid1">*/
/*                 <figure>*/
/*                   <div class="snipcart-item block">*/
/*                     <div class="snipcart-thumb">*/
/*                       <a href="single.html"><img src="images/2.png" alt=" " class="img-responsive" /></a>*/
/*                       <p>Pepsi soft drink (2 Ltr)</p>*/
/*                       <h4>$8.00 <span>$10.00</span></h4>*/
/*                     </div>*/
/*                     <div class="snipcart-details top_brand_home_details">*/
/*                       <form action="#" method="post">*/
/*                         <fieldset>*/
/*                           <input type="hidden" name="cmd" value="_cart" />*/
/*                           <input type="hidden" name="add" value="1" />*/
/*                           <input type="hidden" name="business" value=" " />*/
/*                           <input type="hidden" name="item_name" value="Pepsi soft drink" />*/
/*                           <input type="hidden" name="amount" value="8.00" />*/
/*                           <input type="hidden" name="discount_amount" value="1.00" />*/
/*                           <input type="hidden" name="currency_code" value="USD" />*/
/*                           <input type="hidden" name="return" value=" " />*/
/*                           <input type="hidden" name="cancel_return" value=" " />*/
/*                           <input type="submit" name="submit" value="Add to cart" class="button" />*/
/*                         </fieldset>*/
/*                       </form>*/
/*                     </div>*/
/*                   </div>*/
/*                 </figure>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 top_brand_left">*/
/*           <div class="hover14 column">*/
/*             <div class="agile_top_brand_left_grid">*/
/*               <div class="agile_top_brand_left_grid_pos">*/
/*                 <img src="images/offer.png" alt=" " class="img-responsive" />*/
/*               </div>*/
/*               <div class="agile_top_brand_left_grid1">*/
/*                 <figure>*/
/*                   <div class="snipcart-item block">*/
/*                     <div class="snipcart-thumb">*/
/*                       <a href="single.html"><img src="images/4.png" alt=" " class="img-responsive" /></a>*/
/*                       <p>dogs food (4 Kg)</p>*/
/*                       <h4>$9.00 <span>$11.00</span></h4>*/
/*                     </div>*/
/*                     <div class="snipcart-details top_brand_home_details">*/
/*                       <form action="#" method="post">*/
/*                         <fieldset>*/
/*                           <input type="hidden" name="cmd" value="_cart" />*/
/*                           <input type="hidden" name="add" value="1" />*/
/*                           <input type="hidden" name="business" value=" " />*/
/*                           <input type="hidden" name="item_name" value="dogs food" />*/
/*                           <input type="hidden" name="amount" value="9.00" />*/
/*                           <input type="hidden" name="discount_amount" value="1.00" />*/
/*                           <input type="hidden" name="currency_code" value="USD" />*/
/*                           <input type="hidden" name="return" value=" " />*/
/*                           <input type="hidden" name="cancel_return" value=" " />*/
/*                           <input type="submit" name="submit" value="Add to cart" class="button" />*/
/*                         </fieldset>*/
/*                       </form>*/
/*                     </div>*/
/*                   </div>*/
/*                 </figure>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="clearfix"> </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <!-- //top-brands -->*/
/* <!-- fresh-vegetables -->*/
/*   <div class="fresh-vegetables">*/
/*     <div class="container">*/
/*       <h3>Top Products</h3>*/
/*       <div class="w3l_fresh_vegetables_grids">*/
/*         <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">*/
/*           <div class="w3l_fresh_vegetables_grid2">*/
/*             <ul>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>*/
/*               <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a></li>*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-9 w3l_fresh_vegetables_grid_right">*/
/*           <div class="col-md-4 w3l_fresh_vegetables_grid">*/
/*             <div class="w3l_fresh_vegetables_grid1">*/
/*               <img src="images/8.jpg" alt=" " class="img-responsive" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4 w3l_fresh_vegetables_grid">*/
/*             <div class="w3l_fresh_vegetables_grid1">*/
/*               <div class="w3l_fresh_vegetables_grid1_rel">*/
/*                 <img src="images/7.jpg" alt=" " class="img-responsive" />*/
/*                 <div class="w3l_fresh_vegetables_grid1_rel_pos">*/
/*                   <div class="more m1">*/
/*                     <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="w3l_fresh_vegetables_grid1_bottom">*/
/*               <img src="images/10.jpg" alt=" " class="img-responsive" />*/
/*               <div class="w3l_fresh_vegetables_grid1_bottom_pos">*/
/*                 <h5>Special Offers</h5>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4 w3l_fresh_vegetables_grid">*/
/*             <div class="w3l_fresh_vegetables_grid1">*/
/*               <img src="images/9.jpg" alt=" " class="img-responsive" />*/
/*             </div>*/
/*             <div class="w3l_fresh_vegetables_grid1_bottom">*/
/*               <img src="images/11.jpg" alt=" " class="img-responsive" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="clearfix"> </div>*/
/*           <div class="agileinfo_move_text">*/
/*             <div class="agileinfo_marquee">*/
/*               <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>*/
/*             </div>*/
/*             <div class="agileinfo_breaking_news">*/
/*               <span> </span>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="clearfix"> </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <!-- //fresh-vegetables -->*/
/* <!-- newsletter -->*/
/*   <div class="newsletter">*/
/*     <div class="container">*/
/*       <div class="w3agile_newsletter_left">*/
/*         <h3>sign up for our newsletter</h3>*/
/*       </div>*/
/*       <div class="w3agile_newsletter_right">*/
/*         <form action="#" method="post">*/
/*           <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">*/
/*           <input type="submit" value="subscribe now">*/
/*         </form>*/
/*       </div>*/
/*       <div class="clearfix"> </div>*/
/*     </div>*/
/*   </div>*/
/* <!-- //newsletter -->*/
/* <!-- footer -->*/
/*   <div class="footer">*/
/*     <div class="container">*/
/*       <div class="col-md-3 w3_footer_grid">*/
/*         <h3>information</h3>*/
/*         <ul class="w3_footer_grid_list">*/
/*           <li><a href="events.html">Events</a></li>*/
/*           <li><a href="about.html">About Us</a></li>*/
/*           <li><a href="products.html">Best Deals</a></li>*/
/*           <li><a href="services.html">Services</a></li>*/
/*           <li><a href="short-codes.html">Short Codes</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-md-3 w3_footer_grid">*/
/*         <h3>policy info</h3>*/
/*         <ul class="w3_footer_grid_list">*/
/*           <li><a href="faqs.html">FAQ</a></li>*/
/*           <li><a href="privacy.html">privacy policy</a></li>*/
/*           <li><a href="privacy.html">terms of use</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-md-3 w3_footer_grid">*/
/*         <h3>what in stores</h3>*/
/*         <ul class="w3_footer_grid_list">*/
/*           <li><a href="pet.html">Pet Food</a></li>*/
/*           <li><a href="frozen.html">Frozen Snacks</a></li>*/
/*           <li><a href="kitchen.html">Kitchen</a></li>*/
/*           <li><a href="products.html">Branded Foods</a></li>*/
/*           <li><a href="household.html">Households</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-md-3 w3_footer_grid">*/
/*         <h3>twitter posts</h3>*/
/*         <ul class="w3_footer_grid_list1">*/
/*           <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>*/
/*             eius modi tempora incidunt ut labore et*/
/*             <a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>*/
/*           <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>*/
/*             eius modi tempora incidunt ut labore et*/
/*             <a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="clearfix"> </div>*/
/*       <div class="agile_footer_grids">*/
/*         <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">*/
/*           <div class="w3_footer_grid_bottom">*/
/*             <h4>100% secure payments</h4>*/
/*             <img src="images/card.png" alt=" " class="img-responsive" />*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">*/
/*           <div class="w3_footer_grid_bottom">*/
/*             <h5>connect with us</h5>*/
/*             <ul class="agileits_social_icons">*/
/*               <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>*/
/*               <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>*/
/*               <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>*/
/*               <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>*/
/*               <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*         <div class="clearfix"> </div>*/
/*       </div>*/
/*       <div class="wthree_footer_copy">*/
/*         <p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <!-- //footer -->*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="js/bootstrap.min.js"></script>*/
/* <script>*/
/* $(document).ready(function(){*/
/*     $(".dropdown").hover(            */
/*         function() {*/
/*             $('.dropdown-menu', this).stop( true, true ).slideDown("fast");*/
/*             $(this).toggleClass('open');        */
/*         },*/
/*         function() {*/
/*             $('.dropdown-menu', this).stop( true, true ).slideUp("fast");*/
/*             $(this).toggleClass('open');       */
/*         }*/
/*     );*/
/* });*/
/* </script>*/
/* <!-- here stars scrolling icon -->*/
/*   <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*       /**/
/*         var defaults = {*/
/*         containerID: 'toTop', // fading element id*/
/*         containerHoverID: 'toTopHover', // fading element hover id*/
/*         scrollSpeed: 1200,*/
/*         easingType: 'linear' */
/*         };*/
/*       *//* */
/*                 */
/*       $().UItoTop({ easingType: 'easeOutQuart' });*/
/*                 */
/*       });*/
/*   </script>*/
/* <!-- //here ends scrolling icon -->*/
/* <script src="js/minicart.min.js"></script>*/
/* <script>*/
/*   // Mini Cart*/
/*   paypal.minicart.render({*/
/*     action: '#'*/
/*   });*/
/* */
/*   if (~window.location.search.indexOf('reset=true')) {*/
/*     paypal.minicart.reset();*/
/*   }*/
/* </script>*/
/* <!-- End Main -->*/
/* </body>*/
/* </html>*/
/* */
