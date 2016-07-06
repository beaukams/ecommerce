<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e98fb458b747d3eb172f36d33d53c521878243b57efef605501e744a8cb31f13 extends Twig_Template
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
        $__internal_98049c3f434fe474e9e8358a76530b6bc415178ebbc55684969d560244f3b67e = $this->env->getExtension("native_profiler");
        $__internal_98049c3f434fe474e9e8358a76530b6bc415178ebbc55684969d560244f3b67e->enter($__internal_98049c3f434fe474e9e8358a76530b6bc415178ebbc55684969d560244f3b67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_98049c3f434fe474e9e8358a76530b6bc415178ebbc55684969d560244f3b67e->leave($__internal_98049c3f434fe474e9e8358a76530b6bc415178ebbc55684969d560244f3b67e_prof);

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
