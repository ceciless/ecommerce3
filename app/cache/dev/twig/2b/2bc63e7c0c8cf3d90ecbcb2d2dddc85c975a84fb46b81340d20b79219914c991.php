<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_497f3e9ebf0a84953e47d2c92ac13311aeaad822506eb09d8e11d9ab90b2cfea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_cdf490b89b057e5a230a73d9d02cfcd28e7341dbaa66adbbe5469f1a5286f590 = $this->env->getExtension("native_profiler");
        $__internal_cdf490b89b057e5a230a73d9d02cfcd28e7341dbaa66adbbe5469f1a5286f590->enter($__internal_cdf490b89b057e5a230a73d9d02cfcd28e7341dbaa66adbbe5469f1a5286f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf490b89b057e5a230a73d9d02cfcd28e7341dbaa66adbbe5469f1a5286f590->leave($__internal_cdf490b89b057e5a230a73d9d02cfcd28e7341dbaa66adbbe5469f1a5286f590_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9b2994e142ca24ff5ba0dc2319fe4c9298e9588644b881625c58c7dba4f45ed = $this->env->getExtension("native_profiler");
        $__internal_b9b2994e142ca24ff5ba0dc2319fe4c9298e9588644b881625c58c7dba4f45ed->enter($__internal_b9b2994e142ca24ff5ba0dc2319fe4c9298e9588644b881625c58c7dba4f45ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b9b2994e142ca24ff5ba0dc2319fe4c9298e9588644b881625c58c7dba4f45ed->leave($__internal_b9b2994e142ca24ff5ba0dc2319fe4c9298e9588644b881625c58c7dba4f45ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
