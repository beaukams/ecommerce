<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_43aae2e75700bddc81950a4d9a5dae0db45cfe58d7b031f8cd9b2cdd75692f40 extends Twig_Template
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
        $__internal_13a23497caf8f20e731cf34e7cd8ef9725177e4a05743149cab4124ece4eb809 = $this->env->getExtension("native_profiler");
        $__internal_13a23497caf8f20e731cf34e7cd8ef9725177e4a05743149cab4124ece4eb809->enter($__internal_13a23497caf8f20e731cf34e7cd8ef9725177e4a05743149cab4124ece4eb809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_13a23497caf8f20e731cf34e7cd8ef9725177e4a05743149cab4124ece4eb809->leave($__internal_13a23497caf8f20e731cf34e7cd8ef9725177e4a05743149cab4124ece4eb809_prof);

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
