<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_6f3b8b68319d9719b7f324e71fbdef6bd5777ca34136f53725449740b5e54448 extends Twig_Template
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
        $__internal_3ef8c0d0f6209a31e2b0c8da63978528fb4e334419f3c557625bfa5217b29c03 = $this->env->getExtension("native_profiler");
        $__internal_3ef8c0d0f6209a31e2b0c8da63978528fb4e334419f3c557625bfa5217b29c03->enter($__internal_3ef8c0d0f6209a31e2b0c8da63978528fb4e334419f3c557625bfa5217b29c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

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
        
        $__internal_3ef8c0d0f6209a31e2b0c8da63978528fb4e334419f3c557625bfa5217b29c03->leave($__internal_3ef8c0d0f6209a31e2b0c8da63978528fb4e334419f3c557625bfa5217b29c03_prof);

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
