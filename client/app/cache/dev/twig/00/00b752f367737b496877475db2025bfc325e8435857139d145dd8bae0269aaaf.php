<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_78f6fb345c1d7ea56c5ee675e59fd05980f5a34beb55d0866c65dbc54e65846e extends Twig_Template
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
        $__internal_da552f3b4edf4ba7292923584e849e6dff02d3a3cd6d701138f187997bac6593 = $this->env->getExtension("native_profiler");
        $__internal_da552f3b4edf4ba7292923584e849e6dff02d3a3cd6d701138f187997bac6593->enter($__internal_da552f3b4edf4ba7292923584e849e6dff02d3a3cd6d701138f187997bac6593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_da552f3b4edf4ba7292923584e849e6dff02d3a3cd6d701138f187997bac6593->leave($__internal_da552f3b4edf4ba7292923584e849e6dff02d3a3cd6d701138f187997bac6593_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
