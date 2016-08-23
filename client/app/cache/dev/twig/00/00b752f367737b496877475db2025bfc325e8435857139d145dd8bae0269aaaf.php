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
        $__internal_4282565621a8cc32f5cb552f599c2d3292acb9dcc6078cf29312773f05f60e11 = $this->env->getExtension("native_profiler");
        $__internal_4282565621a8cc32f5cb552f599c2d3292acb9dcc6078cf29312773f05f60e11->enter($__internal_4282565621a8cc32f5cb552f599c2d3292acb9dcc6078cf29312773f05f60e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4282565621a8cc32f5cb552f599c2d3292acb9dcc6078cf29312773f05f60e11->leave($__internal_4282565621a8cc32f5cb552f599c2d3292acb9dcc6078cf29312773f05f60e11_prof);

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
