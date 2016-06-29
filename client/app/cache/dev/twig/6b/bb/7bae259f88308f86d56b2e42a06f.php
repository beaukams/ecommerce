<?php

/* EcommerceProduitBundle:Produit:ajoutProduit.html.twig */
class __TwigTemplate_6bbb7bae259f88308f86d56b2e42a06f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Bienvenue sur ma première page avec le Site du Zéro
\t\t!</title>
\t</head>
\t<body>
\t\t<h1>Hello World !</h1>
\t\t:
\t\t<p>
\t\tLe Hello World est un grand classique en programmation.
\t\tIl signifie énormément, car cela veut dire que vous avez
\t\tréussi à exécuter le programme pour accomplir une tâche simple
\t\tafficher ce hello world !
\t\t</p>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EcommerceProduitBundle:Produit:ajoutProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
