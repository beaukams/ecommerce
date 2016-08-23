<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4008c4bb761b65f9fccefffca2daded17d0e5ea0d738bfb92031251a9727e62c extends Twig_Template
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
        $__internal_d149af9ae2859a4d97f400cdb03600abd56d21ed3bb0a5d4411157b60999f06e = $this->env->getExtension("native_profiler");
        $__internal_d149af9ae2859a4d97f400cdb03600abd56d21ed3bb0a5d4411157b60999f06e->enter($__internal_d149af9ae2859a4d97f400cdb03600abd56d21ed3bb0a5d4411157b60999f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d149af9ae2859a4d97f400cdb03600abd56d21ed3bb0a5d4411157b60999f06e->leave($__internal_d149af9ae2859a4d97f400cdb03600abd56d21ed3bb0a5d4411157b60999f06e_prof);

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
