<?php

/* ::menu.html.twig */
class __TwigTemplate_66bef1927393923abed49de30dfff0f8067e9ecb186b6f6e5bca15c0aac76929 extends Twig_Template
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
        // line 1
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  68 => 24,  60 => 19,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  29 => 3,  26 => 2,  20 => 1,);
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
