<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b998bf06c15248bf32fe96a26b15c55174373e3f858296c63b33a9fb44768195 extends Twig_Template
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
        $__internal_d5a396f73eae9293707a75d70f9eff9e7bfe676c93ce6da319fa1ca85f6d22f0 = $this->env->getExtension("native_profiler");
        $__internal_d5a396f73eae9293707a75d70f9eff9e7bfe676c93ce6da319fa1ca85f6d22f0->enter($__internal_d5a396f73eae9293707a75d70f9eff9e7bfe676c93ce6da319fa1ca85f6d22f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d5a396f73eae9293707a75d70f9eff9e7bfe676c93ce6da319fa1ca85f6d22f0->leave($__internal_d5a396f73eae9293707a75d70f9eff9e7bfe676c93ce6da319fa1ca85f6d22f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
