<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3731ac37da57e8d720d24cd225b2c16b128a0dcf0a81aaaf96a8079221a68610 extends Twig_Template
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
        $__internal_106f777bdefc8874a54ebf2a06f2716cb8d33318081b715e405500102e473c86 = $this->env->getExtension("native_profiler");
        $__internal_106f777bdefc8874a54ebf2a06f2716cb8d33318081b715e405500102e473c86->enter($__internal_106f777bdefc8874a54ebf2a06f2716cb8d33318081b715e405500102e473c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_106f777bdefc8874a54ebf2a06f2716cb8d33318081b715e405500102e473c86->leave($__internal_106f777bdefc8874a54ebf2a06f2716cb8d33318081b715e405500102e473c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
