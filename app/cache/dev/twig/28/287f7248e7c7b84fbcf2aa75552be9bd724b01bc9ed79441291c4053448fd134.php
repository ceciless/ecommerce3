<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_585d12fa4e5b91f74a2910c5999a6af841dc87064cbd7bb63a93af8f02baab90 extends Twig_Template
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
        $__internal_9a9676aebf6aab9bd020e6cba7913f8facc641d4594a218b952586520edd2203 = $this->env->getExtension("native_profiler");
        $__internal_9a9676aebf6aab9bd020e6cba7913f8facc641d4594a218b952586520edd2203->enter($__internal_9a9676aebf6aab9bd020e6cba7913f8facc641d4594a218b952586520edd2203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

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
        
        $__internal_9a9676aebf6aab9bd020e6cba7913f8facc641d4594a218b952586520edd2203->leave($__internal_9a9676aebf6aab9bd020e6cba7913f8facc641d4594a218b952586520edd2203_prof);

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
