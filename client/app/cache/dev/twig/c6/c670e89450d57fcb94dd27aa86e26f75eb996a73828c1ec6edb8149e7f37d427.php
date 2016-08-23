<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d6d8d887e6864ea34c021bf2535741a269462c9a5434df701dd4665dfaee20d4 extends Twig_Template
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
        $__internal_bfc4d6a9d3cad48e15578e26f3910d34978451ac5383f226bbe646608c307ad0 = $this->env->getExtension("native_profiler");
        $__internal_bfc4d6a9d3cad48e15578e26f3910d34978451ac5383f226bbe646608c307ad0->enter($__internal_bfc4d6a9d3cad48e15578e26f3910d34978451ac5383f226bbe646608c307ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bfc4d6a9d3cad48e15578e26f3910d34978451ac5383f226bbe646608c307ad0->leave($__internal_bfc4d6a9d3cad48e15578e26f3910d34978451ac5383f226bbe646608c307ad0_prof);

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
