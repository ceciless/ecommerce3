<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_907c6117a981d3c884199225e59cc57a1b017a2eb926c6ebfd5e5084b5c18be2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98908f734e93b5ada9ae6994890f1a23ceb4518835bde9daf264a00407f9d8c0 = $this->env->getExtension("native_profiler");
        $__internal_98908f734e93b5ada9ae6994890f1a23ceb4518835bde9daf264a00407f9d8c0->enter($__internal_98908f734e93b5ada9ae6994890f1a23ceb4518835bde9daf264a00407f9d8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98908f734e93b5ada9ae6994890f1a23ceb4518835bde9daf264a00407f9d8c0->leave($__internal_98908f734e93b5ada9ae6994890f1a23ceb4518835bde9daf264a00407f9d8c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26bb5ef2af60488116e5eb69a231d80b76d42c29e822f4a9401fbf842589fa21 = $this->env->getExtension("native_profiler");
        $__internal_26bb5ef2af60488116e5eb69a231d80b76d42c29e822f4a9401fbf842589fa21->enter($__internal_26bb5ef2af60488116e5eb69a231d80b76d42c29e822f4a9401fbf842589fa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26bb5ef2af60488116e5eb69a231d80b76d42c29e822f4a9401fbf842589fa21->leave($__internal_26bb5ef2af60488116e5eb69a231d80b76d42c29e822f4a9401fbf842589fa21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c2cfa4f07e34150b896b5a7257f9b8e8a277e70a3986d83230cb0c99ddbe982 = $this->env->getExtension("native_profiler");
        $__internal_2c2cfa4f07e34150b896b5a7257f9b8e8a277e70a3986d83230cb0c99ddbe982->enter($__internal_2c2cfa4f07e34150b896b5a7257f9b8e8a277e70a3986d83230cb0c99ddbe982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c2cfa4f07e34150b896b5a7257f9b8e8a277e70a3986d83230cb0c99ddbe982->leave($__internal_2c2cfa4f07e34150b896b5a7257f9b8e8a277e70a3986d83230cb0c99ddbe982_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df89ff469a0aa26a2936a91284be40b285736e7cdf89733b0ae1017abbfadab7 = $this->env->getExtension("native_profiler");
        $__internal_df89ff469a0aa26a2936a91284be40b285736e7cdf89733b0ae1017abbfadab7->enter($__internal_df89ff469a0aa26a2936a91284be40b285736e7cdf89733b0ae1017abbfadab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df89ff469a0aa26a2936a91284be40b285736e7cdf89733b0ae1017abbfadab7->leave($__internal_df89ff469a0aa26a2936a91284be40b285736e7cdf89733b0ae1017abbfadab7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
