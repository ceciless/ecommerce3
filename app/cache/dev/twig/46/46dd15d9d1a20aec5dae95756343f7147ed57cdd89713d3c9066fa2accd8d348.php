<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5d7065e9c61159a032fe56e9af6e4a243e50ea377c9877a8481ddca155bb26cf extends Twig_Template
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
        $__internal_2ec92274732d82a29071c4a1ef5cf5354fe819ccb0e83cd14a5e7009e1caebff = $this->env->getExtension("native_profiler");
        $__internal_2ec92274732d82a29071c4a1ef5cf5354fe819ccb0e83cd14a5e7009e1caebff->enter($__internal_2ec92274732d82a29071c4a1ef5cf5354fe819ccb0e83cd14a5e7009e1caebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec92274732d82a29071c4a1ef5cf5354fe819ccb0e83cd14a5e7009e1caebff->leave($__internal_2ec92274732d82a29071c4a1ef5cf5354fe819ccb0e83cd14a5e7009e1caebff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a524a1ea1c9d5a461cc17e6ae0f342b20b11fbadc9c7584564bb2d398eab67c = $this->env->getExtension("native_profiler");
        $__internal_3a524a1ea1c9d5a461cc17e6ae0f342b20b11fbadc9c7584564bb2d398eab67c->enter($__internal_3a524a1ea1c9d5a461cc17e6ae0f342b20b11fbadc9c7584564bb2d398eab67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3a524a1ea1c9d5a461cc17e6ae0f342b20b11fbadc9c7584564bb2d398eab67c->leave($__internal_3a524a1ea1c9d5a461cc17e6ae0f342b20b11fbadc9c7584564bb2d398eab67c_prof);

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
