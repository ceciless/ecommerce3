<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_844a60f0275a2eb5b13c4c00d507a1048abd0cafbcc6efd9d3907c8318e5184f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0aef2b84104bd12584ed1685dcb7618db64617b8b2169b2dabb3b7999f6f0b40 = $this->env->getExtension("native_profiler");
        $__internal_0aef2b84104bd12584ed1685dcb7618db64617b8b2169b2dabb3b7999f6f0b40->enter($__internal_0aef2b84104bd12584ed1685dcb7618db64617b8b2169b2dabb3b7999f6f0b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aef2b84104bd12584ed1685dcb7618db64617b8b2169b2dabb3b7999f6f0b40->leave($__internal_0aef2b84104bd12584ed1685dcb7618db64617b8b2169b2dabb3b7999f6f0b40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e869940b83e7af21c1b42e877f2cb7e01783e2a60eac5187b24b1756438b9319 = $this->env->getExtension("native_profiler");
        $__internal_e869940b83e7af21c1b42e877f2cb7e01783e2a60eac5187b24b1756438b9319->enter($__internal_e869940b83e7af21c1b42e877f2cb7e01783e2a60eac5187b24b1756438b9319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e869940b83e7af21c1b42e877f2cb7e01783e2a60eac5187b24b1756438b9319->leave($__internal_e869940b83e7af21c1b42e877f2cb7e01783e2a60eac5187b24b1756438b9319_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
