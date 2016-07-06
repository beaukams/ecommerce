<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f16545e9105cf01af5da87aa646337a5647ef3dcdc4f8d8f98ed1902a11b61b1 extends Twig_Template
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
        $__internal_45f487aefbbeed288f6694d32768ac4255308b2c5921a297afb7e5cf3a932d17 = $this->env->getExtension("native_profiler");
        $__internal_45f487aefbbeed288f6694d32768ac4255308b2c5921a297afb7e5cf3a932d17->enter($__internal_45f487aefbbeed288f6694d32768ac4255308b2c5921a297afb7e5cf3a932d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_45f487aefbbeed288f6694d32768ac4255308b2c5921a297afb7e5cf3a932d17->leave($__internal_45f487aefbbeed288f6694d32768ac4255308b2c5921a297afb7e5cf3a932d17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
