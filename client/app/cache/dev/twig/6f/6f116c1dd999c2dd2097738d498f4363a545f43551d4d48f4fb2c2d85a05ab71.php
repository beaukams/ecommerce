<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cc22719b4c38c4128ee0e8e651e9b39b67b2e02deacbf55e08c3acf195f9d6ef extends Twig_Template
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
        $__internal_2f8e4bea0ee34d00224ae4be87228de89b7d61ab7827b8e3ac116130f5475fed = $this->env->getExtension("native_profiler");
        $__internal_2f8e4bea0ee34d00224ae4be87228de89b7d61ab7827b8e3ac116130f5475fed->enter($__internal_2f8e4bea0ee34d00224ae4be87228de89b7d61ab7827b8e3ac116130f5475fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2f8e4bea0ee34d00224ae4be87228de89b7d61ab7827b8e3ac116130f5475fed->leave($__internal_2f8e4bea0ee34d00224ae4be87228de89b7d61ab7827b8e3ac116130f5475fed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
