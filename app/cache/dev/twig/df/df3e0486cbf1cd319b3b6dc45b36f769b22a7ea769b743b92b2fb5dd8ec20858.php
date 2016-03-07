<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_8934eb3633f782030de17e501d8e87cea098c365de8f44659339d36d06b99578 extends Twig_Template
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
        $__internal_8bc02d3df6406dc03bc74bbc1759c6c08298b8a8fa3b40455801a18471c1b47c = $this->env->getExtension("native_profiler");
        $__internal_8bc02d3df6406dc03bc74bbc1759c6c08298b8a8fa3b40455801a18471c1b47c->enter($__internal_8bc02d3df6406dc03bc74bbc1759c6c08298b8a8fa3b40455801a18471c1b47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "\t<li >
\t    <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieVelos", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "catenom", array()), "html", null, true);
            echo "</a>
\t</li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8bc02d3df6406dc03bc74bbc1759c6c08298b8a8fa3b40455801a18471c1b47c->leave($__internal_8bc02d3df6406dc03bc74bbc1759c6c08298b8a8fa3b40455801a18471c1b47c_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for categorie in categories %}*/
/* 	<li >*/
/* 	    <a href="{{ path('categorieVelos',{'categorie' : categorie.id})}}">{{ categorie.catenom }}</a>*/
/* 	</li>*/
/* */
/* {% endfor %}*/
