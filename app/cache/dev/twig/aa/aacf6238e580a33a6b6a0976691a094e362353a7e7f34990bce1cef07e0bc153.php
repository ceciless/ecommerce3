<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_79f0aa90296552463f73f835a4edffa34a24dcd0093704c6547f502f6359ef13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76dc6098a8a7ee8c3b81e207fbe19d547ffeb5fdb6b52bdac40e478d7ad27f8e = $this->env->getExtension("native_profiler");
        $__internal_76dc6098a8a7ee8c3b81e207fbe19d547ffeb5fdb6b52bdac40e478d7ad27f8e->enter($__internal_76dc6098a8a7ee8c3b81e207fbe19d547ffeb5fdb6b52bdac40e478d7ad27f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_76dc6098a8a7ee8c3b81e207fbe19d547ffeb5fdb6b52bdac40e478d7ad27f8e->leave($__internal_76dc6098a8a7ee8c3b81e207fbe19d547ffeb5fdb6b52bdac40e478d7ad27f8e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_580327f2b7c41a76e7c8cc957c7c9c8a59fbcbe1ea3faa75bf60c93cad5c43ff = $this->env->getExtension("native_profiler");
        $__internal_580327f2b7c41a76e7c8cc957c7c9c8a59fbcbe1ea3faa75bf60c93cad5c43ff->enter($__internal_580327f2b7c41a76e7c8cc957c7c9c8a59fbcbe1ea3faa75bf60c93cad5c43ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_580327f2b7c41a76e7c8cc957c7c9c8a59fbcbe1ea3faa75bf60c93cad5c43ff->leave($__internal_580327f2b7c41a76e7c8cc957c7c9c8a59fbcbe1ea3faa75bf60c93cad5c43ff_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7716c8c957ed18dbffcc9551fe82f0dd841ab29c2292852f691222d1aeff1787 = $this->env->getExtension("native_profiler");
        $__internal_7716c8c957ed18dbffcc9551fe82f0dd841ab29c2292852f691222d1aeff1787->enter($__internal_7716c8c957ed18dbffcc9551fe82f0dd841ab29c2292852f691222d1aeff1787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7716c8c957ed18dbffcc9551fe82f0dd841ab29c2292852f691222d1aeff1787->leave($__internal_7716c8c957ed18dbffcc9551fe82f0dd841ab29c2292852f691222d1aeff1787_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d619a290f29b57fb37e2109a7945562fb2ac4a7a5fe8dbf57148efbbc525372e = $this->env->getExtension("native_profiler");
        $__internal_d619a290f29b57fb37e2109a7945562fb2ac4a7a5fe8dbf57148efbbc525372e->enter($__internal_d619a290f29b57fb37e2109a7945562fb2ac4a7a5fe8dbf57148efbbc525372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d619a290f29b57fb37e2109a7945562fb2ac4a7a5fe8dbf57148efbbc525372e->leave($__internal_d619a290f29b57fb37e2109a7945562fb2ac4a7a5fe8dbf57148efbbc525372e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
