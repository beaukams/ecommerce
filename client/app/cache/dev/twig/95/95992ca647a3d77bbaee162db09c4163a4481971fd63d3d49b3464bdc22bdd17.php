<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_81c2c8e30b01569e41e491713972b6952091ef1c41ef20068afb57a641ddf935 extends Twig_Template
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
        $__internal_04b21763d545289c810ccfaf473b138626c9601666dc21f48f0641e9940c6435 = $this->env->getExtension("native_profiler");
        $__internal_04b21763d545289c810ccfaf473b138626c9601666dc21f48f0641e9940c6435->enter($__internal_04b21763d545289c810ccfaf473b138626c9601666dc21f48f0641e9940c6435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_04b21763d545289c810ccfaf473b138626c9601666dc21f48f0641e9940c6435->leave($__internal_04b21763d545289c810ccfaf473b138626c9601666dc21f48f0641e9940c6435_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
