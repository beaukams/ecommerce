<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cb61eeda3d68d70b187d868749e2ab60e9e8ca06b9c150ca28837225586a964b extends Twig_Template
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
        $__internal_656c9e63edd4844e60f05eb63b293d09d26f6f94e308409454ada8937de32806 = $this->env->getExtension("native_profiler");
        $__internal_656c9e63edd4844e60f05eb63b293d09d26f6f94e308409454ada8937de32806->enter($__internal_656c9e63edd4844e60f05eb63b293d09d26f6f94e308409454ada8937de32806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_656c9e63edd4844e60f05eb63b293d09d26f6f94e308409454ada8937de32806->leave($__internal_656c9e63edd4844e60f05eb63b293d09d26f6f94e308409454ada8937de32806_prof);

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
