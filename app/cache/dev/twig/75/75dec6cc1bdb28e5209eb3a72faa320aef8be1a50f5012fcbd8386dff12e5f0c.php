<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bc84489244a1a6e899882a981b15d480906188328b5f8666fda02baa0fc2ca44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f79257db7bba6d49e7a730b4340a36a606f7995f9e9e21ef3a20271b9b0cd1e5 = $this->env->getExtension("native_profiler");
        $__internal_f79257db7bba6d49e7a730b4340a36a606f7995f9e9e21ef3a20271b9b0cd1e5->enter($__internal_f79257db7bba6d49e7a730b4340a36a606f7995f9e9e21ef3a20271b9b0cd1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79257db7bba6d49e7a730b4340a36a606f7995f9e9e21ef3a20271b9b0cd1e5->leave($__internal_f79257db7bba6d49e7a730b4340a36a606f7995f9e9e21ef3a20271b9b0cd1e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9caf00bd341a59f33067d37f6caf443f9bdac7592512056d1d1d8676e371c9f5 = $this->env->getExtension("native_profiler");
        $__internal_9caf00bd341a59f33067d37f6caf443f9bdac7592512056d1d1d8676e371c9f5->enter($__internal_9caf00bd341a59f33067d37f6caf443f9bdac7592512056d1d1d8676e371c9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9caf00bd341a59f33067d37f6caf443f9bdac7592512056d1d1d8676e371c9f5->leave($__internal_9caf00bd341a59f33067d37f6caf443f9bdac7592512056d1d1d8676e371c9f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1f8aea09470a0c050f443814f71bac31c1df31b42509b733533852acf1fe08d = $this->env->getExtension("native_profiler");
        $__internal_b1f8aea09470a0c050f443814f71bac31c1df31b42509b733533852acf1fe08d->enter($__internal_b1f8aea09470a0c050f443814f71bac31c1df31b42509b733533852acf1fe08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1f8aea09470a0c050f443814f71bac31c1df31b42509b733533852acf1fe08d->leave($__internal_b1f8aea09470a0c050f443814f71bac31c1df31b42509b733533852acf1fe08d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed48a47a1fd5ec06ec277006fb9cc1ab06327dd499b6c64edd90be08cce8beb7 = $this->env->getExtension("native_profiler");
        $__internal_ed48a47a1fd5ec06ec277006fb9cc1ab06327dd499b6c64edd90be08cce8beb7->enter($__internal_ed48a47a1fd5ec06ec277006fb9cc1ab06327dd499b6c64edd90be08cce8beb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ed48a47a1fd5ec06ec277006fb9cc1ab06327dd499b6c64edd90be08cce8beb7->leave($__internal_ed48a47a1fd5ec06ec277006fb9cc1ab06327dd499b6c64edd90be08cce8beb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
