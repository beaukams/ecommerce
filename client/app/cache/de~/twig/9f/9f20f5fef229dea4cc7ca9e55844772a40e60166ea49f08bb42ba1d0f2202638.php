<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_99356531389d90cda9c45cffeaeded4c335c85469b9dcc22a2041de22f68de7e extends Twig_Template
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
        $__internal_41020047e3a2edf7bfc12ee981e260cec3decddd41b0357d82003282702e4618 = $this->env->getExtension("native_profiler");
        $__internal_41020047e3a2edf7bfc12ee981e260cec3decddd41b0357d82003282702e4618->enter($__internal_41020047e3a2edf7bfc12ee981e260cec3decddd41b0357d82003282702e4618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_41020047e3a2edf7bfc12ee981e260cec3decddd41b0357d82003282702e4618->leave($__internal_41020047e3a2edf7bfc12ee981e260cec3decddd41b0357d82003282702e4618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
