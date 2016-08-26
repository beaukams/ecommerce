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
        $__internal_32f6681fdcde1fa6cc0fd8a913ff417e0ffc6349cfeb36fa8a45c034ec6f48e5 = $this->env->getExtension("native_profiler");
        $__internal_32f6681fdcde1fa6cc0fd8a913ff417e0ffc6349cfeb36fa8a45c034ec6f48e5->enter($__internal_32f6681fdcde1fa6cc0fd8a913ff417e0ffc6349cfeb36fa8a45c034ec6f48e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_32f6681fdcde1fa6cc0fd8a913ff417e0ffc6349cfeb36fa8a45c034ec6f48e5->leave($__internal_32f6681fdcde1fa6cc0fd8a913ff417e0ffc6349cfeb36fa8a45c034ec6f48e5_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_26a6c33435aae22ba3d5a3ba092893aeaeb2ed281498ff1fffb4306651657d08 = $this->env->getExtension("native_profiler");
        $__internal_26a6c33435aae22ba3d5a3ba092893aeaeb2ed281498ff1fffb4306651657d08->enter($__internal_26a6c33435aae22ba3d5a3ba092893aeaeb2ed281498ff1fffb4306651657d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_26a6c33435aae22ba3d5a3ba092893aeaeb2ed281498ff1fffb4306651657d08->leave($__internal_26a6c33435aae22ba3d5a3ba092893aeaeb2ed281498ff1fffb4306651657d08_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e534dfa97622cf796d089368596382dd7fa99552714b6dd4b788993266fccb2 = $this->env->getExtension("native_profiler");
        $__internal_7e534dfa97622cf796d089368596382dd7fa99552714b6dd4b788993266fccb2->enter($__internal_7e534dfa97622cf796d089368596382dd7fa99552714b6dd4b788993266fccb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e534dfa97622cf796d089368596382dd7fa99552714b6dd4b788993266fccb2->leave($__internal_7e534dfa97622cf796d089368596382dd7fa99552714b6dd4b788993266fccb2_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cb3dae2d83fef7aaae39f657c9e157fd7f0fd50044ef05882967823f0e2391c4 = $this->env->getExtension("native_profiler");
        $__internal_cb3dae2d83fef7aaae39f657c9e157fd7f0fd50044ef05882967823f0e2391c4->enter($__internal_cb3dae2d83fef7aaae39f657c9e157fd7f0fd50044ef05882967823f0e2391c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cb3dae2d83fef7aaae39f657c9e157fd7f0fd50044ef05882967823f0e2391c4->leave($__internal_cb3dae2d83fef7aaae39f657c9e157fd7f0fd50044ef05882967823f0e2391c4_prof);

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
