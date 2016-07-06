<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_eaf2288caf2324f689bd028a512ec3a052c19e535a320946f74097f9cd073411 extends Twig_Template
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
        $__internal_f8d932700f84b02325e5b68c9e2832b385228aff1d795ba5a13893158b74a53e = $this->env->getExtension("native_profiler");
        $__internal_f8d932700f84b02325e5b68c9e2832b385228aff1d795ba5a13893158b74a53e->enter($__internal_f8d932700f84b02325e5b68c9e2832b385228aff1d795ba5a13893158b74a53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f8d932700f84b02325e5b68c9e2832b385228aff1d795ba5a13893158b74a53e->leave($__internal_f8d932700f84b02325e5b68c9e2832b385228aff1d795ba5a13893158b74a53e_prof);

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
