<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2984df7a150cac49efbea07325062f6ef0c98de24cd5cc352af8ea9600547b30 extends Twig_Template
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
        $__internal_de244926e6eeed4886fc6ae1d17fa89f550e1ed39736764b1c7c3be6fa6d9e20 = $this->env->getExtension("native_profiler");
        $__internal_de244926e6eeed4886fc6ae1d17fa89f550e1ed39736764b1c7c3be6fa6d9e20->enter($__internal_de244926e6eeed4886fc6ae1d17fa89f550e1ed39736764b1c7c3be6fa6d9e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_de244926e6eeed4886fc6ae1d17fa89f550e1ed39736764b1c7c3be6fa6d9e20->leave($__internal_de244926e6eeed4886fc6ae1d17fa89f550e1ed39736764b1c7c3be6fa6d9e20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
