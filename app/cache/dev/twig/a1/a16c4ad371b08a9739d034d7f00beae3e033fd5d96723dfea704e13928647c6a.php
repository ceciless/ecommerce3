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
        $__internal_a996dee0b3e369476403a7e98af4f13e7572896a0f791e1972d2a52ec8d9deac = $this->env->getExtension("native_profiler");
        $__internal_a996dee0b3e369476403a7e98af4f13e7572896a0f791e1972d2a52ec8d9deac->enter($__internal_a996dee0b3e369476403a7e98af4f13e7572896a0f791e1972d2a52ec8d9deac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a996dee0b3e369476403a7e98af4f13e7572896a0f791e1972d2a52ec8d9deac->leave($__internal_a996dee0b3e369476403a7e98af4f13e7572896a0f791e1972d2a52ec8d9deac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d7fe7dfc4d20adfeea8ee0fdaa1c4a732b49c7d203419d3f8a227c26f39c0f86 = $this->env->getExtension("native_profiler");
        $__internal_d7fe7dfc4d20adfeea8ee0fdaa1c4a732b49c7d203419d3f8a227c26f39c0f86->enter($__internal_d7fe7dfc4d20adfeea8ee0fdaa1c4a732b49c7d203419d3f8a227c26f39c0f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d7fe7dfc4d20adfeea8ee0fdaa1c4a732b49c7d203419d3f8a227c26f39c0f86->leave($__internal_d7fe7dfc4d20adfeea8ee0fdaa1c4a732b49c7d203419d3f8a227c26f39c0f86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c81eabbaefe8fd078ea51e1a70034209ff15ce694e6ffd9e91653a49e4f022a = $this->env->getExtension("native_profiler");
        $__internal_2c81eabbaefe8fd078ea51e1a70034209ff15ce694e6ffd9e91653a49e4f022a->enter($__internal_2c81eabbaefe8fd078ea51e1a70034209ff15ce694e6ffd9e91653a49e4f022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c81eabbaefe8fd078ea51e1a70034209ff15ce694e6ffd9e91653a49e4f022a->leave($__internal_2c81eabbaefe8fd078ea51e1a70034209ff15ce694e6ffd9e91653a49e4f022a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e111d5f1b1a5b4b2ce0e637efd9528fbd084826714bd6019a0fe4659a267bbbb = $this->env->getExtension("native_profiler");
        $__internal_e111d5f1b1a5b4b2ce0e637efd9528fbd084826714bd6019a0fe4659a267bbbb->enter($__internal_e111d5f1b1a5b4b2ce0e637efd9528fbd084826714bd6019a0fe4659a267bbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e111d5f1b1a5b4b2ce0e637efd9528fbd084826714bd6019a0fe4659a267bbbb->leave($__internal_e111d5f1b1a5b4b2ce0e637efd9528fbd084826714bd6019a0fe4659a267bbbb_prof);

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
