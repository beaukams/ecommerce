<?php

/* ::header.html.twig */
class __TwigTemplate_76240aa113e1e46a7acdc76092fc7391 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "
";
        // line 2
        $this->env->loadTemplate("::menu.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
