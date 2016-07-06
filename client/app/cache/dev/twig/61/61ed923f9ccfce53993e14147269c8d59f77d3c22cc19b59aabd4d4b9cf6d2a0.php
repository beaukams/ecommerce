<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ea3aad44a1e9f76ef4f469c1fc787468d315878893e30256190109107375515d extends Twig_Template
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
        $__internal_665b4f7372bd86a04b1c97d8aa4ea86fcc94c767083344df75157da5b0c096d7 = $this->env->getExtension("native_profiler");
        $__internal_665b4f7372bd86a04b1c97d8aa4ea86fcc94c767083344df75157da5b0c096d7->enter($__internal_665b4f7372bd86a04b1c97d8aa4ea86fcc94c767083344df75157da5b0c096d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_665b4f7372bd86a04b1c97d8aa4ea86fcc94c767083344df75157da5b0c096d7->leave($__internal_665b4f7372bd86a04b1c97d8aa4ea86fcc94c767083344df75157da5b0c096d7_prof);

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
