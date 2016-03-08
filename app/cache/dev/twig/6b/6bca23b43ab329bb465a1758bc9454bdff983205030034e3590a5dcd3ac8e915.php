<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_fb897a1d3aa518c6bde35712a7cb469f4aa963c74a9bd875ad3fa859214bda85 extends Twig_Template
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
        $__internal_0d7de3b5db4be0ec2e5b4c9075899c77dc6b0c93f6733eb4d26781e3e841520e = $this->env->getExtension("native_profiler");
        $__internal_0d7de3b5db4be0ec2e5b4c9075899c77dc6b0c93f6733eb4d26781e3e841520e->enter($__internal_0d7de3b5db4be0ec2e5b4c9075899c77dc6b0c93f6733eb4d26781e3e841520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0d7de3b5db4be0ec2e5b4c9075899c77dc6b0c93f6733eb4d26781e3e841520e->leave($__internal_0d7de3b5db4be0ec2e5b4c9075899c77dc6b0c93f6733eb4d26781e3e841520e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3da41a4cb37bf304bf71dd740ebb30cfc6ae51d40841166d268cd51dd5cee964 = $this->env->getExtension("native_profiler");
        $__internal_3da41a4cb37bf304bf71dd740ebb30cfc6ae51d40841166d268cd51dd5cee964->enter($__internal_3da41a4cb37bf304bf71dd740ebb30cfc6ae51d40841166d268cd51dd5cee964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3da41a4cb37bf304bf71dd740ebb30cfc6ae51d40841166d268cd51dd5cee964->leave($__internal_3da41a4cb37bf304bf71dd740ebb30cfc6ae51d40841166d268cd51dd5cee964_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_32e7c501cda789769f1a13b8eea5c8b19b200a39917b83241c10148573ae8f28 = $this->env->getExtension("native_profiler");
        $__internal_32e7c501cda789769f1a13b8eea5c8b19b200a39917b83241c10148573ae8f28->enter($__internal_32e7c501cda789769f1a13b8eea5c8b19b200a39917b83241c10148573ae8f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_32e7c501cda789769f1a13b8eea5c8b19b200a39917b83241c10148573ae8f28->leave($__internal_32e7c501cda789769f1a13b8eea5c8b19b200a39917b83241c10148573ae8f28_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6c78cba5f5203f5043abc5609f1a32a77cd951d332f2c619bde17c1f214f4b89 = $this->env->getExtension("native_profiler");
        $__internal_6c78cba5f5203f5043abc5609f1a32a77cd951d332f2c619bde17c1f214f4b89->enter($__internal_6c78cba5f5203f5043abc5609f1a32a77cd951d332f2c619bde17c1f214f4b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6c78cba5f5203f5043abc5609f1a32a77cd951d332f2c619bde17c1f214f4b89->leave($__internal_6c78cba5f5203f5043abc5609f1a32a77cd951d332f2c619bde17c1f214f4b89_prof);

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
