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
        $__internal_e626468ec6370af8583b9a1985fce27ca06b36007a9d37c4718dbb1a5d033f8a = $this->env->getExtension("native_profiler");
        $__internal_e626468ec6370af8583b9a1985fce27ca06b36007a9d37c4718dbb1a5d033f8a->enter($__internal_e626468ec6370af8583b9a1985fce27ca06b36007a9d37c4718dbb1a5d033f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e626468ec6370af8583b9a1985fce27ca06b36007a9d37c4718dbb1a5d033f8a->leave($__internal_e626468ec6370af8583b9a1985fce27ca06b36007a9d37c4718dbb1a5d033f8a_prof);

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
