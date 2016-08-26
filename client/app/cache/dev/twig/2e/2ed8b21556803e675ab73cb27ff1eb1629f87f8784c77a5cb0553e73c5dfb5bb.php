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
        $__internal_801b18c59b69a7a6047d8e5177af4c7117364fcb033d47ee6ce248074af08b7f = $this->env->getExtension("native_profiler");
        $__internal_801b18c59b69a7a6047d8e5177af4c7117364fcb033d47ee6ce248074af08b7f->enter($__internal_801b18c59b69a7a6047d8e5177af4c7117364fcb033d47ee6ce248074af08b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_801b18c59b69a7a6047d8e5177af4c7117364fcb033d47ee6ce248074af08b7f->leave($__internal_801b18c59b69a7a6047d8e5177af4c7117364fcb033d47ee6ce248074af08b7f_prof);

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
