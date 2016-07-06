<?php

/* ::header.html.twig */
class __TwigTemplate_7f50e5edf51c61b16d558dafd7625ecd64be20f328b062d40115f83e2df09fe4 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("::menu.html.twig", "::header.html.twig", 2)->display($context);
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
        return array (  22 => 2,  19 => 1,);
    }
}
/* */
/* {% include "::menu.html.twig" %}*/
/* */
