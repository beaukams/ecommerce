<?php

/* EcommerceProduitBundle:Produit:modifieProduit.html.twig */
class __TwigTemplate_fcce4b1e2111203e48ce35d28882e565 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("EcommerceProduitBundle::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifieProduit", array("id" => $this->getContext($context, 'id'))), "html");
        echo " ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo "\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
\t\t<input type='submit' value='Valider'/>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "EcommerceProduitBundle:Produit:modifieProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
