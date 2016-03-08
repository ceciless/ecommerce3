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
        $__internal_f4fc6aa628ebc5dd5402943a250c8a4a9626c3746510bb6be8bac8389e2fc1d2 = $this->env->getExtension("native_profiler");
        $__internal_f4fc6aa628ebc5dd5402943a250c8a4a9626c3746510bb6be8bac8389e2fc1d2->enter($__internal_f4fc6aa628ebc5dd5402943a250c8a4a9626c3746510bb6be8bac8389e2fc1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4fc6aa628ebc5dd5402943a250c8a4a9626c3746510bb6be8bac8389e2fc1d2->leave($__internal_f4fc6aa628ebc5dd5402943a250c8a4a9626c3746510bb6be8bac8389e2fc1d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b67084e23676774cc9e58d34018a0cdfda0a00e120d5da070df8e06d4a6e7ab2 = $this->env->getExtension("native_profiler");
        $__internal_b67084e23676774cc9e58d34018a0cdfda0a00e120d5da070df8e06d4a6e7ab2->enter($__internal_b67084e23676774cc9e58d34018a0cdfda0a00e120d5da070df8e06d4a6e7ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b67084e23676774cc9e58d34018a0cdfda0a00e120d5da070df8e06d4a6e7ab2->leave($__internal_b67084e23676774cc9e58d34018a0cdfda0a00e120d5da070df8e06d4a6e7ab2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70c987ef034bcf39efc8c022331c8c1e762da36b5a318dbe9861e82fdf69109f = $this->env->getExtension("native_profiler");
        $__internal_70c987ef034bcf39efc8c022331c8c1e762da36b5a318dbe9861e82fdf69109f->enter($__internal_70c987ef034bcf39efc8c022331c8c1e762da36b5a318dbe9861e82fdf69109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_70c987ef034bcf39efc8c022331c8c1e762da36b5a318dbe9861e82fdf69109f->leave($__internal_70c987ef034bcf39efc8c022331c8c1e762da36b5a318dbe9861e82fdf69109f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4edd22a06bcfef1170a5fea2283fde6d0f711b8e6b94d3926d833255894e2ba = $this->env->getExtension("native_profiler");
        $__internal_e4edd22a06bcfef1170a5fea2283fde6d0f711b8e6b94d3926d833255894e2ba->enter($__internal_e4edd22a06bcfef1170a5fea2283fde6d0f711b8e6b94d3926d833255894e2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e4edd22a06bcfef1170a5fea2283fde6d0f711b8e6b94d3926d833255894e2ba->leave($__internal_e4edd22a06bcfef1170a5fea2283fde6d0f711b8e6b94d3926d833255894e2ba_prof);

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
