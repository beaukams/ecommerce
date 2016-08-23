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
        $__internal_95682a027482d096ef1046fa754c86d9d3c17505b3f105515b9c3f84ac2952cb = $this->env->getExtension("native_profiler");
        $__internal_95682a027482d096ef1046fa754c86d9d3c17505b3f105515b9c3f84ac2952cb->enter($__internal_95682a027482d096ef1046fa754c86d9d3c17505b3f105515b9c3f84ac2952cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_95682a027482d096ef1046fa754c86d9d3c17505b3f105515b9c3f84ac2952cb->leave($__internal_95682a027482d096ef1046fa754c86d9d3c17505b3f105515b9c3f84ac2952cb_prof);

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
