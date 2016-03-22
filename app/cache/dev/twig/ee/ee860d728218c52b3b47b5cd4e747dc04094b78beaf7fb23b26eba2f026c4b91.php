<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_fff1363feff68e28959c60da1eb96c0505ea46bd82ee7aa0608b8e0bd49da3ad extends Twig_Template
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
        $__internal_83b5ed537d2dc52950bc2aa9d6ae56a054565d8f816d587ea52ee2ef92716c63 = $this->env->getExtension("native_profiler");
        $__internal_83b5ed537d2dc52950bc2aa9d6ae56a054565d8f816d587ea52ee2ef92716c63->enter($__internal_83b5ed537d2dc52950bc2aa9d6ae56a054565d8f816d587ea52ee2ef92716c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_83b5ed537d2dc52950bc2aa9d6ae56a054565d8f816d587ea52ee2ef92716c63->leave($__internal_83b5ed537d2dc52950bc2aa9d6ae56a054565d8f816d587ea52ee2ef92716c63_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2bd3ccd5e061b060cee91462d1378509681b159f7e9cd84e9d1396a00dfab029 = $this->env->getExtension("native_profiler");
        $__internal_2bd3ccd5e061b060cee91462d1378509681b159f7e9cd84e9d1396a00dfab029->enter($__internal_2bd3ccd5e061b060cee91462d1378509681b159f7e9cd84e9d1396a00dfab029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2bd3ccd5e061b060cee91462d1378509681b159f7e9cd84e9d1396a00dfab029->leave($__internal_2bd3ccd5e061b060cee91462d1378509681b159f7e9cd84e9d1396a00dfab029_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a5a3436365c977882d2ff06e663709151160a64461e535d7c1b8865fda5c28fc = $this->env->getExtension("native_profiler");
        $__internal_a5a3436365c977882d2ff06e663709151160a64461e535d7c1b8865fda5c28fc->enter($__internal_a5a3436365c977882d2ff06e663709151160a64461e535d7c1b8865fda5c28fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a5a3436365c977882d2ff06e663709151160a64461e535d7c1b8865fda5c28fc->leave($__internal_a5a3436365c977882d2ff06e663709151160a64461e535d7c1b8865fda5c28fc_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_49846f8fa779bfd27825974d522ca6029249ebef1b7a2274e8c11d60e1e1aeda = $this->env->getExtension("native_profiler");
        $__internal_49846f8fa779bfd27825974d522ca6029249ebef1b7a2274e8c11d60e1e1aeda->enter($__internal_49846f8fa779bfd27825974d522ca6029249ebef1b7a2274e8c11d60e1e1aeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_49846f8fa779bfd27825974d522ca6029249ebef1b7a2274e8c11d60e1e1aeda->leave($__internal_49846f8fa779bfd27825974d522ca6029249ebef1b7a2274e8c11d60e1e1aeda_prof);

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
