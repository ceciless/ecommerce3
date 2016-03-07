<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_2e8472c64228c5b4099a682440018916e410ddcb2eb94a2ae023f7d4d3ceaf42 extends Twig_Template
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
        $__internal_07d5f613d2626652ecb8e6343ae919c27635fbb5a0da8dd5c73e5f249ed2b730 = $this->env->getExtension("native_profiler");
        $__internal_07d5f613d2626652ecb8e6343ae919c27635fbb5a0da8dd5c73e5f249ed2b730->enter($__internal_07d5f613d2626652ecb8e6343ae919c27635fbb5a0da8dd5c73e5f249ed2b730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

        // line 1
        echo "
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("rechercheVelos");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
        
        $__internal_07d5f613d2626652ecb8e6343ae919c27635fbb5a0da8dd5c73e5f249ed2b730->leave($__internal_07d5f613d2626652ecb8e6343ae919c27635fbb5a0da8dd5c73e5f249ed2b730_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* <form action="{{ path('rechercheVelos') }}" method="POST" class="navbar-form form-search pull-right">*/
/*     {{ form_widget(form.recherche) }}*/
/*     <button type="submit" class="btn">Rechercher</button>*/
/*     {{ form_widget(form) }}*/
/* </form>*/
