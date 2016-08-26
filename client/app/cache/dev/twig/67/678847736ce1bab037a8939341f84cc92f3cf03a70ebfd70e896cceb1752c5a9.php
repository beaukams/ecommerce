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
        $__internal_eab4fe058325ac9daab9887b1361a18ea1f1b1a9d364fcd7428408761c77e042 = $this->env->getExtension("native_profiler");
        $__internal_eab4fe058325ac9daab9887b1361a18ea1f1b1a9d364fcd7428408761c77e042->enter($__internal_eab4fe058325ac9daab9887b1361a18ea1f1b1a9d364fcd7428408761c77e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eab4fe058325ac9daab9887b1361a18ea1f1b1a9d364fcd7428408761c77e042->leave($__internal_eab4fe058325ac9daab9887b1361a18ea1f1b1a9d364fcd7428408761c77e042_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1a5ac0c69e3b3155563802346adae0458783e8ad6c5d6abefd32996d939c2087 = $this->env->getExtension("native_profiler");
        $__internal_1a5ac0c69e3b3155563802346adae0458783e8ad6c5d6abefd32996d939c2087->enter($__internal_1a5ac0c69e3b3155563802346adae0458783e8ad6c5d6abefd32996d939c2087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1a5ac0c69e3b3155563802346adae0458783e8ad6c5d6abefd32996d939c2087->leave($__internal_1a5ac0c69e3b3155563802346adae0458783e8ad6c5d6abefd32996d939c2087_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_53ccd03260645ce8117680dfd380d738bcda4f8ceba68298815e5bfe10c8d781 = $this->env->getExtension("native_profiler");
        $__internal_53ccd03260645ce8117680dfd380d738bcda4f8ceba68298815e5bfe10c8d781->enter($__internal_53ccd03260645ce8117680dfd380d738bcda4f8ceba68298815e5bfe10c8d781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_53ccd03260645ce8117680dfd380d738bcda4f8ceba68298815e5bfe10c8d781->leave($__internal_53ccd03260645ce8117680dfd380d738bcda4f8ceba68298815e5bfe10c8d781_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f88111c3cd13cdd19b6c1b47e3f5a196aad7b5e55ea77f3ffc5aecaeb031070 = $this->env->getExtension("native_profiler");
        $__internal_4f88111c3cd13cdd19b6c1b47e3f5a196aad7b5e55ea77f3ffc5aecaeb031070->enter($__internal_4f88111c3cd13cdd19b6c1b47e3f5a196aad7b5e55ea77f3ffc5aecaeb031070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f88111c3cd13cdd19b6c1b47e3f5a196aad7b5e55ea77f3ffc5aecaeb031070->leave($__internal_4f88111c3cd13cdd19b6c1b47e3f5a196aad7b5e55ea77f3ffc5aecaeb031070_prof);

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
