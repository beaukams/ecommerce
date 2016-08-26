<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_975fed0a1e5b203e848a98cc529d3af379b0bdb237ed758f404d1741c222d6a4 extends Twig_Template
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
        $__internal_44ed65067e21702da5e42a7bba94c6a6ae4ba3d37b79c045d50f76a0c8dd6455 = $this->env->getExtension("native_profiler");
        $__internal_44ed65067e21702da5e42a7bba94c6a6ae4ba3d37b79c045d50f76a0c8dd6455->enter($__internal_44ed65067e21702da5e42a7bba94c6a6ae4ba3d37b79c045d50f76a0c8dd6455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_44ed65067e21702da5e42a7bba94c6a6ae4ba3d37b79c045d50f76a0c8dd6455->leave($__internal_44ed65067e21702da5e42a7bba94c6a6ae4ba3d37b79c045d50f76a0c8dd6455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
