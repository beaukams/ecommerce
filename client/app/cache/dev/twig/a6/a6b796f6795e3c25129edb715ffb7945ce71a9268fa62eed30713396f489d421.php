<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_99fbb8d9fd38013b2d1dd683ac43d59eef9a27765b80a0cb713ad3b3a7404aff extends Twig_Template
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
        $__internal_e4c5eb36187def136d297e2928d6bbb82f53b9f7a66d78be186ab023bf064945 = $this->env->getExtension("native_profiler");
        $__internal_e4c5eb36187def136d297e2928d6bbb82f53b9f7a66d78be186ab023bf064945->enter($__internal_e4c5eb36187def136d297e2928d6bbb82f53b9f7a66d78be186ab023bf064945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e4c5eb36187def136d297e2928d6bbb82f53b9f7a66d78be186ab023bf064945->leave($__internal_e4c5eb36187def136d297e2928d6bbb82f53b9f7a66d78be186ab023bf064945_prof);

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
