<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a510dad90e245346b145a58b6a83c12c5191c40b00a8bda759b13e13eb546fe2 extends Twig_Template
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
        $__internal_87c0f0bb82a80c409cec5f054f60321044d5d1034d2462af5a1c477c3f056fa0 = $this->env->getExtension("native_profiler");
        $__internal_87c0f0bb82a80c409cec5f054f60321044d5d1034d2462af5a1c477c3f056fa0->enter($__internal_87c0f0bb82a80c409cec5f054f60321044d5d1034d2462af5a1c477c3f056fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_87c0f0bb82a80c409cec5f054f60321044d5d1034d2462af5a1c477c3f056fa0->leave($__internal_87c0f0bb82a80c409cec5f054f60321044d5d1034d2462af5a1c477c3f056fa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
