<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_297771298e0be67bae0207eece995bc09feae2a421992579a53bcbfb1cf45913 extends Twig_Template
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
        $__internal_af710a83f386c1c77a985e69e0dee8d3075595294a8a1c0a20692bb147cc6054 = $this->env->getExtension("native_profiler");
        $__internal_af710a83f386c1c77a985e69e0dee8d3075595294a8a1c0a20692bb147cc6054->enter($__internal_af710a83f386c1c77a985e69e0dee8d3075595294a8a1c0a20692bb147cc6054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_af710a83f386c1c77a985e69e0dee8d3075595294a8a1c0a20692bb147cc6054->leave($__internal_af710a83f386c1c77a985e69e0dee8d3075595294a8a1c0a20692bb147cc6054_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c6a2118140a11f4474ebf804fab313a7c2a49ad5c1bf942e1ce1bf6ddf317e95 = $this->env->getExtension("native_profiler");
        $__internal_c6a2118140a11f4474ebf804fab313a7c2a49ad5c1bf942e1ce1bf6ddf317e95->enter($__internal_c6a2118140a11f4474ebf804fab313a7c2a49ad5c1bf942e1ce1bf6ddf317e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c6a2118140a11f4474ebf804fab313a7c2a49ad5c1bf942e1ce1bf6ddf317e95->leave($__internal_c6a2118140a11f4474ebf804fab313a7c2a49ad5c1bf942e1ce1bf6ddf317e95_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f00ab2ddfb100439b5cf7a9979754153b8db3da345d7b9d004a30f5d08e94775 = $this->env->getExtension("native_profiler");
        $__internal_f00ab2ddfb100439b5cf7a9979754153b8db3da345d7b9d004a30f5d08e94775->enter($__internal_f00ab2ddfb100439b5cf7a9979754153b8db3da345d7b9d004a30f5d08e94775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f00ab2ddfb100439b5cf7a9979754153b8db3da345d7b9d004a30f5d08e94775->leave($__internal_f00ab2ddfb100439b5cf7a9979754153b8db3da345d7b9d004a30f5d08e94775_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_471e96ba65e4af3ee72b6dad26f7d956beff9d2de6d112d096789e71bff82423 = $this->env->getExtension("native_profiler");
        $__internal_471e96ba65e4af3ee72b6dad26f7d956beff9d2de6d112d096789e71bff82423->enter($__internal_471e96ba65e4af3ee72b6dad26f7d956beff9d2de6d112d096789e71bff82423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_471e96ba65e4af3ee72b6dad26f7d956beff9d2de6d112d096789e71bff82423->leave($__internal_471e96ba65e4af3ee72b6dad26f7d956beff9d2de6d112d096789e71bff82423_prof);

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
