<?php

/* EcommerceBoutiqueBundle::menuBoutique.html.twig */
class __TwigTemplate_4d1ef2fe5af14357c316ef80c88982e7a389e94ffa6f47996f87fdb6263ddcf0 extends Twig_Template
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
        $__internal_0be2c7b1898024c9c6e69f2d52b14d8208c6a52301374ec9b5b83bbd62400832 = $this->env->getExtension("native_profiler");
        $__internal_0be2c7b1898024c9c6e69f2d52b14d8208c6a52301374ec9b5b83bbd62400832->enter($__internal_0be2c7b1898024c9c6e69f2d52b14d8208c6a52301374ec9b5b83bbd62400832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBoutiqueBundle::menuBoutique.html.twig"));

        // line 1
        echo "<ul class=\"nav navbar-nav nav_1\">
  <li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ecommerce_boutique_homepage");
        echo "\">Accueil Boutique</a></li>
  <li class=\"dropdown mega-dropdown active\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Produit<span class=\"caret\"></span></a>        
  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
    <div class=\"w3ls_vegetables\">
      <ul>  
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ajouteProduit");
        echo "\">Ajouter</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("listeProduit");
        echo "\">Liste</a></li>
      </ul>
    </div>                  
  </div>        
  </li>
  
  <li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Commande<span class=\"caret\"></span></a>
  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
    <div class=\"w3ls_vegetables\">
      <ul>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ajouteCommande");
        echo "\">Nouveau</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("listeCommande");
        echo "\">Liste</a></li>
      </ul>
    </div>                  
  </div>  
  </li>
  
</ul>";
        
        $__internal_0be2c7b1898024c9c6e69f2d52b14d8208c6a52301374ec9b5b83bbd62400832->leave($__internal_0be2c7b1898024c9c6e69f2d52b14d8208c6a52301374ec9b5b83bbd62400832_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBoutiqueBundle::menuBoutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  52 => 20,  38 => 9,  34 => 8,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav navbar-nav nav_1">*/
/*   <li><a href="{{ path('ecommerce_boutique_homepage') }}">Accueil Boutique</a></li>*/
/*   <li class="dropdown mega-dropdown active">*/
/*   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produit<span class="caret"></span></a>        */
/*   <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*     <div class="w3ls_vegetables">*/
/*       <ul>  */
/*         <li><a href="{{ path('ajouteProduit') }}">Ajouter</a></li>*/
/*         <li><a href="{{ path('listeProduit') }}">Liste</a></li>*/
/*       </ul>*/
/*     </div>                  */
/*   </div>        */
/*   </li>*/
/*   */
/*   <li class="dropdown">*/
/*   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Commande<span class="caret"></span></a>*/
/*   <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/*     <div class="w3ls_vegetables">*/
/*       <ul>*/
/*         <li><a href="{{ path('ajouteCommande') }}">Nouveau</a></li>*/
/*         <li><a href="{{ path('listeCommande') }}">Liste</a></li>*/
/*       </ul>*/
/*     </div>                  */
/*   </div>  */
/*   </li>*/
/*   */
/* </ul>*/
