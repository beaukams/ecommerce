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
        $__internal_fe506a6ae67ec9f02eeb8180c0aac3f84cb8ead8f26bd58c55feb6db8adff1a8 = $this->env->getExtension("native_profiler");
        $__internal_fe506a6ae67ec9f02eeb8180c0aac3f84cb8ead8f26bd58c55feb6db8adff1a8->enter($__internal_fe506a6ae67ec9f02eeb8180c0aac3f84cb8ead8f26bd58c55feb6db8adff1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fe506a6ae67ec9f02eeb8180c0aac3f84cb8ead8f26bd58c55feb6db8adff1a8->leave($__internal_fe506a6ae67ec9f02eeb8180c0aac3f84cb8ead8f26bd58c55feb6db8adff1a8_prof);

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
