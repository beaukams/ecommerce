<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a817987442bd7f04f523596661946003d91610271461272992bc7b305db1200f extends Twig_Template
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
        $__internal_47b26f172639cc355b676e605d55d608cba915308f9a3c971ffd9d5868880274 = $this->env->getExtension("native_profiler");
        $__internal_47b26f172639cc355b676e605d55d608cba915308f9a3c971ffd9d5868880274->enter($__internal_47b26f172639cc355b676e605d55d608cba915308f9a3c971ffd9d5868880274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_47b26f172639cc355b676e605d55d608cba915308f9a3c971ffd9d5868880274->leave($__internal_47b26f172639cc355b676e605d55d608cba915308f9a3c971ffd9d5868880274_prof);

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
