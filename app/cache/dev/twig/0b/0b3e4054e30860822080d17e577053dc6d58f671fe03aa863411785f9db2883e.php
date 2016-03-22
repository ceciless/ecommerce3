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
        $__internal_dbc32286a490c2245a5185c7eeda8e8783d6a49d79ed4cbceb21be82ed34030b = $this->env->getExtension("native_profiler");
        $__internal_dbc32286a490c2245a5185c7eeda8e8783d6a49d79ed4cbceb21be82ed34030b->enter($__internal_dbc32286a490c2245a5185c7eeda8e8783d6a49d79ed4cbceb21be82ed34030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc32286a490c2245a5185c7eeda8e8783d6a49d79ed4cbceb21be82ed34030b->leave($__internal_dbc32286a490c2245a5185c7eeda8e8783d6a49d79ed4cbceb21be82ed34030b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9f639b75a2eed4caaaaded049a4fc1a2cd4d2cbe7a2697c6f36ffa9fa929cd0 = $this->env->getExtension("native_profiler");
        $__internal_e9f639b75a2eed4caaaaded049a4fc1a2cd4d2cbe7a2697c6f36ffa9fa929cd0->enter($__internal_e9f639b75a2eed4caaaaded049a4fc1a2cd4d2cbe7a2697c6f36ffa9fa929cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9f639b75a2eed4caaaaded049a4fc1a2cd4d2cbe7a2697c6f36ffa9fa929cd0->leave($__internal_e9f639b75a2eed4caaaaded049a4fc1a2cd4d2cbe7a2697c6f36ffa9fa929cd0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3adbd55b61ad28dd9d8cd361298bb058a29bda60741337868553b3bf26b1f2e7 = $this->env->getExtension("native_profiler");
        $__internal_3adbd55b61ad28dd9d8cd361298bb058a29bda60741337868553b3bf26b1f2e7->enter($__internal_3adbd55b61ad28dd9d8cd361298bb058a29bda60741337868553b3bf26b1f2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3adbd55b61ad28dd9d8cd361298bb058a29bda60741337868553b3bf26b1f2e7->leave($__internal_3adbd55b61ad28dd9d8cd361298bb058a29bda60741337868553b3bf26b1f2e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c2173e9562e817e13d743d827ad0f644f30283760b4bbe088bc424671b84c1c = $this->env->getExtension("native_profiler");
        $__internal_1c2173e9562e817e13d743d827ad0f644f30283760b4bbe088bc424671b84c1c->enter($__internal_1c2173e9562e817e13d743d827ad0f644f30283760b4bbe088bc424671b84c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1c2173e9562e817e13d743d827ad0f644f30283760b4bbe088bc424671b84c1c->leave($__internal_1c2173e9562e817e13d743d827ad0f644f30283760b4bbe088bc424671b84c1c_prof);

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
