<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_46ffd7863be112f02ab8f53b607797b638e9bdae51906d640669e491bde08d1e extends Twig_Template
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
        $__internal_a2b755cb687ac25031bc6637bcb2fc8a60da574bb79031a6b931a4b64a809206 = $this->env->getExtension("native_profiler");
        $__internal_a2b755cb687ac25031bc6637bcb2fc8a60da574bb79031a6b931a4b64a809206->enter($__internal_a2b755cb687ac25031bc6637bcb2fc8a60da574bb79031a6b931a4b64a809206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a2b755cb687ac25031bc6637bcb2fc8a60da574bb79031a6b931a4b64a809206->leave($__internal_a2b755cb687ac25031bc6637bcb2fc8a60da574bb79031a6b931a4b64a809206_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
