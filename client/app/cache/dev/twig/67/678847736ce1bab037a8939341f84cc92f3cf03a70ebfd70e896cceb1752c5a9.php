<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_37851e997c7cc0977afd95547e1d7d7e271ee740444de9fc7c917604cf6c3481 extends Twig_Template
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
        $__internal_bdbfd4aad46ee318d3f900d0b78af61d06dc34e49115cb44c830e78f9a16e5d8 = $this->env->getExtension("native_profiler");
        $__internal_bdbfd4aad46ee318d3f900d0b78af61d06dc34e49115cb44c830e78f9a16e5d8->enter($__internal_bdbfd4aad46ee318d3f900d0b78af61d06dc34e49115cb44c830e78f9a16e5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bdbfd4aad46ee318d3f900d0b78af61d06dc34e49115cb44c830e78f9a16e5d8->leave($__internal_bdbfd4aad46ee318d3f900d0b78af61d06dc34e49115cb44c830e78f9a16e5d8_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_37eb7d8a7267c17190eda00c17d7578b917b36170b62cef404260745a968e950 = $this->env->getExtension("native_profiler");
        $__internal_37eb7d8a7267c17190eda00c17d7578b917b36170b62cef404260745a968e950->enter($__internal_37eb7d8a7267c17190eda00c17d7578b917b36170b62cef404260745a968e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_37eb7d8a7267c17190eda00c17d7578b917b36170b62cef404260745a968e950->leave($__internal_37eb7d8a7267c17190eda00c17d7578b917b36170b62cef404260745a968e950_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3c561e941d42192a8fa63cd158bd58e703f9939e8be34047ce669619714d40be = $this->env->getExtension("native_profiler");
        $__internal_3c561e941d42192a8fa63cd158bd58e703f9939e8be34047ce669619714d40be->enter($__internal_3c561e941d42192a8fa63cd158bd58e703f9939e8be34047ce669619714d40be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3c561e941d42192a8fa63cd158bd58e703f9939e8be34047ce669619714d40be->leave($__internal_3c561e941d42192a8fa63cd158bd58e703f9939e8be34047ce669619714d40be_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8a8bc9cf0ec485f8b597b92cf0d64aa80efeb15a84e4d7e28ca78bafee64395a = $this->env->getExtension("native_profiler");
        $__internal_8a8bc9cf0ec485f8b597b92cf0d64aa80efeb15a84e4d7e28ca78bafee64395a->enter($__internal_8a8bc9cf0ec485f8b597b92cf0d64aa80efeb15a84e4d7e28ca78bafee64395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8a8bc9cf0ec485f8b597b92cf0d64aa80efeb15a84e4d7e28ca78bafee64395a->leave($__internal_8a8bc9cf0ec485f8b597b92cf0d64aa80efeb15a84e4d7e28ca78bafee64395a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
