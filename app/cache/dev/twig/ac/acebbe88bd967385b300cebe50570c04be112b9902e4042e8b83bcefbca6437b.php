<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9e4ce9e97e146e95f83862cbbcd3a24f4f81bf99888ccd75fa60f2181b5b4b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1f00e4fcbee7fbc8febeff3202b0fe8bdabe3c2d71f499d091009d855eee87cd = $this->env->getExtension("native_profiler");
        $__internal_1f00e4fcbee7fbc8febeff3202b0fe8bdabe3c2d71f499d091009d855eee87cd->enter($__internal_1f00e4fcbee7fbc8febeff3202b0fe8bdabe3c2d71f499d091009d855eee87cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f00e4fcbee7fbc8febeff3202b0fe8bdabe3c2d71f499d091009d855eee87cd->leave($__internal_1f00e4fcbee7fbc8febeff3202b0fe8bdabe3c2d71f499d091009d855eee87cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_033c0f2f07f307c8374c41126a55a8bec9453f24efd6577990e1f8ad091e8c36 = $this->env->getExtension("native_profiler");
        $__internal_033c0f2f07f307c8374c41126a55a8bec9453f24efd6577990e1f8ad091e8c36->enter($__internal_033c0f2f07f307c8374c41126a55a8bec9453f24efd6577990e1f8ad091e8c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_033c0f2f07f307c8374c41126a55a8bec9453f24efd6577990e1f8ad091e8c36->leave($__internal_033c0f2f07f307c8374c41126a55a8bec9453f24efd6577990e1f8ad091e8c36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
