<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b8e7e212d23fa0259aebf6c1b57a49fd6886a3cff65e678dc620e3e2df0baee3 extends Twig_Template
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
        $__internal_c171976d514b196859d1044a28e398bd2fed1c8a51ae20b2639e1f835762a2c2 = $this->env->getExtension("native_profiler");
        $__internal_c171976d514b196859d1044a28e398bd2fed1c8a51ae20b2639e1f835762a2c2->enter($__internal_c171976d514b196859d1044a28e398bd2fed1c8a51ae20b2639e1f835762a2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c171976d514b196859d1044a28e398bd2fed1c8a51ae20b2639e1f835762a2c2->leave($__internal_c171976d514b196859d1044a28e398bd2fed1c8a51ae20b2639e1f835762a2c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
