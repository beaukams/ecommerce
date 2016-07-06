<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b26653f92342a0920501871f1e5132d36b8e8b04a08461eebab2ee92ac3a6623 extends Twig_Template
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
        $__internal_0a8d73d3b1b0bb10945337d3869205d82324a3dd79585d5864b98832184293c5 = $this->env->getExtension("native_profiler");
        $__internal_0a8d73d3b1b0bb10945337d3869205d82324a3dd79585d5864b98832184293c5->enter($__internal_0a8d73d3b1b0bb10945337d3869205d82324a3dd79585d5864b98832184293c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0a8d73d3b1b0bb10945337d3869205d82324a3dd79585d5864b98832184293c5->leave($__internal_0a8d73d3b1b0bb10945337d3869205d82324a3dd79585d5864b98832184293c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
