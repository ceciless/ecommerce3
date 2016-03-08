<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0631338341de59d2721ec48223bad60cfd096022f7127af4355669f9ab4fd360 extends Twig_Template
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
        $__internal_8685561a1e416cfd10ed6b2dd09e59e74acf7f3626ef4e822a1b1833da11f18c = $this->env->getExtension("native_profiler");
        $__internal_8685561a1e416cfd10ed6b2dd09e59e74acf7f3626ef4e822a1b1833da11f18c->enter($__internal_8685561a1e416cfd10ed6b2dd09e59e74acf7f3626ef4e822a1b1833da11f18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8685561a1e416cfd10ed6b2dd09e59e74acf7f3626ef4e822a1b1833da11f18c->leave($__internal_8685561a1e416cfd10ed6b2dd09e59e74acf7f3626ef4e822a1b1833da11f18c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc7f87d2643ff29f652b04bec3a046e56398815392a3dc90165c1df876faa91d = $this->env->getExtension("native_profiler");
        $__internal_dc7f87d2643ff29f652b04bec3a046e56398815392a3dc90165c1df876faa91d->enter($__internal_dc7f87d2643ff29f652b04bec3a046e56398815392a3dc90165c1df876faa91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_dc7f87d2643ff29f652b04bec3a046e56398815392a3dc90165c1df876faa91d->leave($__internal_dc7f87d2643ff29f652b04bec3a046e56398815392a3dc90165c1df876faa91d_prof);

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
