<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_82d73788a4a82d2fc497cc496c50ccfa807e770daaea8e9a33687b670adb761c extends Twig_Template
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
        $__internal_9df19d4db1598ec7829aede7a2b39b0ad0148f9e75665c0aa997e1963c0ccd58 = $this->env->getExtension("native_profiler");
        $__internal_9df19d4db1598ec7829aede7a2b39b0ad0148f9e75665c0aa997e1963c0ccd58->enter($__internal_9df19d4db1598ec7829aede7a2b39b0ad0148f9e75665c0aa997e1963c0ccd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9df19d4db1598ec7829aede7a2b39b0ad0148f9e75665c0aa997e1963c0ccd58->leave($__internal_9df19d4db1598ec7829aede7a2b39b0ad0148f9e75665c0aa997e1963c0ccd58_prof);

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
