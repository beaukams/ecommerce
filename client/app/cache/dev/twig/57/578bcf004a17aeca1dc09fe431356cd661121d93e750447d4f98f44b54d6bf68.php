<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7d651fe070cadfb895617c68cab413da2d1eb646c080dc8f07ae32cb80fe0723 extends Twig_Template
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
        $__internal_d30b45e2b8f4b1e397112cd68d0da781a8041f5971ac3befdda647c5cec0f026 = $this->env->getExtension("native_profiler");
        $__internal_d30b45e2b8f4b1e397112cd68d0da781a8041f5971ac3befdda647c5cec0f026->enter($__internal_d30b45e2b8f4b1e397112cd68d0da781a8041f5971ac3befdda647c5cec0f026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d30b45e2b8f4b1e397112cd68d0da781a8041f5971ac3befdda647c5cec0f026->leave($__internal_d30b45e2b8f4b1e397112cd68d0da781a8041f5971ac3befdda647c5cec0f026_prof);

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
