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
        $__internal_3e92f1762c59a2898ffdc67f6708f48db9ff5eee54fb30c12cc3aa5dce99f7ae = $this->env->getExtension("native_profiler");
        $__internal_3e92f1762c59a2898ffdc67f6708f48db9ff5eee54fb30c12cc3aa5dce99f7ae->enter($__internal_3e92f1762c59a2898ffdc67f6708f48db9ff5eee54fb30c12cc3aa5dce99f7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3e92f1762c59a2898ffdc67f6708f48db9ff5eee54fb30c12cc3aa5dce99f7ae->leave($__internal_3e92f1762c59a2898ffdc67f6708f48db9ff5eee54fb30c12cc3aa5dce99f7ae_prof);

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
