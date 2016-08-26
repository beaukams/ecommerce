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
        $__internal_db8e1bc2db5dc9dc34f095e943d3d8ca18ba47f0f5f1e5b9891fb56d01c1e92a = $this->env->getExtension("native_profiler");
        $__internal_db8e1bc2db5dc9dc34f095e943d3d8ca18ba47f0f5f1e5b9891fb56d01c1e92a->enter($__internal_db8e1bc2db5dc9dc34f095e943d3d8ca18ba47f0f5f1e5b9891fb56d01c1e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_db8e1bc2db5dc9dc34f095e943d3d8ca18ba47f0f5f1e5b9891fb56d01c1e92a->leave($__internal_db8e1bc2db5dc9dc34f095e943d3d8ca18ba47f0f5f1e5b9891fb56d01c1e92a_prof);

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
