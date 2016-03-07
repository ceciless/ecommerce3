<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b99cfa1dc988d17b5600472ea5b18700a2265062b89a92a04d45873a53a229e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c4e3e3e728bbefc0582924c4b0f51d5ddae129027df19250e4a2b86aa0662d31 = $this->env->getExtension("native_profiler");
        $__internal_c4e3e3e728bbefc0582924c4b0f51d5ddae129027df19250e4a2b86aa0662d31->enter($__internal_c4e3e3e728bbefc0582924c4b0f51d5ddae129027df19250e4a2b86aa0662d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4e3e3e728bbefc0582924c4b0f51d5ddae129027df19250e4a2b86aa0662d31->leave($__internal_c4e3e3e728bbefc0582924c4b0f51d5ddae129027df19250e4a2b86aa0662d31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d1bc88eeb21caf54e079bd2aecc92449066a3fefaae19eec47203345b727643 = $this->env->getExtension("native_profiler");
        $__internal_7d1bc88eeb21caf54e079bd2aecc92449066a3fefaae19eec47203345b727643->enter($__internal_7d1bc88eeb21caf54e079bd2aecc92449066a3fefaae19eec47203345b727643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7d1bc88eeb21caf54e079bd2aecc92449066a3fefaae19eec47203345b727643->leave($__internal_7d1bc88eeb21caf54e079bd2aecc92449066a3fefaae19eec47203345b727643_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
