<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e88051ca58d79362e4d7506eecf63470f525540326606668248ae455efacdaad extends Twig_Template
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
        $__internal_786e900a81f37202c0e0c8a225f907bfe2cde7ddc67397accfe2613ee9c42e61 = $this->env->getExtension("native_profiler");
        $__internal_786e900a81f37202c0e0c8a225f907bfe2cde7ddc67397accfe2613ee9c42e61->enter($__internal_786e900a81f37202c0e0c8a225f907bfe2cde7ddc67397accfe2613ee9c42e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_786e900a81f37202c0e0c8a225f907bfe2cde7ddc67397accfe2613ee9c42e61->leave($__internal_786e900a81f37202c0e0c8a225f907bfe2cde7ddc67397accfe2613ee9c42e61_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d729d17402e5ccb7e6f78179ccdd3bcdfc627d1981bce24b36322a38b949ab10 = $this->env->getExtension("native_profiler");
        $__internal_d729d17402e5ccb7e6f78179ccdd3bcdfc627d1981bce24b36322a38b949ab10->enter($__internal_d729d17402e5ccb7e6f78179ccdd3bcdfc627d1981bce24b36322a38b949ab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d729d17402e5ccb7e6f78179ccdd3bcdfc627d1981bce24b36322a38b949ab10->leave($__internal_d729d17402e5ccb7e6f78179ccdd3bcdfc627d1981bce24b36322a38b949ab10_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d14f098c84c35c9f1b27235b37640cd7a7dbdcf2e52ff1eb7cc63014fce89e2a = $this->env->getExtension("native_profiler");
        $__internal_d14f098c84c35c9f1b27235b37640cd7a7dbdcf2e52ff1eb7cc63014fce89e2a->enter($__internal_d14f098c84c35c9f1b27235b37640cd7a7dbdcf2e52ff1eb7cc63014fce89e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d14f098c84c35c9f1b27235b37640cd7a7dbdcf2e52ff1eb7cc63014fce89e2a->leave($__internal_d14f098c84c35c9f1b27235b37640cd7a7dbdcf2e52ff1eb7cc63014fce89e2a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0bc8baa8c6516dde1d0690c4cc6e0297a8a8cbd0b7a6f66fdac094e3aba24e81 = $this->env->getExtension("native_profiler");
        $__internal_0bc8baa8c6516dde1d0690c4cc6e0297a8a8cbd0b7a6f66fdac094e3aba24e81->enter($__internal_0bc8baa8c6516dde1d0690c4cc6e0297a8a8cbd0b7a6f66fdac094e3aba24e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0bc8baa8c6516dde1d0690c4cc6e0297a8a8cbd0b7a6f66fdac094e3aba24e81->leave($__internal_0bc8baa8c6516dde1d0690c4cc6e0297a8a8cbd0b7a6f66fdac094e3aba24e81_prof);

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
