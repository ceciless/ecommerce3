<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_c2cc432a99cafcdc0a1cf5f11b450e7b212e4bfc85c22b82902fe63a0e207a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18939e94e26ff78f045ca8ce20d13c1e4c817e8deaa559416cd95b069b8479db = $this->env->getExtension("native_profiler");
        $__internal_18939e94e26ff78f045ca8ce20d13c1e4c817e8deaa559416cd95b069b8479db->enter($__internal_18939e94e26ff78f045ca8ce20d13c1e4c817e8deaa559416cd95b069b8479db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "   <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_18939e94e26ff78f045ca8ce20d13c1e4c817e8deaa559416cd95b069b8479db->leave($__internal_18939e94e26ff78f045ca8ce20d13c1e4c817e8deaa559416cd95b069b8479db_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for page in pages %}*/
/*    <li><a href="{{ path('page', {'id' : page.id }) }}">{{ page.titre }}</a>*/
/* 	*/
/* {% endfor %}*/
