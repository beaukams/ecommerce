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
        $__internal_8f0285a170f2545eb4cdd6a3175ec088e1632e02eef1bde9322cea62df99c2bf = $this->env->getExtension("native_profiler");
        $__internal_8f0285a170f2545eb4cdd6a3175ec088e1632e02eef1bde9322cea62df99c2bf->enter($__internal_8f0285a170f2545eb4cdd6a3175ec088e1632e02eef1bde9322cea62df99c2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8f0285a170f2545eb4cdd6a3175ec088e1632e02eef1bde9322cea62df99c2bf->leave($__internal_8f0285a170f2545eb4cdd6a3175ec088e1632e02eef1bde9322cea62df99c2bf_prof);

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
