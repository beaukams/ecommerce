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
        $__internal_c63505b7eba23ab6303679fb5f099d9df5d032f5bb5474fc4f67ecdd5e445f14 = $this->env->getExtension("native_profiler");
        $__internal_c63505b7eba23ab6303679fb5f099d9df5d032f5bb5474fc4f67ecdd5e445f14->enter($__internal_c63505b7eba23ab6303679fb5f099d9df5d032f5bb5474fc4f67ecdd5e445f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c63505b7eba23ab6303679fb5f099d9df5d032f5bb5474fc4f67ecdd5e445f14->leave($__internal_c63505b7eba23ab6303679fb5f099d9df5d032f5bb5474fc4f67ecdd5e445f14_prof);

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
