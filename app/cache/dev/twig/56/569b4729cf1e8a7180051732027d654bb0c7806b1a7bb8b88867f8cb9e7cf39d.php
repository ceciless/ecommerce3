<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_b130fb1ad2624ce38312be2c114b4747ead7625dc78a14960618b08d893d91c0 extends Twig_Template
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
        $__internal_9a5c9b0f0aaa337cd00fabda93cfa8cfbcc7867785d1f36f7e0af0fa19437466 = $this->env->getExtension("native_profiler");
        $__internal_9a5c9b0f0aaa337cd00fabda93cfa8cfbcc7867785d1f36f7e0af0fa19437466->enter($__internal_9a5c9b0f0aaa337cd00fabda93cfa8cfbcc7867785d1f36f7e0af0fa19437466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

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
        
        $__internal_9a5c9b0f0aaa337cd00fabda93cfa8cfbcc7867785d1f36f7e0af0fa19437466->leave($__internal_9a5c9b0f0aaa337cd00fabda93cfa8cfbcc7867785d1f36f7e0af0fa19437466_prof);

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
