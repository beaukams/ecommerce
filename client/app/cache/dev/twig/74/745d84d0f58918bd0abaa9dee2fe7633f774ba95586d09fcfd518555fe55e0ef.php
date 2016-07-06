<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_47fe280a50f8fb861a78f5e26893fe43979d79e339a5870bef4e7e6634a2cbcd extends Twig_Template
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
        $__internal_c86baecc4596154bc1afeca6940429a84374d1c9b05525a939908aa23693060a = $this->env->getExtension("native_profiler");
        $__internal_c86baecc4596154bc1afeca6940429a84374d1c9b05525a939908aa23693060a->enter($__internal_c86baecc4596154bc1afeca6940429a84374d1c9b05525a939908aa23693060a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c86baecc4596154bc1afeca6940429a84374d1c9b05525a939908aa23693060a->leave($__internal_c86baecc4596154bc1afeca6940429a84374d1c9b05525a939908aa23693060a_prof);

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
