<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c70effee1b739ad475500b8f0d775ed840686e8e39f18bf74996590cee04bf extends Twig_Template
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
        $__internal_754415f5e6dad93801f88a888048ea7c37f5b16859b3a93cf05caad3079c85f7 = $this->env->getExtension("native_profiler");
        $__internal_754415f5e6dad93801f88a888048ea7c37f5b16859b3a93cf05caad3079c85f7->enter($__internal_754415f5e6dad93801f88a888048ea7c37f5b16859b3a93cf05caad3079c85f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_754415f5e6dad93801f88a888048ea7c37f5b16859b3a93cf05caad3079c85f7->leave($__internal_754415f5e6dad93801f88a888048ea7c37f5b16859b3a93cf05caad3079c85f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab582a6d1ab36aea24c592be557d442a504011e5bb73fbcd30e90c2c5bdedf79 = $this->env->getExtension("native_profiler");
        $__internal_ab582a6d1ab36aea24c592be557d442a504011e5bb73fbcd30e90c2c5bdedf79->enter($__internal_ab582a6d1ab36aea24c592be557d442a504011e5bb73fbcd30e90c2c5bdedf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab582a6d1ab36aea24c592be557d442a504011e5bb73fbcd30e90c2c5bdedf79->leave($__internal_ab582a6d1ab36aea24c592be557d442a504011e5bb73fbcd30e90c2c5bdedf79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_139d4907d30b041c1d65509e6bf86e2eb3bb35794ec499936760a376571a5d78 = $this->env->getExtension("native_profiler");
        $__internal_139d4907d30b041c1d65509e6bf86e2eb3bb35794ec499936760a376571a5d78->enter($__internal_139d4907d30b041c1d65509e6bf86e2eb3bb35794ec499936760a376571a5d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_139d4907d30b041c1d65509e6bf86e2eb3bb35794ec499936760a376571a5d78->leave($__internal_139d4907d30b041c1d65509e6bf86e2eb3bb35794ec499936760a376571a5d78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47ef2d23a0208bf164ea2dae29f4c412ee367ca55d5c0e9e0756c9f9897170c1 = $this->env->getExtension("native_profiler");
        $__internal_47ef2d23a0208bf164ea2dae29f4c412ee367ca55d5c0e9e0756c9f9897170c1->enter($__internal_47ef2d23a0208bf164ea2dae29f4c412ee367ca55d5c0e9e0756c9f9897170c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47ef2d23a0208bf164ea2dae29f4c412ee367ca55d5c0e9e0756c9f9897170c1->leave($__internal_47ef2d23a0208bf164ea2dae29f4c412ee367ca55d5c0e9e0756c9f9897170c1_prof);

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
