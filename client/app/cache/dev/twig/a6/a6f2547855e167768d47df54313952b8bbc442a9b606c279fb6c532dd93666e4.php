<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5f2909bcda36a31a5dc9edfdf221af466728af322f33b87ceb3d6a05ed16d64c extends Twig_Template
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
        $__internal_d8b9bd7f6ef2b278ee0739d91ddf1adcbb30bf78fcda83a87ec4ef52f070375f = $this->env->getExtension("native_profiler");
        $__internal_d8b9bd7f6ef2b278ee0739d91ddf1adcbb30bf78fcda83a87ec4ef52f070375f->enter($__internal_d8b9bd7f6ef2b278ee0739d91ddf1adcbb30bf78fcda83a87ec4ef52f070375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d8b9bd7f6ef2b278ee0739d91ddf1adcbb30bf78fcda83a87ec4ef52f070375f->leave($__internal_d8b9bd7f6ef2b278ee0739d91ddf1adcbb30bf78fcda83a87ec4ef52f070375f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
