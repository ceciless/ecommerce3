<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_1e6029ca86615a8bad7c5a6f6f7b0c9d1d9fd0303dc6b10a4f126c5a26c529f6 extends Twig_Template
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
        $__internal_df2643a74c3d738db3cba3d223d55461f72ab3340c00ad0e11aadbd45e79c42d = $this->env->getExtension("native_profiler");
        $__internal_df2643a74c3d738db3cba3d223d55461f72ab3340c00ad0e11aadbd45e79c42d->enter($__internal_df2643a74c3d738db3cba3d223d55461f72ab3340c00ad0e11aadbd45e79c42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/modulesUsed/menu.html.twig"));

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
        
        $__internal_df2643a74c3d738db3cba3d223d55461f72ab3340c00ad0e11aadbd45e79c42d->leave($__internal_df2643a74c3d738db3cba3d223d55461f72ab3340c00ad0e11aadbd45e79c42d_prof);

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
