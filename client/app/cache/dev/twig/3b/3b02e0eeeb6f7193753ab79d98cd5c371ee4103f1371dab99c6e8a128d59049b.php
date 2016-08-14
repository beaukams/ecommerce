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
        $__internal_99e41a9cbb0063abf2026353786a169d7411e89a18869fc98efffd9b0dd867c0 = $this->env->getExtension("native_profiler");
        $__internal_99e41a9cbb0063abf2026353786a169d7411e89a18869fc98efffd9b0dd867c0->enter($__internal_99e41a9cbb0063abf2026353786a169d7411e89a18869fc98efffd9b0dd867c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_99e41a9cbb0063abf2026353786a169d7411e89a18869fc98efffd9b0dd867c0->leave($__internal_99e41a9cbb0063abf2026353786a169d7411e89a18869fc98efffd9b0dd867c0_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0e4726edae1c6db07affbcac54e40b8b9577b0aa85c4d26ede31a94d0214fd5 = $this->env->getExtension("native_profiler");
        $__internal_f0e4726edae1c6db07affbcac54e40b8b9577b0aa85c4d26ede31a94d0214fd5->enter($__internal_f0e4726edae1c6db07affbcac54e40b8b9577b0aa85c4d26ede31a94d0214fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 2
        echo "\t<ul class=\"special_items\">
\t\t<li class=\"coul\"><a href=\"";
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
        echo $this->env->getExtension('routing')->getPath("ajouteCommande");
        echo "\">Produits halieutiques</a></li>
\t\t        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("listeCommande");
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
        echo $this->env->getExtension('routing')->getPath("ecommerce_boutique_homepage");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Bienvenue en Casa <span class=\"caret\"></span></a>
\t\t  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
\t\t    <div class=\"w3ls_vegetables\">
\t\t      <ul>
\t\t        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ajouteCommande");
        echo "\">Hotels</a></li>
\t\t        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("listeCommande");
        echo "\">Restaurants</a></li>
\t\t      </ul>
\t\t    </div>                  
\t\t  </div> 
\t\t  <i>/</i> 
\t\t</li>

\t\t<li class=\"dropdown\">
\t\t  <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ecommerce_boutique_homepage");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Culture<span class=\"caret\"></span></a>
\t\t  <div class=\"dropdown-menu mega-dropdown-menu w3ls_vegetables_menu\">
\t\t    <div class=\"w3ls_vegetables\">
\t\t      <ul>
\t\t        
\t\t      </ul>
\t\t    </div>                  
\t\t  </div> 
\t\t  <i>/</i> 
\t\t</li>

\t\t<li><a>Annonces</a><i></i></li>
\t</ul>

";
        
        $__internal_f0e4726edae1c6db07affbcac54e40b8b9577b0aa85c4d26ede31a94d0214fd5->leave($__internal_f0e4726edae1c6db07affbcac54e40b8b9577b0aa85c4d26ede31a94d0214fd5_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  80 => 24,  76 => 23,  69 => 19,  59 => 12,  55 => 11,  51 => 10,  44 => 6,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block menu %}*/
/* 	<ul class="special_items">*/
/* 		<li class="coul"><a href="{{ path('homepage') }}">Accueil</a><i>/</i></li>*/
/* 		*/
/* 		<li class="dropdown">*/
/* 		  <a href="{{ path('ecommerce_boutique_homepage') }}" class="dropdown-toggle" data-toggle="dropdown">CasaBio 100%Bio<span class="caret"></span></a>*/
/* 		  <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/* 		    <div class="w3ls_vegetables">*/
/* 		      <ul>*/
/* 		        <li><a href="{{ path('ajouteCommande') }}">Produits halieutiques</a></li>*/
/* 		        <li><a href="{{ path('listeCommande') }}">Fruits et légumes</a></li>*/
/* 		        <li><a href="{{ path('listeCommande') }}">Divers </a></li>*/
/* 		      </ul>*/
/* 		    </div>                  */
/* 		  </div> */
/* 		  <i>/</i>*/
/* 		</li>*/
/* 		<li class="dropdown">*/
/* 		  <a href="{{ path('ecommerce_boutique_homepage') }}" class="dropdown-toggle" data-toggle="dropdown">Bienvenue en Casa <span class="caret"></span></a>*/
/* 		  <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">*/
/* 		    <div class="w3ls_vegetables">*/
/* 		      <ul>*/
/* 		        <li><a href="{{ path('ajouteCommande') }}">Hotels</a></li>*/
/* 		        <li><a href="{{ path('listeCommande') }}">Restaurants</a></li>*/
/* 		      </ul>*/
/* 		    </div>                  */
/* 		  </div> */
/* 		  <i>/</i> */
/* 		</li>*/
/* */
/* 		<li class="dropdown">*/
/* 		  <a href="{{ path('ecommerce_boutique_homepage') }}" class="dropdown-toggle" data-toggle="dropdown">Culture<span class="caret"></span></a>*/
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
/* 		<li><a>Annonces</a><i></i></li>*/
/* 	</ul>*/
/* */
/* {% endblock %}*/
