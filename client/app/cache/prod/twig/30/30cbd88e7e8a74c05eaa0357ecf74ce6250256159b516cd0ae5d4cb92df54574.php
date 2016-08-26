<?php

/* ::header.html.twig */
class __TwigTemplate_eb7402227d63c42727e8245fcddb73dfde6042df0f59fd6e1287f22d36b7847c extends Twig_Template
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
        // line 1
        echo "
 <div class=\"agileits_header\">
    <div class=\"w3l_offers\">
      <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("casa");
        echo "\">Senegal/Casamance</a>
    </div>
    <div class=\"w3l_search\">
      <form action=\"#\" method=\"post\">
        <input type=\"text\" name=\"Product\" value=\"Rechercher\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Rechercher...';}\" required=\"\">
        <input type=\"submit\" value=\" \">
      </form>
    </div>
    <div class=\"product_list_header\">  
      <form action=\"#\" method=\"post\" class=\"last\">
                <fieldset>
                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                    <input type=\"hidden\" name=\"display\" value=\"1\" />
                    <input type=\"submit\" name=\"submit\" value=\"Votre panier\" style=\"width:150px\" class=\"button\" />
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
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><center>Se connecter</center></a></li> 
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><center>Se deconnecter</center></a></li>
                <li><a href=\"\"><center>Creer un compte</center></a></li>
              </ul>
            </div>                  
          </div>  
        </li>
      </ul>
    </div>
    <div class=\"w3l_header_right1\">
      <h2><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("contactus");
        echo "\">Nous contacter</a></h2>
    </div>
    <div class=\"clearfix\"> </div>
  </div>

  <div class=\"logo_products\">
    <div class=\"container\">
      <!--div class=\"w3ls_logo_products_left\">
        <h1><a href=\"index-2.html\"><span>Grocery</span> Store</a></h1>
      </div-->

      <div class=\"w3ls_logo_products_left1\">
          ";
        // line 50
        $this->loadTemplate("::menu.html.twig", "::header.html.twig", 50)->display($context);
        // line 51
        echo "      </div>

      <div class=\"clearfix\"> </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 51,  82 => 50,  67 => 38,  55 => 29,  51 => 28,  24 => 4,  19 => 1,);
    }
}
/* */
/*  <div class="agileits_header">*/
/*     <div class="w3l_offers">*/
/*       <a href="{{ path('casa') }}">Senegal/Casamance</a>*/
/*     </div>*/
/*     <div class="w3l_search">*/
/*       <form action="#" method="post">*/
/*         <input type="text" name="Product" value="Rechercher" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Rechercher...';}" required="">*/
/*         <input type="submit" value=" ">*/
/*       </form>*/
/*     </div>*/
/*     <div class="product_list_header">  */
/*       <form action="#" method="post" class="last">*/
/*                 <fieldset>*/
/*                     <input type="hidden" name="cmd" value="_cart" />*/
/*                     <input type="hidden" name="display" value="1" />*/
/*                     <input type="submit" name="submit" value="Votre panier" style="width:150px" class="button" />*/
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
/*                 <li><a href="{{ path('fos_user_security_login') }}"><center>Se connecter</center></a></li> */
/*                 <li><a href="{{ path('fos_user_security_logout') }}"><center>Se deconnecter</center></a></li>*/
/*                 <li><a href=""><center>Creer un compte</center></a></li>*/
/*               </ul>*/
/*             </div>                  */
/*           </div>  */
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="w3l_header_right1">*/
/*       <h2><a href="{{ path('contactus') }}">Nous contacter</a></h2>*/
/*     </div>*/
/*     <div class="clearfix"> </div>*/
/*   </div>*/
/* */
/*   <div class="logo_products">*/
/*     <div class="container">*/
/*       <!--div class="w3ls_logo_products_left">*/
/*         <h1><a href="index-2.html"><span>Grocery</span> Store</a></h1>*/
/*       </div-->*/
/* */
/*       <div class="w3ls_logo_products_left1">*/
/*           {% include "::menu.html.twig" %}*/
/*       </div>*/
/* */
/*       <div class="clearfix"> </div>*/
/*     </div>*/
/*   </div>*/
/* */
