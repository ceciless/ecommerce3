<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_877c29332dfda7398297e4dc352bebedbc260e49b71e0c67dc6043d18b77f6ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_093a83429572d4a247bcbc75a6ecf4be2f86ec93ac8d81bba0a83050f9c7ab4a = $this->env->getExtension("native_profiler");
        $__internal_093a83429572d4a247bcbc75a6ecf4be2f86ec93ac8d81bba0a83050f9c7ab4a->enter($__internal_093a83429572d4a247bcbc75a6ecf4be2f86ec93ac8d81bba0a83050f9c7ab4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093a83429572d4a247bcbc75a6ecf4be2f86ec93ac8d81bba0a83050f9c7ab4a->leave($__internal_093a83429572d4a247bcbc75a6ecf4be2f86ec93ac8d81bba0a83050f9c7ab4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad7397abd9eda9c21c06b59764d1d31c83df26124ca2458cb67b9eea7ea12dfd = $this->env->getExtension("native_profiler");
        $__internal_ad7397abd9eda9c21c06b59764d1d31c83df26124ca2458cb67b9eea7ea12dfd->enter($__internal_ad7397abd9eda9c21c06b59764d1d31c83df26124ca2458cb67b9eea7ea12dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ad7397abd9eda9c21c06b59764d1d31c83df26124ca2458cb67b9eea7ea12dfd->leave($__internal_ad7397abd9eda9c21c06b59764d1d31c83df26124ca2458cb67b9eea7ea12dfd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
