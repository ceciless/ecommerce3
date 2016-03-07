<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c3d1d9bdb0095b13a449f1a6a517bd0b4cebd7f852e803f8600c09f1e2a795f0 extends Twig_Template
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
        $__internal_ad69cfc8b8e0ff663fc2921be445e4be9e05939f1ed685c521fa98ee0c878926 = $this->env->getExtension("native_profiler");
        $__internal_ad69cfc8b8e0ff663fc2921be445e4be9e05939f1ed685c521fa98ee0c878926->enter($__internal_ad69cfc8b8e0ff663fc2921be445e4be9e05939f1ed685c521fa98ee0c878926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad69cfc8b8e0ff663fc2921be445e4be9e05939f1ed685c521fa98ee0c878926->leave($__internal_ad69cfc8b8e0ff663fc2921be445e4be9e05939f1ed685c521fa98ee0c878926_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b075f2807a94c87c7ec73808843e5ece09301a8f3d3a59fd2af883aefa30a2a0 = $this->env->getExtension("native_profiler");
        $__internal_b075f2807a94c87c7ec73808843e5ece09301a8f3d3a59fd2af883aefa30a2a0->enter($__internal_b075f2807a94c87c7ec73808843e5ece09301a8f3d3a59fd2af883aefa30a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b075f2807a94c87c7ec73808843e5ece09301a8f3d3a59fd2af883aefa30a2a0->leave($__internal_b075f2807a94c87c7ec73808843e5ece09301a8f3d3a59fd2af883aefa30a2a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24a05bdd901a120e240e2f79aa76f868ff4aa199cbe13088bbef9e8f79b7b3f9 = $this->env->getExtension("native_profiler");
        $__internal_24a05bdd901a120e240e2f79aa76f868ff4aa199cbe13088bbef9e8f79b7b3f9->enter($__internal_24a05bdd901a120e240e2f79aa76f868ff4aa199cbe13088bbef9e8f79b7b3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_24a05bdd901a120e240e2f79aa76f868ff4aa199cbe13088bbef9e8f79b7b3f9->leave($__internal_24a05bdd901a120e240e2f79aa76f868ff4aa199cbe13088bbef9e8f79b7b3f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f89c0dc41153b4915c71edf867dd5374ae9860dd4c430f40de02ba0340ca281c = $this->env->getExtension("native_profiler");
        $__internal_f89c0dc41153b4915c71edf867dd5374ae9860dd4c430f40de02ba0340ca281c->enter($__internal_f89c0dc41153b4915c71edf867dd5374ae9860dd4c430f40de02ba0340ca281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f89c0dc41153b4915c71edf867dd5374ae9860dd4c430f40de02ba0340ca281c->leave($__internal_f89c0dc41153b4915c71edf867dd5374ae9860dd4c430f40de02ba0340ca281c_prof);

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
