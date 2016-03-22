<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5303ef9cb539d70a341fcfdb572ba6453f865bfee109c4666077906572cfcc51 extends Twig_Template
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
        $__internal_bcb61c945d7e942a90487e06ac613803fbcca9ec9a9da4ffbeb00c8801781ad5 = $this->env->getExtension("native_profiler");
        $__internal_bcb61c945d7e942a90487e06ac613803fbcca9ec9a9da4ffbeb00c8801781ad5->enter($__internal_bcb61c945d7e942a90487e06ac613803fbcca9ec9a9da4ffbeb00c8801781ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb61c945d7e942a90487e06ac613803fbcca9ec9a9da4ffbeb00c8801781ad5->leave($__internal_bcb61c945d7e942a90487e06ac613803fbcca9ec9a9da4ffbeb00c8801781ad5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7a9c5144d95f871d1c8d6cba702472a1d176ca544fa336351c81bf0a675f623 = $this->env->getExtension("native_profiler");
        $__internal_e7a9c5144d95f871d1c8d6cba702472a1d176ca544fa336351c81bf0a675f623->enter($__internal_e7a9c5144d95f871d1c8d6cba702472a1d176ca544fa336351c81bf0a675f623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e7a9c5144d95f871d1c8d6cba702472a1d176ca544fa336351c81bf0a675f623->leave($__internal_e7a9c5144d95f871d1c8d6cba702472a1d176ca544fa336351c81bf0a675f623_prof);

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
