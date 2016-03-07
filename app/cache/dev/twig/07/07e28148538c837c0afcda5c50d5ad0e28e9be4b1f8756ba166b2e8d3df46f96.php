<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_95d2ec578721aa90af5ddd8eab51dd0e8cf2cb58f3e9070008edd627bbf2033b extends Twig_Template
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
        $__internal_eb233d8a4862e40c6d072dc4ab47a0bbd5bdb4e9e63e6e3df2c07f3425985006 = $this->env->getExtension("native_profiler");
        $__internal_eb233d8a4862e40c6d072dc4ab47a0bbd5bdb4e9e63e6e3df2c07f3425985006->enter($__internal_eb233d8a4862e40c6d072dc4ab47a0bbd5bdb4e9e63e6e3df2c07f3425985006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb233d8a4862e40c6d072dc4ab47a0bbd5bdb4e9e63e6e3df2c07f3425985006->leave($__internal_eb233d8a4862e40c6d072dc4ab47a0bbd5bdb4e9e63e6e3df2c07f3425985006_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c77e7bb6ea54dde11862252f05afc650f56821ff0960052b35baf017007bb3e2 = $this->env->getExtension("native_profiler");
        $__internal_c77e7bb6ea54dde11862252f05afc650f56821ff0960052b35baf017007bb3e2->enter($__internal_c77e7bb6ea54dde11862252f05afc650f56821ff0960052b35baf017007bb3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c77e7bb6ea54dde11862252f05afc650f56821ff0960052b35baf017007bb3e2->leave($__internal_c77e7bb6ea54dde11862252f05afc650f56821ff0960052b35baf017007bb3e2_prof);

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
