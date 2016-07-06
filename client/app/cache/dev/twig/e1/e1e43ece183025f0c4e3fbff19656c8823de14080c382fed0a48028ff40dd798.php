<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9a0a0a102bf3fcfe1216e5527d4c8e6dc2e9a1e4d93ba7b2d949acd8db5cb6da extends Twig_Template
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
        $__internal_019574bdaad5eba8038ce23e64695c75170b1b09d191eaf954dd13c3d5d691f7 = $this->env->getExtension("native_profiler");
        $__internal_019574bdaad5eba8038ce23e64695c75170b1b09d191eaf954dd13c3d5d691f7->enter($__internal_019574bdaad5eba8038ce23e64695c75170b1b09d191eaf954dd13c3d5d691f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_019574bdaad5eba8038ce23e64695c75170b1b09d191eaf954dd13c3d5d691f7->leave($__internal_019574bdaad5eba8038ce23e64695c75170b1b09d191eaf954dd13c3d5d691f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
