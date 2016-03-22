<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6e0fd19abe4a037ff77cd4d202e80c7c7ca10e629c5c530aa101c3e384ebdec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfc86e951c9e14039f5a36ac4d6fc51c5fb50e5d5a3575b2d3b38ac68351764f = $this->env->getExtension("native_profiler");
        $__internal_cfc86e951c9e14039f5a36ac4d6fc51c5fb50e5d5a3575b2d3b38ac68351764f->enter($__internal_cfc86e951c9e14039f5a36ac4d6fc51c5fb50e5d5a3575b2d3b38ac68351764f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfc86e951c9e14039f5a36ac4d6fc51c5fb50e5d5a3575b2d3b38ac68351764f->leave($__internal_cfc86e951c9e14039f5a36ac4d6fc51c5fb50e5d5a3575b2d3b38ac68351764f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4481aa889a9c64ccdb936a7a42b30a1b579585e470d33bbbe3158b5f6190feb7 = $this->env->getExtension("native_profiler");
        $__internal_4481aa889a9c64ccdb936a7a42b30a1b579585e470d33bbbe3158b5f6190feb7->enter($__internal_4481aa889a9c64ccdb936a7a42b30a1b579585e470d33bbbe3158b5f6190feb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4481aa889a9c64ccdb936a7a42b30a1b579585e470d33bbbe3158b5f6190feb7->leave($__internal_4481aa889a9c64ccdb936a7a42b30a1b579585e470d33bbbe3158b5f6190feb7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
