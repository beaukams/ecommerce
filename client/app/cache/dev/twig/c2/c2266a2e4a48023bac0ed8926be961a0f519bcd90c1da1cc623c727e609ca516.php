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
        $__internal_e5a275c033f8fea2a87468f16c4f36b71360809ec75ecdccb22bb13247aa46fe = $this->env->getExtension("native_profiler");
        $__internal_e5a275c033f8fea2a87468f16c4f36b71360809ec75ecdccb22bb13247aa46fe->enter($__internal_e5a275c033f8fea2a87468f16c4f36b71360809ec75ecdccb22bb13247aa46fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e5a275c033f8fea2a87468f16c4f36b71360809ec75ecdccb22bb13247aa46fe->leave($__internal_e5a275c033f8fea2a87468f16c4f36b71360809ec75ecdccb22bb13247aa46fe_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2a55eb517df889fbab929086d9e77f9711384f19303ce4a41b960eedab8a34b4 = $this->env->getExtension("native_profiler");
        $__internal_2a55eb517df889fbab929086d9e77f9711384f19303ce4a41b960eedab8a34b4->enter($__internal_2a55eb517df889fbab929086d9e77f9711384f19303ce4a41b960eedab8a34b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2a55eb517df889fbab929086d9e77f9711384f19303ce4a41b960eedab8a34b4->leave($__internal_2a55eb517df889fbab929086d9e77f9711384f19303ce4a41b960eedab8a34b4_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf7c7bfaecc1d5e1785df650070ddcbf1dc3a05839a429fd478a4999df5892f2 = $this->env->getExtension("native_profiler");
        $__internal_cf7c7bfaecc1d5e1785df650070ddcbf1dc3a05839a429fd478a4999df5892f2->enter($__internal_cf7c7bfaecc1d5e1785df650070ddcbf1dc3a05839a429fd478a4999df5892f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cf7c7bfaecc1d5e1785df650070ddcbf1dc3a05839a429fd478a4999df5892f2->leave($__internal_cf7c7bfaecc1d5e1785df650070ddcbf1dc3a05839a429fd478a4999df5892f2_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b114c3f85e48f3c4637cd7ce251c38cb1b7faeceffa0d6ee1e3767d84621f127 = $this->env->getExtension("native_profiler");
        $__internal_b114c3f85e48f3c4637cd7ce251c38cb1b7faeceffa0d6ee1e3767d84621f127->enter($__internal_b114c3f85e48f3c4637cd7ce251c38cb1b7faeceffa0d6ee1e3767d84621f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b114c3f85e48f3c4637cd7ce251c38cb1b7faeceffa0d6ee1e3767d84621f127->leave($__internal_b114c3f85e48f3c4637cd7ce251c38cb1b7faeceffa0d6ee1e3767d84621f127_prof);

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
