<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f271db8c16837fcd7c4db190d44dc7f35dbc1c59debda92f93bdd3369e799851 extends Twig_Template
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
        $__internal_4df132ec6c60d16398af07546c9fb853d27c8d0d43588ce43fdb784cec6212f4 = $this->env->getExtension("native_profiler");
        $__internal_4df132ec6c60d16398af07546c9fb853d27c8d0d43588ce43fdb784cec6212f4->enter($__internal_4df132ec6c60d16398af07546c9fb853d27c8d0d43588ce43fdb784cec6212f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4df132ec6c60d16398af07546c9fb853d27c8d0d43588ce43fdb784cec6212f4->leave($__internal_4df132ec6c60d16398af07546c9fb853d27c8d0d43588ce43fdb784cec6212f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
