<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6f6e7a9cc315824860d789810552a0b1e1e062825f9a3bbd1a9d8c012a5b4ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0588cf2de47e1b3fc956a99a9aa12031c4b3f81d436a75e7dc05a1c015033fa3 = $this->env->getExtension("native_profiler");
        $__internal_0588cf2de47e1b3fc956a99a9aa12031c4b3f81d436a75e7dc05a1c015033fa3->enter($__internal_0588cf2de47e1b3fc956a99a9aa12031c4b3f81d436a75e7dc05a1c015033fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0588cf2de47e1b3fc956a99a9aa12031c4b3f81d436a75e7dc05a1c015033fa3->leave($__internal_0588cf2de47e1b3fc956a99a9aa12031c4b3f81d436a75e7dc05a1c015033fa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f90e78bff74cdde33e9a1fdf0acbad21b8d894fecd298cb1e0e6ed05c271f0bd = $this->env->getExtension("native_profiler");
        $__internal_f90e78bff74cdde33e9a1fdf0acbad21b8d894fecd298cb1e0e6ed05c271f0bd->enter($__internal_f90e78bff74cdde33e9a1fdf0acbad21b8d894fecd298cb1e0e6ed05c271f0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f90e78bff74cdde33e9a1fdf0acbad21b8d894fecd298cb1e0e6ed05c271f0bd->leave($__internal_f90e78bff74cdde33e9a1fdf0acbad21b8d894fecd298cb1e0e6ed05c271f0bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
