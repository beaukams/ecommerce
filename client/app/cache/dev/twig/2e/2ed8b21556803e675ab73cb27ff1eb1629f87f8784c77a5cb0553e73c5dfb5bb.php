<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_de16558b4d631fdab5e15e9efc1869d42f111f3f7838d4867a249109170081f3 extends Twig_Template
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
        $__internal_3a466d4accac3384086b0da5396d7d64c39bf8497d974aeeb7ca121cc680e7d9 = $this->env->getExtension("native_profiler");
        $__internal_3a466d4accac3384086b0da5396d7d64c39bf8497d974aeeb7ca121cc680e7d9->enter($__internal_3a466d4accac3384086b0da5396d7d64c39bf8497d974aeeb7ca121cc680e7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3a466d4accac3384086b0da5396d7d64c39bf8497d974aeeb7ca121cc680e7d9->leave($__internal_3a466d4accac3384086b0da5396d7d64c39bf8497d974aeeb7ca121cc680e7d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
