<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8320dbafdf9e8752a21c37b52780722ed6114d775731ba6bb9c919e17234ffac extends Twig_Template
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
        $__internal_1bbd6c70e3fcbcf7ddc6778469ae6b62d4bd7b4e27683efb4c5037012315d724 = $this->env->getExtension("native_profiler");
        $__internal_1bbd6c70e3fcbcf7ddc6778469ae6b62d4bd7b4e27683efb4c5037012315d724->enter($__internal_1bbd6c70e3fcbcf7ddc6778469ae6b62d4bd7b4e27683efb4c5037012315d724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbd6c70e3fcbcf7ddc6778469ae6b62d4bd7b4e27683efb4c5037012315d724->leave($__internal_1bbd6c70e3fcbcf7ddc6778469ae6b62d4bd7b4e27683efb4c5037012315d724_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f3057c4eb9bcf8b1009ea3f5c1b2e698eff36df9b1e7a82d9527d485a8baad3 = $this->env->getExtension("native_profiler");
        $__internal_5f3057c4eb9bcf8b1009ea3f5c1b2e698eff36df9b1e7a82d9527d485a8baad3->enter($__internal_5f3057c4eb9bcf8b1009ea3f5c1b2e698eff36df9b1e7a82d9527d485a8baad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f3057c4eb9bcf8b1009ea3f5c1b2e698eff36df9b1e7a82d9527d485a8baad3->leave($__internal_5f3057c4eb9bcf8b1009ea3f5c1b2e698eff36df9b1e7a82d9527d485a8baad3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_535f5df9aa5efab3d2eaa792d4efb48e3732ea69b60ccaf912c1fe6ccfdf0cfd = $this->env->getExtension("native_profiler");
        $__internal_535f5df9aa5efab3d2eaa792d4efb48e3732ea69b60ccaf912c1fe6ccfdf0cfd->enter($__internal_535f5df9aa5efab3d2eaa792d4efb48e3732ea69b60ccaf912c1fe6ccfdf0cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_535f5df9aa5efab3d2eaa792d4efb48e3732ea69b60ccaf912c1fe6ccfdf0cfd->leave($__internal_535f5df9aa5efab3d2eaa792d4efb48e3732ea69b60ccaf912c1fe6ccfdf0cfd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69381d7527140f24e1aa158f74731f124c6fa935885eb8cb97798df63339a35e = $this->env->getExtension("native_profiler");
        $__internal_69381d7527140f24e1aa158f74731f124c6fa935885eb8cb97798df63339a35e->enter($__internal_69381d7527140f24e1aa158f74731f124c6fa935885eb8cb97798df63339a35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69381d7527140f24e1aa158f74731f124c6fa935885eb8cb97798df63339a35e->leave($__internal_69381d7527140f24e1aa158f74731f124c6fa935885eb8cb97798df63339a35e_prof);

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
