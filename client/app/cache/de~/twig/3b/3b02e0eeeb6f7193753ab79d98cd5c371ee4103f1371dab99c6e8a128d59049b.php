<?php

/* ::menu.html.twig */
class __TwigTemplate_98de0d18f958c90c6a47986b0be59e8470e1161bf38c8f7fa646b2abe058d038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_321d793e48b64aa47bb3a04ea179eeabe233704ba6747fc3995c0660386fe425 = $this->env->getExtension("native_profiler");
        $__internal_321d793e48b64aa47bb3a04ea179eeabe233704ba6747fc3995c0660386fe425->enter($__internal_321d793e48b64aa47bb3a04ea179eeabe233704ba6747fc3995c0660386fe425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_321d793e48b64aa47bb3a04ea179eeabe233704ba6747fc3995c0660386fe425->leave($__internal_321d793e48b64aa47bb3a04ea179eeabe233704ba6747fc3995c0660386fe425_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_bacf867905d3048804d45d51b4a66624b86c1a951d3c13a1ceb607808041bc03 = $this->env->getExtension("native_profiler");
        $__internal_bacf867905d3048804d45d51b4a66624b86c1a951d3c13a1ceb607808041bc03->enter($__internal_bacf867905d3048804d45d51b4a66624b86c1a951d3c13a1ceb607808041bc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "\t<ul class=\"special_items\">
\t\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a><i>/</i></li>
\t\t
\t\t<li class=\"dropdown\">
\t\t  <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ecommerce_boutique_homepage");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">CasaBio 100%Bio<span class=\"caret\"></span></a>
\t\t  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
\t\t    <div class=\"w3ls_vegetables\">
\t\t      <ul>
\t\t        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("listeProduit", array("type_produit" => "1"));
        echo "\">Produits halieutiques</a></li>
\t\t        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("listeProduit", array("type_produit" => "2"));
        echo "\">Fruits et légumes</a></li>
\t\t        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("listeCommande");
        echo "\">Divers </a></li>
\t\t      </ul>
\t\t    </div>                  
\t\t  </div> 
\t\t  <i>/</i>
\t\t</li>
\t\t<li class=\"dropdown\">
\t\t  <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("ecommerce_restaurant_homepage");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Bienvenue en Casa <span class=\"caret\"></span></a>
\t\t  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
\t\t    <div class=\"w3ls_vegetables\">
\t\t      <ul>
\t\t        <li><a href=\"\">Hotels</a></li><br/>
\t\t        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ecommerce_restaurant_homepage");
        echo "\">Restaurants</a></li>
\t\t      </ul>
\t\t    </div>                  
\t\t  </div> 
\t\t  <i>/</i> 
\t\t</li>

\t\t<li class=\"dropdown\">
\t\t  <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Culture<span class=\"caret\"></span></a>
\t\t  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
\t\t    <div class=\"w3ls_vegetables\">
\t\t      <ul>
\t\t        
\t\t      </ul>
\t\t    </div>                  
\t\t  </div> 
\t\t  <i>/</i> 
\t\t</li>

\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("annonces");
        echo "\">Annonces</a><i></i></li>
\t</ul>

";
        
        $__internal_bacf867905d3048804d45d51b4a66624b86c1a951d3c13a1ceb607808041bc03->leave($__internal_bacf867905d3048804d45d51b4a66624b86c1a951d3c13a1ceb607808041bc03_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  77 => 24,  69 => 19,  59 => 12,  55 => 11,  51 => 10,  44 => 6,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block menu %}*/
/* 	<ul class="special_items">*/
/* 		<li><a href="{{ path('homepage') }}">Accueil</a><i>/</i></li>*/
/* 		*/
/* 		<li class="dropdown">*/
/* 		  <a href="{{ path('ecommerce_boutique_homepage') }}" class="dropdown-toggle" data-toggle="dropdown">CasaBio 100%Bio<span class="caret"></span></a>*/
/* 		  <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/* 		    <div class="w3ls_vegetables">*/
/* 		      <ul>*/
/* 		        <li><a href="{{ path('listeProduit', {'type_produit' : '1'}) }}">Produits halieutiques</a></li>*/
/* 		        <li><a href="{{ path('listeProduit', {'type_produit' : '2'}) }}">Fruits et légumes</a></li>*/
/* 		        <li><a href="{{ path('listeCommande') }}">Divers </a></li>*/
/* 		      </ul>*/
/* 		    </div>                  */
/* 		  </div> */
/* 		  <i>/</i>*/
/* 		</li>*/
/* 		<li class="dropdown">*/
/* 		  <a href="{{ path('ecommerce_restaurant_homepage') }}" class="dropdown-toggle" data-toggle="dropdown">Bienvenue en Casa <span class="caret"></span></a>*/
/* 		  <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/* 		    <div class="w3ls_vegetables">*/
/* 		      <ul>*/
/* 		        <li><a href="">Hotels</a></li><br/>*/
/* 		        <li><a href="{{ path('ecommerce_restaurant_homepage') }}">Restaurants</a></li>*/
/* 		      </ul>*/
/* 		    </div>                  */
/* 		  </div> */
/* 		  <i>/</i> */
/* 		</li>*/
/* */
/* 		<li class="dropdown">*/
/* 		  <a href="" class="dropdown-toggle" data-toggle="dropdown">Culture<span class="caret"></span></a>*/
/* 		  <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/* 		    <div class="w3ls_vegetables">*/
/* 		      <ul>*/
/* 		        */
/* 		      </ul>*/
/* 		    </div>                  */
/* 		  </div> */
/* 		  <i>/</i> */
/* 		</li>*/
/* */
/* 		<li><a href="{{ path('annonces') }}">Annonces</a><i></i></li>*/
/* 	</ul>*/
/* */
/* {% endblock %}*/
