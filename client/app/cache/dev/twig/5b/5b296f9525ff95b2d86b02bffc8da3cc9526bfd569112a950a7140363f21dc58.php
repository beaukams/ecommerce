<?php

/* ::header.html.twig */
class __TwigTemplate_208636c920829c1c564cf83ef4930da6fdb01ca943005d7c82a59e8481d78aa5 extends Twig_Template
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
        $__internal_8d538d1fd884d5c4a5f646c0eb2f692750579eaa7c4b089cf426412ebf54e6f7 = $this->env->getExtension("native_profiler");
        $__internal_8d538d1fd884d5c4a5f646c0eb2f692750579eaa7c4b089cf426412ebf54e6f7->enter($__internal_8d538d1fd884d5c4a5f646c0eb2f692750579eaa7c4b089cf426412ebf54e6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

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
        
        $__internal_8d538d1fd884d5c4a5f646c0eb2f692750579eaa7c4b089cf426412ebf54e6f7->leave($__internal_8d538d1fd884d5c4a5f646c0eb2f692750579eaa7c4b089cf426412ebf54e6f7_prof);

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
        return array (  87 => 51,  85 => 50,  70 => 38,  58 => 29,  54 => 28,  27 => 4,  22 => 1,);
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
