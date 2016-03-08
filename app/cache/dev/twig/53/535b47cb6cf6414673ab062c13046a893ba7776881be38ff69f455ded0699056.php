<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_d757a7280c22e190e77ea6d486c131d8d13aa23ba028101fd2adbc1f8d8f6763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:pages/layout/pages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18b459c6fb682911286363be62dacb01afb808b0eaa32c97579905b31008e333 = $this->env->getExtension("native_profiler");
        $__internal_18b459c6fb682911286363be62dacb01afb808b0eaa32c97579905b31008e333->enter($__internal_18b459c6fb682911286363be62dacb01afb808b0eaa32c97579905b31008e333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b459c6fb682911286363be62dacb01afb808b0eaa32c97579905b31008e333->leave($__internal_18b459c6fb682911286363be62dacb01afb808b0eaa32c97579905b31008e333_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_61a60b7372f758bf2080f580d98458059c92846b291704759a4be5ba429cd2c6 = $this->env->getExtension("native_profiler");
        $__internal_61a60b7372f758bf2080f580d98458059c92846b291704759a4be5ba429cd2c6->enter($__internal_61a60b7372f758bf2080f580d98458059c92846b291704759a4be5ba429cd2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
            <div class=\"span12\">
                <div class=\"row\">
                        ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_61a60b7372f758bf2080f580d98458059c92846b291704759a4be5ba429cd2c6->leave($__internal_61a60b7372f758bf2080f580d98458059c92846b291704759a4be5ba429cd2c6_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h1>{{ page.titre }}</h1>*/
/*             <div class="span12">*/
/*                 <div class="row">*/
/*                         {{ page.contenu|raw }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
