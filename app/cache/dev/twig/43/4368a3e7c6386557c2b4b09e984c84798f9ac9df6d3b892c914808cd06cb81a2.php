<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6d85ca33e57f4c2003b0a4a87ad6a9fe7e6a40583306ed68d9a5c2c3b23a2552 extends Twig_Template
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
        $__internal_f949039488d2be7f85f35dd2c429a05d89ce7f03ea6353f85def8463fa9b645c = $this->env->getExtension("native_profiler");
        $__internal_f949039488d2be7f85f35dd2c429a05d89ce7f03ea6353f85def8463fa9b645c->enter($__internal_f949039488d2be7f85f35dd2c429a05d89ce7f03ea6353f85def8463fa9b645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f949039488d2be7f85f35dd2c429a05d89ce7f03ea6353f85def8463fa9b645c->leave($__internal_f949039488d2be7f85f35dd2c429a05d89ce7f03ea6353f85def8463fa9b645c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72b6b3ca8bc32b02938dab2543041015c5cebf65ad1b1958a48920af8e4233aa = $this->env->getExtension("native_profiler");
        $__internal_72b6b3ca8bc32b02938dab2543041015c5cebf65ad1b1958a48920af8e4233aa->enter($__internal_72b6b3ca8bc32b02938dab2543041015c5cebf65ad1b1958a48920af8e4233aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_72b6b3ca8bc32b02938dab2543041015c5cebf65ad1b1958a48920af8e4233aa->leave($__internal_72b6b3ca8bc32b02938dab2543041015c5cebf65ad1b1958a48920af8e4233aa_prof);

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
