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
        $__internal_94fea7803288d4990cc2e4ca7c85c278b0ef5ec2de2eec7be60a0a6d1ab20819 = $this->env->getExtension("native_profiler");
        $__internal_94fea7803288d4990cc2e4ca7c85c278b0ef5ec2de2eec7be60a0a6d1ab20819->enter($__internal_94fea7803288d4990cc2e4ca7c85c278b0ef5ec2de2eec7be60a0a6d1ab20819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_94fea7803288d4990cc2e4ca7c85c278b0ef5ec2de2eec7be60a0a6d1ab20819->leave($__internal_94fea7803288d4990cc2e4ca7c85c278b0ef5ec2de2eec7be60a0a6d1ab20819_prof);

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
