<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_844d3d11ca108303b37dff447a898ce491899659df8449cfd6c97aea7ef603af extends Twig_Template
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
        $__internal_2899c021b3c77332d0761828e036dca260d1f09e9524fbace659598dcb318ac6 = $this->env->getExtension("native_profiler");
        $__internal_2899c021b3c77332d0761828e036dca260d1f09e9524fbace659598dcb318ac6->enter($__internal_2899c021b3c77332d0761828e036dca260d1f09e9524fbace659598dcb318ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

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
        
        $__internal_2899c021b3c77332d0761828e036dca260d1f09e9524fbace659598dcb318ac6->leave($__internal_2899c021b3c77332d0761828e036dca260d1f09e9524fbace659598dcb318ac6_prof);

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
