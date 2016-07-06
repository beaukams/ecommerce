<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0d60b47f478dd8964f5603a0ccd7ca3f342fc22a37663652b80c1a41dcc6717d extends Twig_Template
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
        $__internal_82d3c4f32fe79574703db47226404a951f8a95be76751182a8cd9c2768399e44 = $this->env->getExtension("native_profiler");
        $__internal_82d3c4f32fe79574703db47226404a951f8a95be76751182a8cd9c2768399e44->enter($__internal_82d3c4f32fe79574703db47226404a951f8a95be76751182a8cd9c2768399e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_82d3c4f32fe79574703db47226404a951f8a95be76751182a8cd9c2768399e44->leave($__internal_82d3c4f32fe79574703db47226404a951f8a95be76751182a8cd9c2768399e44_prof);

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
