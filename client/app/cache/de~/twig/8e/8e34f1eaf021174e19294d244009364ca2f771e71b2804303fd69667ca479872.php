<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_07bef969611013da9306cc5d150c0be8048ad7b331e9e80373a2be5d42bcf9b0 extends Twig_Template
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
        $__internal_46402e1e9d50062b16d7d9d8d9f77ff55095efc85ff492ebc1acf52191d66549 = $this->env->getExtension("native_profiler");
        $__internal_46402e1e9d50062b16d7d9d8d9f77ff55095efc85ff492ebc1acf52191d66549->enter($__internal_46402e1e9d50062b16d7d9d8d9f77ff55095efc85ff492ebc1acf52191d66549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_46402e1e9d50062b16d7d9d8d9f77ff55095efc85ff492ebc1acf52191d66549->leave($__internal_46402e1e9d50062b16d7d9d8d9f77ff55095efc85ff492ebc1acf52191d66549_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
