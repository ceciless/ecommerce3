<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5303ef9cb539d70a341fcfdb572ba6453f865bfee109c4666077906572cfcc51 extends Twig_Template
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
        $__internal_9cf5126a2f39ab228bf73df61540c4f53eebaa2ff891825ccb01f27c2ed6ca6b = $this->env->getExtension("native_profiler");
        $__internal_9cf5126a2f39ab228bf73df61540c4f53eebaa2ff891825ccb01f27c2ed6ca6b->enter($__internal_9cf5126a2f39ab228bf73df61540c4f53eebaa2ff891825ccb01f27c2ed6ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf5126a2f39ab228bf73df61540c4f53eebaa2ff891825ccb01f27c2ed6ca6b->leave($__internal_9cf5126a2f39ab228bf73df61540c4f53eebaa2ff891825ccb01f27c2ed6ca6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df58976ce023c1cbf9de125250f780b8accd0ef46d348dca72ac5e3fa51aeaa4 = $this->env->getExtension("native_profiler");
        $__internal_df58976ce023c1cbf9de125250f780b8accd0ef46d348dca72ac5e3fa51aeaa4->enter($__internal_df58976ce023c1cbf9de125250f780b8accd0ef46d348dca72ac5e3fa51aeaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_df58976ce023c1cbf9de125250f780b8accd0ef46d348dca72ac5e3fa51aeaa4->leave($__internal_df58976ce023c1cbf9de125250f780b8accd0ef46d348dca72ac5e3fa51aeaa4_prof);

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
