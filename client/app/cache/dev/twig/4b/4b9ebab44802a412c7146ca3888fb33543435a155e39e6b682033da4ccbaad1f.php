<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e0e9470fb374600b78825120a28f8e663d1632fb8801df934ab0f5acfbbff3c4 extends Twig_Template
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
        $__internal_752d5ed0bbde240eca9502ac285e3a7b791b07077de183c6ed0438d931282b81 = $this->env->getExtension("native_profiler");
        $__internal_752d5ed0bbde240eca9502ac285e3a7b791b07077de183c6ed0438d931282b81->enter($__internal_752d5ed0bbde240eca9502ac285e3a7b791b07077de183c6ed0438d931282b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_752d5ed0bbde240eca9502ac285e3a7b791b07077de183c6ed0438d931282b81->leave($__internal_752d5ed0bbde240eca9502ac285e3a7b791b07077de183c6ed0438d931282b81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
