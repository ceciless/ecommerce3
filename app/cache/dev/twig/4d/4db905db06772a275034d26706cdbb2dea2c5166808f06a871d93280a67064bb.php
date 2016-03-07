<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe53851e0ac2ec843e3e9dd7e9219caa60dd44dbf602925a3256fc6540662a0 extends Twig_Template
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
        $__internal_1ff17bb02781d865987bfb953161e90c7fbdfe06d565cdcc1572d4e9925c31c7 = $this->env->getExtension("native_profiler");
        $__internal_1ff17bb02781d865987bfb953161e90c7fbdfe06d565cdcc1572d4e9925c31c7->enter($__internal_1ff17bb02781d865987bfb953161e90c7fbdfe06d565cdcc1572d4e9925c31c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ff17bb02781d865987bfb953161e90c7fbdfe06d565cdcc1572d4e9925c31c7->leave($__internal_1ff17bb02781d865987bfb953161e90c7fbdfe06d565cdcc1572d4e9925c31c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f50cb8c4d00c35e5baec6a902aec30690dcd78c7c5f5868f74f6e0ca3651619 = $this->env->getExtension("native_profiler");
        $__internal_5f50cb8c4d00c35e5baec6a902aec30690dcd78c7c5f5868f74f6e0ca3651619->enter($__internal_5f50cb8c4d00c35e5baec6a902aec30690dcd78c7c5f5868f74f6e0ca3651619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f50cb8c4d00c35e5baec6a902aec30690dcd78c7c5f5868f74f6e0ca3651619->leave($__internal_5f50cb8c4d00c35e5baec6a902aec30690dcd78c7c5f5868f74f6e0ca3651619_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f00a3d52db5bf30a7c8af914eb0badf1c6cc9138df44a91ea0c0c631566149b = $this->env->getExtension("native_profiler");
        $__internal_3f00a3d52db5bf30a7c8af914eb0badf1c6cc9138df44a91ea0c0c631566149b->enter($__internal_3f00a3d52db5bf30a7c8af914eb0badf1c6cc9138df44a91ea0c0c631566149b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f00a3d52db5bf30a7c8af914eb0badf1c6cc9138df44a91ea0c0c631566149b->leave($__internal_3f00a3d52db5bf30a7c8af914eb0badf1c6cc9138df44a91ea0c0c631566149b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3739edb47555d6f44988a17ca2fc54b608b5e16dad60963097375a17c6292bd = $this->env->getExtension("native_profiler");
        $__internal_e3739edb47555d6f44988a17ca2fc54b608b5e16dad60963097375a17c6292bd->enter($__internal_e3739edb47555d6f44988a17ca2fc54b608b5e16dad60963097375a17c6292bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e3739edb47555d6f44988a17ca2fc54b608b5e16dad60963097375a17c6292bd->leave($__internal_e3739edb47555d6f44988a17ca2fc54b608b5e16dad60963097375a17c6292bd_prof);

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
