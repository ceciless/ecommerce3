<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8a55620d159b616dcdb6825a22e0d37926270a3773ff764c79ac8fb40700f3cb extends Twig_Template
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
        $__internal_d13680d3c033edc04a8b2599f9f891dc65e7b3b2cccd1e96d9f785826d695ff8 = $this->env->getExtension("native_profiler");
        $__internal_d13680d3c033edc04a8b2599f9f891dc65e7b3b2cccd1e96d9f785826d695ff8->enter($__internal_d13680d3c033edc04a8b2599f9f891dc65e7b3b2cccd1e96d9f785826d695ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13680d3c033edc04a8b2599f9f891dc65e7b3b2cccd1e96d9f785826d695ff8->leave($__internal_d13680d3c033edc04a8b2599f9f891dc65e7b3b2cccd1e96d9f785826d695ff8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be4e04e717f4735079db4444bed160dcf5f063c0d717fb191ca6edde4c235273 = $this->env->getExtension("native_profiler");
        $__internal_be4e04e717f4735079db4444bed160dcf5f063c0d717fb191ca6edde4c235273->enter($__internal_be4e04e717f4735079db4444bed160dcf5f063c0d717fb191ca6edde4c235273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_be4e04e717f4735079db4444bed160dcf5f063c0d717fb191ca6edde4c235273->leave($__internal_be4e04e717f4735079db4444bed160dcf5f063c0d717fb191ca6edde4c235273_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65e661b5a6931f10b66e658508683d9d636913bdb5ccc254c13263f50f5ddf07 = $this->env->getExtension("native_profiler");
        $__internal_65e661b5a6931f10b66e658508683d9d636913bdb5ccc254c13263f50f5ddf07->enter($__internal_65e661b5a6931f10b66e658508683d9d636913bdb5ccc254c13263f50f5ddf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_65e661b5a6931f10b66e658508683d9d636913bdb5ccc254c13263f50f5ddf07->leave($__internal_65e661b5a6931f10b66e658508683d9d636913bdb5ccc254c13263f50f5ddf07_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8512628cd5408e6af61ce90eb46a1d00c48ffe2288e815e473523ca5fdea3bbe = $this->env->getExtension("native_profiler");
        $__internal_8512628cd5408e6af61ce90eb46a1d00c48ffe2288e815e473523ca5fdea3bbe->enter($__internal_8512628cd5408e6af61ce90eb46a1d00c48ffe2288e815e473523ca5fdea3bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8512628cd5408e6af61ce90eb46a1d00c48ffe2288e815e473523ca5fdea3bbe->leave($__internal_8512628cd5408e6af61ce90eb46a1d00c48ffe2288e815e473523ca5fdea3bbe_prof);

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
