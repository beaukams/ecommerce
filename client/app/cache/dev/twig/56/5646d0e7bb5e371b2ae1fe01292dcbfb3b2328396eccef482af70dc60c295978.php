<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b802713ccbea88c509521839fd9e15cb28a95be2b790162ce467332890c18bb7 extends Twig_Template
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
        $__internal_c094f5f7f617918cb00e0e654309485cc77146fd5b6c8e8674c07587d5bed20b = $this->env->getExtension("native_profiler");
        $__internal_c094f5f7f617918cb00e0e654309485cc77146fd5b6c8e8674c07587d5bed20b->enter($__internal_c094f5f7f617918cb00e0e654309485cc77146fd5b6c8e8674c07587d5bed20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c094f5f7f617918cb00e0e654309485cc77146fd5b6c8e8674c07587d5bed20b->leave($__internal_c094f5f7f617918cb00e0e654309485cc77146fd5b6c8e8674c07587d5bed20b_prof);

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
