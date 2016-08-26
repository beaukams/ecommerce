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
        $__internal_df2b42e08e6dd8253e5ae391c1dadb7fcae4bd532e4b3881a1159fb732adaeae = $this->env->getExtension("native_profiler");
        $__internal_df2b42e08e6dd8253e5ae391c1dadb7fcae4bd532e4b3881a1159fb732adaeae->enter($__internal_df2b42e08e6dd8253e5ae391c1dadb7fcae4bd532e4b3881a1159fb732adaeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_df2b42e08e6dd8253e5ae391c1dadb7fcae4bd532e4b3881a1159fb732adaeae->leave($__internal_df2b42e08e6dd8253e5ae391c1dadb7fcae4bd532e4b3881a1159fb732adaeae_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ed58b505801fe517bee886f4af3ef538cf93d5feee0a14e30d55186fb1aba58c = $this->env->getExtension("native_profiler");
        $__internal_ed58b505801fe517bee886f4af3ef538cf93d5feee0a14e30d55186fb1aba58c->enter($__internal_ed58b505801fe517bee886f4af3ef538cf93d5feee0a14e30d55186fb1aba58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ed58b505801fe517bee886f4af3ef538cf93d5feee0a14e30d55186fb1aba58c->leave($__internal_ed58b505801fe517bee886f4af3ef538cf93d5feee0a14e30d55186fb1aba58c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e680c56201e3f9307cf6900973ea9bb6748b418d0e32217469b5688f1a667acc = $this->env->getExtension("native_profiler");
        $__internal_e680c56201e3f9307cf6900973ea9bb6748b418d0e32217469b5688f1a667acc->enter($__internal_e680c56201e3f9307cf6900973ea9bb6748b418d0e32217469b5688f1a667acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e680c56201e3f9307cf6900973ea9bb6748b418d0e32217469b5688f1a667acc->leave($__internal_e680c56201e3f9307cf6900973ea9bb6748b418d0e32217469b5688f1a667acc_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d7d505e2fba751a058d89909a00c21339c00744d8b65f478fc443015903e56d8 = $this->env->getExtension("native_profiler");
        $__internal_d7d505e2fba751a058d89909a00c21339c00744d8b65f478fc443015903e56d8->enter($__internal_d7d505e2fba751a058d89909a00c21339c00744d8b65f478fc443015903e56d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d7d505e2fba751a058d89909a00c21339c00744d8b65f478fc443015903e56d8->leave($__internal_d7d505e2fba751a058d89909a00c21339c00744d8b65f478fc443015903e56d8_prof);

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
