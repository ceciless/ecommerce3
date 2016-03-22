<?php

/* EcommerceBundle:Default:publierVelos/layout/new.html.twig */
class __TwigTemplate_b0792eb5ca5cf40f2e715855134db9377d38a08335f615340e91f895628c4e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Default:publierVelos/layout/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bbf0f46a07377af628f02604077ab9afd916d45ab8ba5ab46945fbac5fb998f = $this->env->getExtension("native_profiler");
        $__internal_0bbf0f46a07377af628f02604077ab9afd916d45ab8ba5ab46945fbac5fb998f->enter($__internal_0bbf0f46a07377af628f02604077ab9afd916d45ab8ba5ab46945fbac5fb998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:publierVelos/layout/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bbf0f46a07377af628f02604077ab9afd916d45ab8ba5ab46945fbac5fb998f->leave($__internal_0bbf0f46a07377af628f02604077ab9afd916d45ab8ba5ab46945fbac5fb998f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe05bd221d20fda003d80dc506af09c635e6c4e0eefc6714122114945c44bc5b = $this->env->getExtension("native_profiler");
        $__internal_fe05bd221d20fda003d80dc506af09c635e6c4e0eefc6714122114945c44bc5b->enter($__internal_fe05bd221d20fda003d80dc506af09c635e6c4e0eefc6714122114945c44bc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter un velo</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Ajouter\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("publierVelos_index");
        echo "\">Retour à la liste</a>
        </li>
    </ul>
";
        
        $__internal_fe05bd221d20fda003d80dc506af09c635e6c4e0eefc6714122114945c44bc5b->leave($__internal_fe05bd221d20fda003d80dc506af09c635e6c4e0eefc6714122114945c44bc5b_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:publierVelos/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ajouter un velo</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Ajouter" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('publierVelos_index') }}">Retour à la liste</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
