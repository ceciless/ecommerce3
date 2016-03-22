<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_01ecc9914c86678962b5b0ebcab049243c6f63f66cb78e722760402d8f36a615 extends Twig_Template
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
        $__internal_6437474b854914555e8f6513bc2ed5c8fc44efb9b8ae2b9b7a2fc740ab41bbfe = $this->env->getExtension("native_profiler");
        $__internal_6437474b854914555e8f6513bc2ed5c8fc44efb9b8ae2b9b7a2fc740ab41bbfe->enter($__internal_6437474b854914555e8f6513bc2ed5c8fc44efb9b8ae2b9b7a2fc740ab41bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6437474b854914555e8f6513bc2ed5c8fc44efb9b8ae2b9b7a2fc740ab41bbfe->leave($__internal_6437474b854914555e8f6513bc2ed5c8fc44efb9b8ae2b9b7a2fc740ab41bbfe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2f787e16ae00a15f39540814029f632f1a6320670146dfb7ab165b79760e80a = $this->env->getExtension("native_profiler");
        $__internal_e2f787e16ae00a15f39540814029f632f1a6320670146dfb7ab165b79760e80a->enter($__internal_e2f787e16ae00a15f39540814029f632f1a6320670146dfb7ab165b79760e80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e2f787e16ae00a15f39540814029f632f1a6320670146dfb7ab165b79760e80a->leave($__internal_e2f787e16ae00a15f39540814029f632f1a6320670146dfb7ab165b79760e80a_prof);

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
