<?php

/* ::contactus.html.twig */
class __TwigTemplate_2b0ec1e9b84405d37be7f7fa76af55965c99655629692cb96d60f10278fdec50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcommerceBoutiqueBundle::base.html.twig", "::contactus.html.twig", 1);
        $this->blocks = array(
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcommerceBoutiqueBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38e64bf95a76ec5f27e64dcc98fa96f9cbe0edbb1d3efe32cc674b84c31a86a1 = $this->env->getExtension("native_profiler");
        $__internal_38e64bf95a76ec5f27e64dcc98fa96f9cbe0edbb1d3efe32cc674b84c31a86a1->enter($__internal_38e64bf95a76ec5f27e64dcc98fa96f9cbe0edbb1d3efe32cc674b84c31a86a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contactus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e64bf95a76ec5f27e64dcc98fa96f9cbe0edbb1d3efe32cc674b84c31a86a1->leave($__internal_38e64bf95a76ec5f27e64dcc98fa96f9cbe0edbb1d3efe32cc674b84c31a86a1_prof);

    }

    // line 3
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_085d01549babe8a337e12863fa0341f209472db7db938de32ed8c528a9b04207 = $this->env->getExtension("native_profiler");
        $__internal_085d01549babe8a337e12863fa0341f209472db7db938de32ed8c528a9b04207->enter($__internal_085d01549babe8a337e12863fa0341f209472db7db938de32ed8c528a9b04207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 4
        echo "\t<div class=\"mail\">
\t\t<h3>Nous contacter</h3>
\t\t<div class=\"agileinfo_mail_grids\">
\t\t\t<div class=\"col-md-4 agileinfo_mail_grid_left\">
\t\t\t\t<ul>
\t\t\t\t\t<li><i class=\"fa fa-home\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t<li>address<span>868 1st Avenue NYC.</span></li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t<li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t<li>email<span><a href=\"mailto:info@example.com\">info@example.com</a></span></li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t<li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></li>
\t\t\t\t\t<li>call to us<span>(+123) 233 2362 826</span></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-8 agileinfo_mail_grid_right\">
\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t<div class=\"col-md-6 wthree_contact_left_grid\">
\t\t\t\t\t\t<input type=\"text\" name=\"Name\" value=\"Name*\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name*';}\" required=\"\">
\t\t\t\t\t\t<input type=\"email\" name=\"Email\" value=\"Email*\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email*';}\" required=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 wthree_contact_left_grid\">
\t\t\t\t\t\t<input type=\"text\" name=\"Telephone\" value=\"Telephone*\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Telephone*';}\" required=\"\">
\t\t\t\t\t\t<input type=\"text\" name=\"Subject\" value=\"Subject*\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Subject*';}\" required=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t<textarea  name=\"Message\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Message...';}\" required=\"\">Message...</textarea>
\t\t\t\t\t<input type=\"submit\" value=\"Submit\">
\t\t\t\t\t<input type=\"reset\" value=\"Clear\">
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t</div>

";
        
        $__internal_085d01549babe8a337e12863fa0341f209472db7db938de32ed8c528a9b04207->leave($__internal_085d01549babe8a337e12863fa0341f209472db7db938de32ed8c528a9b04207_prof);

    }

    public function getTemplateName()
    {
        return "::contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "EcommerceBoutiqueBundle::base.html.twig" %}*/
/* */
/* {% block body_content %}*/
/* 	<div class="mail">*/
/* 		<h3>Nous contacter</h3>*/
/* 		<div class="agileinfo_mail_grids">*/
/* 			<div class="col-md-4 agileinfo_mail_grid_left">*/
/* 				<ul>*/
/* 					<li><i class="fa fa-home" aria-hidden="true"></i></li>*/
/* 					<li>address<span>868 1st Avenue NYC.</span></li>*/
/* 				</ul>*/
/* 				<ul>*/
/* 					<li><i class="fa fa-envelope" aria-hidden="true"></i></li>*/
/* 					<li>email<span><a href="mailto:info@example.com">info@example.com</a></span></li>*/
/* 				</ul>*/
/* 				<ul>*/
/* 					<li><i class="fa fa-phone" aria-hidden="true"></i></li>*/
/* 					<li>call to us<span>(+123) 233 2362 826</span></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="col-md-8 agileinfo_mail_grid_right">*/
/* 				<form action="#" method="post">*/
/* 					<div class="col-md-6 wthree_contact_left_grid">*/
/* 						<input type="text" name="Name" value="Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name*';}" required="">*/
/* 						<input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">*/
/* 					</div>*/
/* 					<div class="col-md-6 wthree_contact_left_grid">*/
/* 						<input type="text" name="Telephone" value="Telephone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone*';}" required="">*/
/* 						<input type="text" name="Subject" value="Subject*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject*';}" required="">*/
/* 					</div>*/
/* 					<div class="clearfix"> </div>*/
/* 					<textarea  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>*/
/* 					<input type="submit" value="Submit">*/
/* 					<input type="reset" value="Clear">*/
/* 				</form>*/
/* 			</div>*/
/* 			<div class="clearfix"> </div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
