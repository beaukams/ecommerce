<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a016b316e677cf4724e690470aa0f728e2cc6ffdcdf9fd6ba0b6bcaf01ba5631 extends Twig_Template
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
        $__internal_7866476046cac84688078df6ff9e2668b3c6e767180ed7f428b59f827ed1e73e = $this->env->getExtension("native_profiler");
        $__internal_7866476046cac84688078df6ff9e2668b3c6e767180ed7f428b59f827ed1e73e->enter($__internal_7866476046cac84688078df6ff9e2668b3c6e767180ed7f428b59f827ed1e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7866476046cac84688078df6ff9e2668b3c6e767180ed7f428b59f827ed1e73e->leave($__internal_7866476046cac84688078df6ff9e2668b3c6e767180ed7f428b59f827ed1e73e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
