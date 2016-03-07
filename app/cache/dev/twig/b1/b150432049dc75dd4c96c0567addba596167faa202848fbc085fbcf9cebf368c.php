<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_6a6e75d0aeefa4b3afe46ade67d4152f45cae15dc683282fda3043a16a0de82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee38dcfaa7f744bc6db410aff60fd745b50876b45c69d335bbc4b6be42026e06 = $this->env->getExtension("native_profiler");
        $__internal_ee38dcfaa7f744bc6db410aff60fd745b50876b45c69d335bbc4b6be42026e06->enter($__internal_ee38dcfaa7f744bc6db410aff60fd745b50876b45c69d335bbc4b6be42026e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee38dcfaa7f744bc6db410aff60fd745b50876b45c69d335bbc4b6be42026e06->leave($__internal_ee38dcfaa7f744bc6db410aff60fd745b50876b45c69d335bbc4b6be42026e06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c64742771fff60dd75fdd5b3a7022eda564cc636b316b870845ca714dac8a4cf = $this->env->getExtension("native_profiler");
        $__internal_c64742771fff60dd75fdd5b3a7022eda564cc636b316b870845ca714dac8a4cf->enter($__internal_c64742771fff60dd75fdd5b3a7022eda564cc636b316b870845ca714dac8a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c64742771fff60dd75fdd5b3a7022eda564cc636b316b870845ca714dac8a4cf->leave($__internal_c64742771fff60dd75fdd5b3a7022eda564cc636b316b870845ca714dac8a4cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
