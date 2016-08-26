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
        $__internal_516c5e228efd08faeae302b7d97d5128325c942a937de6001ba4c3f3ba6b3510 = $this->env->getExtension("native_profiler");
        $__internal_516c5e228efd08faeae302b7d97d5128325c942a937de6001ba4c3f3ba6b3510->enter($__internal_516c5e228efd08faeae302b7d97d5128325c942a937de6001ba4c3f3ba6b3510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_516c5e228efd08faeae302b7d97d5128325c942a937de6001ba4c3f3ba6b3510->leave($__internal_516c5e228efd08faeae302b7d97d5128325c942a937de6001ba4c3f3ba6b3510_prof);

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
