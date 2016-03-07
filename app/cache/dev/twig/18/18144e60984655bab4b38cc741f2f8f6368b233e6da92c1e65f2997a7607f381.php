<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_84017305fbd27a0face019da8addb84e12ede89090ef158d63ea98eaa93c0332 extends Twig_Template
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
        $__internal_8956f6310eab1d1e4cfa23b3ba519ec81fcc53f54894a4d2860863278a8035ae = $this->env->getExtension("native_profiler");
        $__internal_8956f6310eab1d1e4cfa23b3ba519ec81fcc53f54894a4d2860863278a8035ae->enter($__internal_8956f6310eab1d1e4cfa23b3ba519ec81fcc53f54894a4d2860863278a8035ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8956f6310eab1d1e4cfa23b3ba519ec81fcc53f54894a4d2860863278a8035ae->leave($__internal_8956f6310eab1d1e4cfa23b3ba519ec81fcc53f54894a4d2860863278a8035ae_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ed65b4be6cc48396ae7937e376e013d93b8d2271568c4be5acd9083097ce8f9 = $this->env->getExtension("native_profiler");
        $__internal_6ed65b4be6cc48396ae7937e376e013d93b8d2271568c4be5acd9083097ce8f9->enter($__internal_6ed65b4be6cc48396ae7937e376e013d93b8d2271568c4be5acd9083097ce8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ed65b4be6cc48396ae7937e376e013d93b8d2271568c4be5acd9083097ce8f9->leave($__internal_6ed65b4be6cc48396ae7937e376e013d93b8d2271568c4be5acd9083097ce8f9_prof);

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
