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
        $__internal_37c8c89f2745ee4009aa5150c01b231ac16b9e00989ae34f558a44715d87a6c2 = $this->env->getExtension("native_profiler");
        $__internal_37c8c89f2745ee4009aa5150c01b231ac16b9e00989ae34f558a44715d87a6c2->enter($__internal_37c8c89f2745ee4009aa5150c01b231ac16b9e00989ae34f558a44715d87a6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37c8c89f2745ee4009aa5150c01b231ac16b9e00989ae34f558a44715d87a6c2->leave($__internal_37c8c89f2745ee4009aa5150c01b231ac16b9e00989ae34f558a44715d87a6c2_prof);

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
