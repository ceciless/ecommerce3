<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ecc4753648fd6f88ca3b6699fb8f03f166e3c5a09dd6c0d4d874d78362c0fcc7 extends Twig_Template
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
        $__internal_576e7ef52f8fa7fe2d25d0436c777a506b2e875aa53cdba7f2b6720f4aa93863 = $this->env->getExtension("native_profiler");
        $__internal_576e7ef52f8fa7fe2d25d0436c777a506b2e875aa53cdba7f2b6720f4aa93863->enter($__internal_576e7ef52f8fa7fe2d25d0436c777a506b2e875aa53cdba7f2b6720f4aa93863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576e7ef52f8fa7fe2d25d0436c777a506b2e875aa53cdba7f2b6720f4aa93863->leave($__internal_576e7ef52f8fa7fe2d25d0436c777a506b2e875aa53cdba7f2b6720f4aa93863_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fd2aa4b2e702f24599af0d892d33364eb663037df1712bd56dbad194bc83cf4 = $this->env->getExtension("native_profiler");
        $__internal_2fd2aa4b2e702f24599af0d892d33364eb663037df1712bd56dbad194bc83cf4->enter($__internal_2fd2aa4b2e702f24599af0d892d33364eb663037df1712bd56dbad194bc83cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2fd2aa4b2e702f24599af0d892d33364eb663037df1712bd56dbad194bc83cf4->leave($__internal_2fd2aa4b2e702f24599af0d892d33364eb663037df1712bd56dbad194bc83cf4_prof);

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
