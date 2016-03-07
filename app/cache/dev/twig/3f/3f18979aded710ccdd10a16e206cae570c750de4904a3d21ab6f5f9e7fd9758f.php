<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_9162f577b9e5cc26b01a25aefd8b1a229f489dc62da6268cfe88567eb07f1ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_a351d76102dba87d1ee726242f832fb2a51f164cefd32ad18bbf6ee605913a5e = $this->env->getExtension("native_profiler");
        $__internal_a351d76102dba87d1ee726242f832fb2a51f164cefd32ad18bbf6ee605913a5e->enter($__internal_a351d76102dba87d1ee726242f832fb2a51f164cefd32ad18bbf6ee605913a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a351d76102dba87d1ee726242f832fb2a51f164cefd32ad18bbf6ee605913a5e->leave($__internal_a351d76102dba87d1ee726242f832fb2a51f164cefd32ad18bbf6ee605913a5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c7e7776884fdfc64dbe1815f118e08a4ad08901d819b10b266c368419d320ba = $this->env->getExtension("native_profiler");
        $__internal_3c7e7776884fdfc64dbe1815f118e08a4ad08901d819b10b266c368419d320ba->enter($__internal_3c7e7776884fdfc64dbe1815f118e08a4ad08901d819b10b266c368419d320ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3c7e7776884fdfc64dbe1815f118e08a4ad08901d819b10b266c368419d320ba->leave($__internal_3c7e7776884fdfc64dbe1815f118e08a4ad08901d819b10b266c368419d320ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
