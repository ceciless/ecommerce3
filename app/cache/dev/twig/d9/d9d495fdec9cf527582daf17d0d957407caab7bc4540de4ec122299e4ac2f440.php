<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0ec87e87534a6f774f72010d368326274d695723e12c9f3e4e2f6b038a8e0a53 extends Twig_Template
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
        $__internal_273cb33d59a9744e764f64fbcbe0d7e944b77dee7af92318adf11f715f538744 = $this->env->getExtension("native_profiler");
        $__internal_273cb33d59a9744e764f64fbcbe0d7e944b77dee7af92318adf11f715f538744->enter($__internal_273cb33d59a9744e764f64fbcbe0d7e944b77dee7af92318adf11f715f538744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273cb33d59a9744e764f64fbcbe0d7e944b77dee7af92318adf11f715f538744->leave($__internal_273cb33d59a9744e764f64fbcbe0d7e944b77dee7af92318adf11f715f538744_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b45763a6bfedc88f5b50af5110306e921dab93decc9f6198537c76c11efa78cd = $this->env->getExtension("native_profiler");
        $__internal_b45763a6bfedc88f5b50af5110306e921dab93decc9f6198537c76c11efa78cd->enter($__internal_b45763a6bfedc88f5b50af5110306e921dab93decc9f6198537c76c11efa78cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b45763a6bfedc88f5b50af5110306e921dab93decc9f6198537c76c11efa78cd->leave($__internal_b45763a6bfedc88f5b50af5110306e921dab93decc9f6198537c76c11efa78cd_prof);

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
