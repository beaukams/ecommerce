<?php

/* EcommerceProduitBundle:Default:index.html.twig */
class __TwigTemplate_74f429e2bdc2d035971390639aee76fa extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!
";
    }

    public function getTemplateName()
    {
        return "EcommerceProduitBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
