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
        $__internal_4aaa47d8eb89e4f278e8621c8c856c50659c6bccb7a0b76488b9ec46c5d566aa = $this->env->getExtension("native_profiler");
        $__internal_4aaa47d8eb89e4f278e8621c8c856c50659c6bccb7a0b76488b9ec46c5d566aa->enter($__internal_4aaa47d8eb89e4f278e8621c8c856c50659c6bccb7a0b76488b9ec46c5d566aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4aaa47d8eb89e4f278e8621c8c856c50659c6bccb7a0b76488b9ec46c5d566aa->leave($__internal_4aaa47d8eb89e4f278e8621c8c856c50659c6bccb7a0b76488b9ec46c5d566aa_prof);

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
