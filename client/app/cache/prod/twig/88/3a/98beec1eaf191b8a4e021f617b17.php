<?php

/* EcommerceProduitBundle::base.html.twig */
class __TwigTemplate_883a98beec1eaf191b8a4e021f617b17 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Produit: ";
        echo $this->renderParentBlock("title", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "EcommerceProduitBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
