<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ab58f53a8cd15bea192911d7c27bb21cf7f0509c2196a4a7b735ea712ef74a08 extends Twig_Template
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
        $__internal_e51099a56b7b3a340662c7143767abc21b458b855161b2c459683a4581d88ecf = $this->env->getExtension("native_profiler");
        $__internal_e51099a56b7b3a340662c7143767abc21b458b855161b2c459683a4581d88ecf->enter($__internal_e51099a56b7b3a340662c7143767abc21b458b855161b2c459683a4581d88ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e51099a56b7b3a340662c7143767abc21b458b855161b2c459683a4581d88ecf->leave($__internal_e51099a56b7b3a340662c7143767abc21b458b855161b2c459683a4581d88ecf_prof);

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
