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
        $__internal_60c2acb30c5608086c8ab7b24cb8aef5c87141bb47cd28818d2e9de4f9296f00 = $this->env->getExtension("native_profiler");
        $__internal_60c2acb30c5608086c8ab7b24cb8aef5c87141bb47cd28818d2e9de4f9296f00->enter($__internal_60c2acb30c5608086c8ab7b24cb8aef5c87141bb47cd28818d2e9de4f9296f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60c2acb30c5608086c8ab7b24cb8aef5c87141bb47cd28818d2e9de4f9296f00->leave($__internal_60c2acb30c5608086c8ab7b24cb8aef5c87141bb47cd28818d2e9de4f9296f00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b80fac23ad2e8a27e7e55ddc5230aa04e9e392d4a24f9e2746009ae36c6b7b3 = $this->env->getExtension("native_profiler");
        $__internal_3b80fac23ad2e8a27e7e55ddc5230aa04e9e392d4a24f9e2746009ae36c6b7b3->enter($__internal_3b80fac23ad2e8a27e7e55ddc5230aa04e9e392d4a24f9e2746009ae36c6b7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b80fac23ad2e8a27e7e55ddc5230aa04e9e392d4a24f9e2746009ae36c6b7b3->leave($__internal_3b80fac23ad2e8a27e7e55ddc5230aa04e9e392d4a24f9e2746009ae36c6b7b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38eab0ed55fb1e95a7817fd1a7747864bc144dc903510bf0e1c824607af35f10 = $this->env->getExtension("native_profiler");
        $__internal_38eab0ed55fb1e95a7817fd1a7747864bc144dc903510bf0e1c824607af35f10->enter($__internal_38eab0ed55fb1e95a7817fd1a7747864bc144dc903510bf0e1c824607af35f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38eab0ed55fb1e95a7817fd1a7747864bc144dc903510bf0e1c824607af35f10->leave($__internal_38eab0ed55fb1e95a7817fd1a7747864bc144dc903510bf0e1c824607af35f10_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37b1f230bc11235d0fd15eaad49274af7d89e1d12bb58e921f26a9f4469b9c30 = $this->env->getExtension("native_profiler");
        $__internal_37b1f230bc11235d0fd15eaad49274af7d89e1d12bb58e921f26a9f4469b9c30->enter($__internal_37b1f230bc11235d0fd15eaad49274af7d89e1d12bb58e921f26a9f4469b9c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37b1f230bc11235d0fd15eaad49274af7d89e1d12bb58e921f26a9f4469b9c30->leave($__internal_37b1f230bc11235d0fd15eaad49274af7d89e1d12bb58e921f26a9f4469b9c30_prof);

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
