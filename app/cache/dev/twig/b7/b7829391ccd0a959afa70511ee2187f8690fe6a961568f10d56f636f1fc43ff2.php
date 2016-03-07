<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_491592250cdc478e75dd9fe1c404c5ba0f1ea73d3e2ae50be542b2ea52acd93c extends Twig_Template
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
        $__internal_2943061b20a2a0b9e68ed1837ff24aad6b1e84bb94f309f596b8bcec8ff82b18 = $this->env->getExtension("native_profiler");
        $__internal_2943061b20a2a0b9e68ed1837ff24aad6b1e84bb94f309f596b8bcec8ff82b18->enter($__internal_2943061b20a2a0b9e68ed1837ff24aad6b1e84bb94f309f596b8bcec8ff82b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2943061b20a2a0b9e68ed1837ff24aad6b1e84bb94f309f596b8bcec8ff82b18->leave($__internal_2943061b20a2a0b9e68ed1837ff24aad6b1e84bb94f309f596b8bcec8ff82b18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9141990003b9d20df161efd9881fa178eb223b62ece43e32b4275b4729e4617b = $this->env->getExtension("native_profiler");
        $__internal_9141990003b9d20df161efd9881fa178eb223b62ece43e32b4275b4729e4617b->enter($__internal_9141990003b9d20df161efd9881fa178eb223b62ece43e32b4275b4729e4617b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9141990003b9d20df161efd9881fa178eb223b62ece43e32b4275b4729e4617b->leave($__internal_9141990003b9d20df161efd9881fa178eb223b62ece43e32b4275b4729e4617b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5688d83642c887b0e5644f76bc45e903fa4605123809cfdd7a4882bda3d9c43c = $this->env->getExtension("native_profiler");
        $__internal_5688d83642c887b0e5644f76bc45e903fa4605123809cfdd7a4882bda3d9c43c->enter($__internal_5688d83642c887b0e5644f76bc45e903fa4605123809cfdd7a4882bda3d9c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5688d83642c887b0e5644f76bc45e903fa4605123809cfdd7a4882bda3d9c43c->leave($__internal_5688d83642c887b0e5644f76bc45e903fa4605123809cfdd7a4882bda3d9c43c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b27c27ec4a15fac974dafab3d9205ad736f62f7e606aa121954d34700d6f45ae = $this->env->getExtension("native_profiler");
        $__internal_b27c27ec4a15fac974dafab3d9205ad736f62f7e606aa121954d34700d6f45ae->enter($__internal_b27c27ec4a15fac974dafab3d9205ad736f62f7e606aa121954d34700d6f45ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b27c27ec4a15fac974dafab3d9205ad736f62f7e606aa121954d34700d6f45ae->leave($__internal_b27c27ec4a15fac974dafab3d9205ad736f62f7e606aa121954d34700d6f45ae_prof);

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
