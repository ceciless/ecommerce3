<?php

/* EcommerceBundle:Default:publierVelos/layout/edit.html.twig */
class __TwigTemplate_14322e0d277595dcc091a86667283913992fb89d28cb5cf0f801f0012913d221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Default:publierVelos/layout/edit.html.twig", 1);
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
        $__internal_4d7cef79c9770991844c8207e75852f60911dc1a3227d806aea90ffd74b7856f = $this->env->getExtension("native_profiler");
        $__internal_4d7cef79c9770991844c8207e75852f60911dc1a3227d806aea90ffd74b7856f->enter($__internal_4d7cef79c9770991844c8207e75852f60911dc1a3227d806aea90ffd74b7856f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:publierVelos/layout/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7cef79c9770991844c8207e75852f60911dc1a3227d806aea90ffd74b7856f->leave($__internal_4d7cef79c9770991844c8207e75852f60911dc1a3227d806aea90ffd74b7856f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d24709cca9fcf8a0ec0d36e2d176b948e12dca5f856d3d479a767ac677c90dcf = $this->env->getExtension("native_profiler");
        $__internal_d24709cca9fcf8a0ec0d36e2d176b948e12dca5f856d3d479a767ac677c90dcf->enter($__internal_d24709cca9fcf8a0ec0d36e2d176b948e12dca5f856d3d479a767ac677c90dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>modifier mes velos</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("publierVelos_index");
        echo "\">Retour à la liste</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d24709cca9fcf8a0ec0d36e2d176b948e12dca5f856d3d479a767ac677c90dcf->leave($__internal_d24709cca9fcf8a0ec0d36e2d176b948e12dca5f856d3d479a767ac677c90dcf_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:publierVelos/layout/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>modifier mes velos</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('publierVelos_index') }}">Retour à la liste</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
