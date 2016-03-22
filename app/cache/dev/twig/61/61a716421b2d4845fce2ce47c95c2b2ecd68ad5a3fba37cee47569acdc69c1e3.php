<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_67a4d001d50ab0958c1ce88f33b3e42c94685d90ea4762109775533ddae4c14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_da3cba4912065bde2025cb44e5fa212437efbb0f8bcc99a1cf2847f9f07a833a = $this->env->getExtension("native_profiler");
        $__internal_da3cba4912065bde2025cb44e5fa212437efbb0f8bcc99a1cf2847f9f07a833a->enter($__internal_da3cba4912065bde2025cb44e5fa212437efbb0f8bcc99a1cf2847f9f07a833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da3cba4912065bde2025cb44e5fa212437efbb0f8bcc99a1cf2847f9f07a833a->leave($__internal_da3cba4912065bde2025cb44e5fa212437efbb0f8bcc99a1cf2847f9f07a833a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3fcad396187c88cbfd8bd6628652e7b88acc25aba65c15c24b1dd4d44159d5f = $this->env->getExtension("native_profiler");
        $__internal_d3fcad396187c88cbfd8bd6628652e7b88acc25aba65c15c24b1dd4d44159d5f->enter($__internal_d3fcad396187c88cbfd8bd6628652e7b88acc25aba65c15c24b1dd4d44159d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d3fcad396187c88cbfd8bd6628652e7b88acc25aba65c15c24b1dd4d44159d5f->leave($__internal_d3fcad396187c88cbfd8bd6628652e7b88acc25aba65c15c24b1dd4d44159d5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
