<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_1c59813e639172fe71aee5ef8b3b94a8c3618c2702403d3b1aa8f14128bd75c4 extends Twig_Template
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
        $__internal_c75299922c857b63f074af813c9b8b5e1d22e71c96f208020fb6fd35eefadc1d = $this->env->getExtension("native_profiler");
        $__internal_c75299922c857b63f074af813c9b8b5e1d22e71c96f208020fb6fd35eefadc1d->enter($__internal_c75299922c857b63f074af813c9b8b5e1d22e71c96f208020fb6fd35eefadc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75299922c857b63f074af813c9b8b5e1d22e71c96f208020fb6fd35eefadc1d->leave($__internal_c75299922c857b63f074af813c9b8b5e1d22e71c96f208020fb6fd35eefadc1d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b07ee06daaceff122840dc43ce241aa84e5df86b038375c5e537976815b4c15 = $this->env->getExtension("native_profiler");
        $__internal_3b07ee06daaceff122840dc43ce241aa84e5df86b038375c5e537976815b4c15->enter($__internal_3b07ee06daaceff122840dc43ce241aa84e5df86b038375c5e537976815b4c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b07ee06daaceff122840dc43ce241aa84e5df86b038375c5e537976815b4c15->leave($__internal_3b07ee06daaceff122840dc43ce241aa84e5df86b038375c5e537976815b4c15_prof);

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
