<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a6b2496c5a95b547e9434e9fbd403fd9bfdab0df2f60e863c8800a7ff24e9a06 extends Twig_Template
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
        $__internal_feeb00e71ad6b755bc6374aae515702abc49b917afefd60ac065fe3676d7115a = $this->env->getExtension("native_profiler");
        $__internal_feeb00e71ad6b755bc6374aae515702abc49b917afefd60ac065fe3676d7115a->enter($__internal_feeb00e71ad6b755bc6374aae515702abc49b917afefd60ac065fe3676d7115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feeb00e71ad6b755bc6374aae515702abc49b917afefd60ac065fe3676d7115a->leave($__internal_feeb00e71ad6b755bc6374aae515702abc49b917afefd60ac065fe3676d7115a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e54d754c1fe56089914387d32defd3d7442ce23f4a3d787d7390072a56a4f1e3 = $this->env->getExtension("native_profiler");
        $__internal_e54d754c1fe56089914387d32defd3d7442ce23f4a3d787d7390072a56a4f1e3->enter($__internal_e54d754c1fe56089914387d32defd3d7442ce23f4a3d787d7390072a56a4f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e54d754c1fe56089914387d32defd3d7442ce23f4a3d787d7390072a56a4f1e3->leave($__internal_e54d754c1fe56089914387d32defd3d7442ce23f4a3d787d7390072a56a4f1e3_prof);

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
