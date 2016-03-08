<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_153d9d97df8adcc72d787b797891f14b7efe434c47a3d42ada1c3f0d6ff44d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_a0b9faf58ce04c399e4102230f42992fb66d7bce891b6dda91645c59fe574d79 = $this->env->getExtension("native_profiler");
        $__internal_a0b9faf58ce04c399e4102230f42992fb66d7bce891b6dda91645c59fe574d79->enter($__internal_a0b9faf58ce04c399e4102230f42992fb66d7bce891b6dda91645c59fe574d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b9faf58ce04c399e4102230f42992fb66d7bce891b6dda91645c59fe574d79->leave($__internal_a0b9faf58ce04c399e4102230f42992fb66d7bce891b6dda91645c59fe574d79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8abbe6cbbb869e0b600019c6fd0f0ce0763a6fa95559a9c0742fc1fd64dd26d0 = $this->env->getExtension("native_profiler");
        $__internal_8abbe6cbbb869e0b600019c6fd0f0ce0763a6fa95559a9c0742fc1fd64dd26d0->enter($__internal_8abbe6cbbb869e0b600019c6fd0f0ce0763a6fa95559a9c0742fc1fd64dd26d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8abbe6cbbb869e0b600019c6fd0f0ce0763a6fa95559a9c0742fc1fd64dd26d0->leave($__internal_8abbe6cbbb869e0b600019c6fd0f0ce0763a6fa95559a9c0742fc1fd64dd26d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
