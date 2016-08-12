<?php

/* ::header.html.twig */
class __TwigTemplate_ca40d51bde26aa494999e41b6009bc6cd5c9ab128e05d33774bd97cca89378bf extends Twig_Template
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
        $__internal_4b69e561a3cce6b58fbd3559872c84bf0be9fe01136aa5c064f43e10be5d98ec = $this->env->getExtension("native_profiler");
        $__internal_4b69e561a3cce6b58fbd3559872c84bf0be9fe01136aa5c064f43e10be5d98ec->enter($__internal_4b69e561a3cce6b58fbd3559872c84bf0be9fe01136aa5c064f43e10be5d98ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "
 <div class=\"agileits_header\">
    <div class=\"w3l_offers\">
      <a href=\"products.html\">Senegal/Casamance</a>
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
                    <input type=\"submit\" name=\"submit\" value=\"Votre panier\" style=\"width:150px;\" class=\"button\" />
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
                <li><a href=\"login.html\"><center>Se connecter</center></a></li> 
                <li><a href=\"login.html\"><center>Se deconnecter</center></a></li>
                <li><a href=\"login.html\"><center>Creer un compte</center></a></li>
              </ul>
            </div>                  
          </div>  
        </li>
      </ul>
    </div>
    <div class=\"w3l_header_right1\">
      <h2><a href=\"mail.html\">contacter</a></h2>
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

      <div class=\"w3ls_logo_products_left1\">
        <ul class=\"phone_email\">
          <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>(+0123) 234 567</li>
          <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i><a href=\"mailto:abdoulayekama@gmail.com\">abdoulayekama@gmail.com</a></li>
        </ul>
      </div>
      <div class=\"clearfix\"> </div>
    </div>
  </div>
";
        
        $__internal_4b69e561a3cce6b58fbd3559872c84bf0be9fe01136aa5c064f43e10be5d98ec->leave($__internal_4b69e561a3cce6b58fbd3559872c84bf0be9fe01136aa5c064f43e10be5d98ec_prof);

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
        return array (  75 => 51,  73 => 50,  22 => 1,);
    }
}
/* */
/*  <div class="agileits_header">*/
/*     <div class="w3l_offers">*/
/*       <a href="products.html">Senegal/Casamance</a>*/
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
/*                     <input type="submit" name="submit" value="Votre panier" style="width:150px;" class="button" />*/
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
/*                 <li><a href="login.html"><center>Se connecter</center></a></li> */
/*                 <li><a href="login.html"><center>Se deconnecter</center></a></li>*/
/*                 <li><a href="login.html"><center>Creer un compte</center></a></li>*/
/*               </ul>*/
/*             </div>                  */
/*           </div>  */
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="w3l_header_right1">*/
/*       <h2><a href="mail.html">contacter</a></h2>*/
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
/*       <div class="w3ls_logo_products_left1">*/
/*         <ul class="phone_email">*/
/*           <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>*/
/*           <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:abdoulayekama@gmail.com">abdoulayekama@gmail.com</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="clearfix"> </div>*/
/*     </div>*/
/*   </div>*/
/* */
