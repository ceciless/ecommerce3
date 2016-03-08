<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ffaf844a1ecdaff435f0ff081d1c61e75a0725e2f31a1e68dac6a95db444d620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_963640e4ab6a6dd301e0fa7027643324377b1c9903580badd75f961328096409 = $this->env->getExtension("native_profiler");
        $__internal_963640e4ab6a6dd301e0fa7027643324377b1c9903580badd75f961328096409->enter($__internal_963640e4ab6a6dd301e0fa7027643324377b1c9903580badd75f961328096409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_963640e4ab6a6dd301e0fa7027643324377b1c9903580badd75f961328096409->leave($__internal_963640e4ab6a6dd301e0fa7027643324377b1c9903580badd75f961328096409_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7748abc4f3ce9141c0fb45a8f27fffc068bf380afb14c707c65a60036c092a4a = $this->env->getExtension("native_profiler");
        $__internal_7748abc4f3ce9141c0fb45a8f27fffc068bf380afb14c707c65a60036c092a4a->enter($__internal_7748abc4f3ce9141c0fb45a8f27fffc068bf380afb14c707c65a60036c092a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7748abc4f3ce9141c0fb45a8f27fffc068bf380afb14c707c65a60036c092a4a->leave($__internal_7748abc4f3ce9141c0fb45a8f27fffc068bf380afb14c707c65a60036c092a4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
