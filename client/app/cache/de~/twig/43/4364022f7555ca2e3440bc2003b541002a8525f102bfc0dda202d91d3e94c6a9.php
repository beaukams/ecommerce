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
        $__internal_0c353d4d882605609731c50c99ba493e01113c28101fa40ad7831ca4ec4952ef = $this->env->getExtension("native_profiler");
        $__internal_0c353d4d882605609731c50c99ba493e01113c28101fa40ad7831ca4ec4952ef->enter($__internal_0c353d4d882605609731c50c99ba493e01113c28101fa40ad7831ca4ec4952ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0c353d4d882605609731c50c99ba493e01113c28101fa40ad7831ca4ec4952ef->leave($__internal_0c353d4d882605609731c50c99ba493e01113c28101fa40ad7831ca4ec4952ef_prof);

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
