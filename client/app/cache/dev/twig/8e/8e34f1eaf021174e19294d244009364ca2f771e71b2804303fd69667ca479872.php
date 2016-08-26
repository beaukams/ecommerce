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
        $__internal_66c02593a6ee6fd684119af61c17ace4a1b95318810f08c2a8fa4de143b3c56b = $this->env->getExtension("native_profiler");
        $__internal_66c02593a6ee6fd684119af61c17ace4a1b95318810f08c2a8fa4de143b3c56b->enter($__internal_66c02593a6ee6fd684119af61c17ace4a1b95318810f08c2a8fa4de143b3c56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66c02593a6ee6fd684119af61c17ace4a1b95318810f08c2a8fa4de143b3c56b->leave($__internal_66c02593a6ee6fd684119af61c17ace4a1b95318810f08c2a8fa4de143b3c56b_prof);

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
