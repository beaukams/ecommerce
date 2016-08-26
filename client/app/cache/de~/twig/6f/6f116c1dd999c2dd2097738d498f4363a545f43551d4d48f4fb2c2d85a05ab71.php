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
        $__internal_3119eb8d00e3b394922229bf9ee0673c8cb4f80c3ef6a31819cf2021e770b8b6 = $this->env->getExtension("native_profiler");
        $__internal_3119eb8d00e3b394922229bf9ee0673c8cb4f80c3ef6a31819cf2021e770b8b6->enter($__internal_3119eb8d00e3b394922229bf9ee0673c8cb4f80c3ef6a31819cf2021e770b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3119eb8d00e3b394922229bf9ee0673c8cb4f80c3ef6a31819cf2021e770b8b6->leave($__internal_3119eb8d00e3b394922229bf9ee0673c8cb4f80c3ef6a31819cf2021e770b8b6_prof);

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
