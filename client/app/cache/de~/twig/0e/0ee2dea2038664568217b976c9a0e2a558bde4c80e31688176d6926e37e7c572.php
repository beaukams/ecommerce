<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0b1998dde1da9951c1e4b08f00bd27c3bada7196a6854c4329b412f0a080dad7 extends Twig_Template
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
        $__internal_940fe93af980539c976863feb3b9337318f640ff4ff689d5e3bb0c6061bede73 = $this->env->getExtension("native_profiler");
        $__internal_940fe93af980539c976863feb3b9337318f640ff4ff689d5e3bb0c6061bede73->enter($__internal_940fe93af980539c976863feb3b9337318f640ff4ff689d5e3bb0c6061bede73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_940fe93af980539c976863feb3b9337318f640ff4ff689d5e3bb0c6061bede73->leave($__internal_940fe93af980539c976863feb3b9337318f640ff4ff689d5e3bb0c6061bede73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
