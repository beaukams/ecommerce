<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e0ae29f8cd94778384452d471f20083b2c54b39aa2b9c9f01f16b71bb0991cb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4edfe39696490b6aa4c22bb08fe4f895ad28442f42c2c8750d6a4486c8382b4 = $this->env->getExtension("native_profiler");
        $__internal_a4edfe39696490b6aa4c22bb08fe4f895ad28442f42c2c8750d6a4486c8382b4->enter($__internal_a4edfe39696490b6aa4c22bb08fe4f895ad28442f42c2c8750d6a4486c8382b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a4edfe39696490b6aa4c22bb08fe4f895ad28442f42c2c8750d6a4486c8382b4->leave($__internal_a4edfe39696490b6aa4c22bb08fe4f895ad28442f42c2c8750d6a4486c8382b4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8444e87af50156220db9de64162636c52de52579f1d878f46686d43503e59ea8 = $this->env->getExtension("native_profiler");
        $__internal_8444e87af50156220db9de64162636c52de52579f1d878f46686d43503e59ea8->enter($__internal_8444e87af50156220db9de64162636c52de52579f1d878f46686d43503e59ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8444e87af50156220db9de64162636c52de52579f1d878f46686d43503e59ea8->leave($__internal_8444e87af50156220db9de64162636c52de52579f1d878f46686d43503e59ea8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c5a5bce62591e49b46315ab88d188e0f56e63620121d33ed4addc2f69479a5e6 = $this->env->getExtension("native_profiler");
        $__internal_c5a5bce62591e49b46315ab88d188e0f56e63620121d33ed4addc2f69479a5e6->enter($__internal_c5a5bce62591e49b46315ab88d188e0f56e63620121d33ed4addc2f69479a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c5a5bce62591e49b46315ab88d188e0f56e63620121d33ed4addc2f69479a5e6->leave($__internal_c5a5bce62591e49b46315ab88d188e0f56e63620121d33ed4addc2f69479a5e6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4658d952ccc883a19bc2923aa0490cdd9a6f6da6fc849a13e930571cfbfedcf6 = $this->env->getExtension("native_profiler");
        $__internal_4658d952ccc883a19bc2923aa0490cdd9a6f6da6fc849a13e930571cfbfedcf6->enter($__internal_4658d952ccc883a19bc2923aa0490cdd9a6f6da6fc849a13e930571cfbfedcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4658d952ccc883a19bc2923aa0490cdd9a6f6da6fc849a13e930571cfbfedcf6->leave($__internal_4658d952ccc883a19bc2923aa0490cdd9a6f6da6fc849a13e930571cfbfedcf6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
