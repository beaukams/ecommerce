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
        $__internal_ad54fb96cf75893856129be743d07459127b63bdfddae68b9b7b57662a2cbf3c = $this->env->getExtension("native_profiler");
        $__internal_ad54fb96cf75893856129be743d07459127b63bdfddae68b9b7b57662a2cbf3c->enter($__internal_ad54fb96cf75893856129be743d07459127b63bdfddae68b9b7b57662a2cbf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ad54fb96cf75893856129be743d07459127b63bdfddae68b9b7b57662a2cbf3c->leave($__internal_ad54fb96cf75893856129be743d07459127b63bdfddae68b9b7b57662a2cbf3c_prof);

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
