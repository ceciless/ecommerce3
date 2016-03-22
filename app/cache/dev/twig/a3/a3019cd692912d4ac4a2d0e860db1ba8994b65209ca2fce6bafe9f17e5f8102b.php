<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6cfbdbbd8fe11a5e671ec7fd52ce57a9ac71340309863d02ccad802d5e57bccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_11442e47d2c2fb109dc8779a8d03802b1cbf777f8b0e881b7af0a7acab572b2c = $this->env->getExtension("native_profiler");
        $__internal_11442e47d2c2fb109dc8779a8d03802b1cbf777f8b0e881b7af0a7acab572b2c->enter($__internal_11442e47d2c2fb109dc8779a8d03802b1cbf777f8b0e881b7af0a7acab572b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11442e47d2c2fb109dc8779a8d03802b1cbf777f8b0e881b7af0a7acab572b2c->leave($__internal_11442e47d2c2fb109dc8779a8d03802b1cbf777f8b0e881b7af0a7acab572b2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fba86d2603f9c9e77e9e9598bce029e92d6d649a03d4b91cce460ff131228985 = $this->env->getExtension("native_profiler");
        $__internal_fba86d2603f9c9e77e9e9598bce029e92d6d649a03d4b91cce460ff131228985->enter($__internal_fba86d2603f9c9e77e9e9598bce029e92d6d649a03d4b91cce460ff131228985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fba86d2603f9c9e77e9e9598bce029e92d6d649a03d4b91cce460ff131228985->leave($__internal_fba86d2603f9c9e77e9e9598bce029e92d6d649a03d4b91cce460ff131228985_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
