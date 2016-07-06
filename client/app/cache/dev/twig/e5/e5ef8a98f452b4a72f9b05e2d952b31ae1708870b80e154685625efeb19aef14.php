<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fb5209c1960de33aa074a59657015a6d9676590ab9166544dc9210e69e46b915 extends Twig_Template
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
        $__internal_348f2d4da65c31cdf2b3aaa04fd01ce15ff9b47cf9dd5e0da2ac892cf7eae477 = $this->env->getExtension("native_profiler");
        $__internal_348f2d4da65c31cdf2b3aaa04fd01ce15ff9b47cf9dd5e0da2ac892cf7eae477->enter($__internal_348f2d4da65c31cdf2b3aaa04fd01ce15ff9b47cf9dd5e0da2ac892cf7eae477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_348f2d4da65c31cdf2b3aaa04fd01ce15ff9b47cf9dd5e0da2ac892cf7eae477->leave($__internal_348f2d4da65c31cdf2b3aaa04fd01ce15ff9b47cf9dd5e0da2ac892cf7eae477_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
