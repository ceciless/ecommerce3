<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_12f8f585513c628713db1c13abf1ddc32070ce06c61df2282f228c4ed8a0a216 extends Twig_Template
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
        $__internal_d270c6aa8e17da5c6a9f00611765de6ff41a9d95e36bcea0f7e6c5ddf8047216 = $this->env->getExtension("native_profiler");
        $__internal_d270c6aa8e17da5c6a9f00611765de6ff41a9d95e36bcea0f7e6c5ddf8047216->enter($__internal_d270c6aa8e17da5c6a9f00611765de6ff41a9d95e36bcea0f7e6c5ddf8047216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d270c6aa8e17da5c6a9f00611765de6ff41a9d95e36bcea0f7e6c5ddf8047216->leave($__internal_d270c6aa8e17da5c6a9f00611765de6ff41a9d95e36bcea0f7e6c5ddf8047216_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d452a86e5c47992e55cfffd0aa6e20efc1e18bd6faa9d1b05aa3ce5cffd515b = $this->env->getExtension("native_profiler");
        $__internal_6d452a86e5c47992e55cfffd0aa6e20efc1e18bd6faa9d1b05aa3ce5cffd515b->enter($__internal_6d452a86e5c47992e55cfffd0aa6e20efc1e18bd6faa9d1b05aa3ce5cffd515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6d452a86e5c47992e55cfffd0aa6e20efc1e18bd6faa9d1b05aa3ce5cffd515b->leave($__internal_6d452a86e5c47992e55cfffd0aa6e20efc1e18bd6faa9d1b05aa3ce5cffd515b_prof);

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
