<?php

/* DHotelBundle:DHotel:voirHotel.html.twig */
class __TwigTemplate_84cee1873659eb6930f65a2de224c222019113e1301495c650bb8813796a3850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DHotelBundle::base.html.twig", "DHotelBundle:DHotel:voirHotel.html.twig", 1);
        $this->blocks = array(
            'le_contenu' => array($this, 'block_le_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DHotelBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a132be439fc9e4a649f9160146164b93bd151ee4e047594131cf6e05df3cebe = $this->env->getExtension("native_profiler");
        $__internal_3a132be439fc9e4a649f9160146164b93bd151ee4e047594131cf6e05df3cebe->enter($__internal_3a132be439fc9e4a649f9160146164b93bd151ee4e047594131cf6e05df3cebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHotelBundle:DHotel:voirHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a132be439fc9e4a649f9160146164b93bd151ee4e047594131cf6e05df3cebe->leave($__internal_3a132be439fc9e4a649f9160146164b93bd151ee4e047594131cf6e05df3cebe_prof);

    }

    // line 2
    public function block_le_contenu($context, array $blocks = array())
    {
        $__internal_f58edaacef4c544a7e7db45d98d712fb034d7927e1d21704bb92aec82c550ddb = $this->env->getExtension("native_profiler");
        $__internal_f58edaacef4c544a7e7db45d98d712fb034d7927e1d21704bb92aec82c550ddb->enter($__internal_f58edaacef4c544a7e7db45d98d712fb034d7927e1d21704bb92aec82c550ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "le_contenu"));

        // line 3
        echo "\t<div>
\t\t<label>Iden: <div>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Hotel"]) ? $context["Hotel"] : $this->getContext($context, "Hotel")), "id", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Hotel: <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Hotel"]) ? $context["Hotel"] : $this->getContext($context, "Hotel")), "nomHotel", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Nom Photos:<div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Hotel"]) ? $context["Hotel"] : $this->getContext($context, "Hotel")), "photosHotel", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Departement :<div>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Hotel"]) ? $context["Hotel"] : $this->getContext($context, "Hotel")), "departementHotel", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Adresse : <div>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Hotel"]) ? $context["Hotel"] : $this->getContext($context, "Hotel")), "adresseHotel", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Telephone : <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Hotel"]) ? $context["Hotel"] : $this->getContext($context, "Hotel")), "telephoneHotel", array()), "html", null, true);
        echo "</div></label><br>
\t\t<label>Mail : <div>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Hotel"]) ? $context["Hotel"] : $this->getContext($context, "Hotel")), "mailHotel", array()), "html", null, true);
        echo "</div></label><br>
\t</div>
";
        
        $__internal_f58edaacef4c544a7e7db45d98d712fb034d7927e1d21704bb92aec82c550ddb->leave($__internal_f58edaacef4c544a7e7db45d98d712fb034d7927e1d21704bb92aec82c550ddb_prof);

    }

    public function getTemplateName()
    {
        return "DHotelBundle:DHotel:voirHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "DHotelBundle::base.html.twig" %}*/
/* {% block le_contenu  %}*/
/* 	<div>*/
/* 		<label>Iden: <div>{{ Hotel.id }}</div></label><br>*/
/* 		<label>Hotel: <div>{{ Hotel.nomHotel }}</div></label><br>*/
/* 		<label>Nom Photos:<div>{{ Hotel.photosHotel }}</div></label><br>*/
/* 		<label>Departement :<div>{{ Hotel.departementHotel }}</div></label><br>*/
/* 		<label>Adresse : <div>{{ Hotel.adresseHotel }}</div></label><br>*/
/* 		<label>Telephone : <div>{{ Hotel.telephoneHotel }}</div></label><br>*/
/* 		<label>Mail : <div>{{ Hotel.mailHotel }}</div></label><br>*/
/* 	</div>*/
/* {% endblock %}*/
