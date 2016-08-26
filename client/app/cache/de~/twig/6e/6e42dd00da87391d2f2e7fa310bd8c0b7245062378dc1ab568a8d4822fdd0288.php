<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c668e9387c78e3e0ff61475be27606c781376ee95cca9b9f31ad2a40e2d0ed45 extends Twig_Template
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
        $__internal_ff2bda103f00435395f9933acf34f01b78c200982ed4bde2ad5b552592cdda69 = $this->env->getExtension("native_profiler");
        $__internal_ff2bda103f00435395f9933acf34f01b78c200982ed4bde2ad5b552592cdda69->enter($__internal_ff2bda103f00435395f9933acf34f01b78c200982ed4bde2ad5b552592cdda69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ff2bda103f00435395f9933acf34f01b78c200982ed4bde2ad5b552592cdda69->leave($__internal_ff2bda103f00435395f9933acf34f01b78c200982ed4bde2ad5b552592cdda69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
