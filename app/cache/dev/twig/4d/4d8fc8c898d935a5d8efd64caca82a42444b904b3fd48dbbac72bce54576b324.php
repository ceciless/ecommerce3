<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_37fb9fbb6b0804af77f0982bd71ebc22d9a33cf4f68ed7f2cd4cb8c167d1df3b extends Twig_Template
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
        $__internal_5eea2013e6f32c6056baf35ee053ce468e4eab1dcbab764b5ec25f35307afd75 = $this->env->getExtension("native_profiler");
        $__internal_5eea2013e6f32c6056baf35ee053ce468e4eab1dcbab764b5ec25f35307afd75->enter($__internal_5eea2013e6f32c6056baf35ee053ce468e4eab1dcbab764b5ec25f35307afd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

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
        
        $__internal_5eea2013e6f32c6056baf35ee053ce468e4eab1dcbab764b5ec25f35307afd75->leave($__internal_5eea2013e6f32c6056baf35ee053ce468e4eab1dcbab764b5ec25f35307afd75_prof);

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
