<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_290b158164657517eaf1f7f9f1c14833ebf6908ba9a8def1534c7dee7916541d extends Twig_Template
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
        $__internal_dddffc601c267af7731f04950dfe1cf9e1ffe0d3438a94a6df2f70c81d487379 = $this->env->getExtension("native_profiler");
        $__internal_dddffc601c267af7731f04950dfe1cf9e1ffe0d3438a94a6df2f70c81d487379->enter($__internal_dddffc601c267af7731f04950dfe1cf9e1ffe0d3438a94a6df2f70c81d487379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dddffc601c267af7731f04950dfe1cf9e1ffe0d3438a94a6df2f70c81d487379->leave($__internal_dddffc601c267af7731f04950dfe1cf9e1ffe0d3438a94a6df2f70c81d487379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
