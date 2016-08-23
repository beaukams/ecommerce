<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_313e02ffedf0e2589f37224638749f16b7cbe16d18b75070b61234e4aa5ea06e extends Twig_Template
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
        $__internal_11f401f86e6b795f63ede9669fc8264f8f1e7a66d8b16d674ee8e46c8c398c3e = $this->env->getExtension("native_profiler");
        $__internal_11f401f86e6b795f63ede9669fc8264f8f1e7a66d8b16d674ee8e46c8c398c3e->enter($__internal_11f401f86e6b795f63ede9669fc8264f8f1e7a66d8b16d674ee8e46c8c398c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_11f401f86e6b795f63ede9669fc8264f8f1e7a66d8b16d674ee8e46c8c398c3e->leave($__internal_11f401f86e6b795f63ede9669fc8264f8f1e7a66d8b16d674ee8e46c8c398c3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
