<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_12d34738e5c767593a4a9674bb2aa43bb9fa635750fed6fd0974de2c0b6e7ed6 extends Twig_Template
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
        $__internal_05bf9f7f01cc67a04ac01c79005190833905d36bf32ffaf569535f5596ee404b = $this->env->getExtension("native_profiler");
        $__internal_05bf9f7f01cc67a04ac01c79005190833905d36bf32ffaf569535f5596ee404b->enter($__internal_05bf9f7f01cc67a04ac01c79005190833905d36bf32ffaf569535f5596ee404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_05bf9f7f01cc67a04ac01c79005190833905d36bf32ffaf569535f5596ee404b->leave($__internal_05bf9f7f01cc67a04ac01c79005190833905d36bf32ffaf569535f5596ee404b_prof);

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
