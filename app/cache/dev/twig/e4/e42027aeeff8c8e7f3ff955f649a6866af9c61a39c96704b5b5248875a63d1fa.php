<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d7e9ee431eb508966044257aa91c0a20684cc865e30a46cf1a03b2ad77cac86c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_459df32a642bbc3b4c75ee02babf3a1b1362cc3c73dfcdf05bab3f88a0d816c8 = $this->env->getExtension("native_profiler");
        $__internal_459df32a642bbc3b4c75ee02babf3a1b1362cc3c73dfcdf05bab3f88a0d816c8->enter($__internal_459df32a642bbc3b4c75ee02babf3a1b1362cc3c73dfcdf05bab3f88a0d816c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459df32a642bbc3b4c75ee02babf3a1b1362cc3c73dfcdf05bab3f88a0d816c8->leave($__internal_459df32a642bbc3b4c75ee02babf3a1b1362cc3c73dfcdf05bab3f88a0d816c8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0f31ae125ff21a82784b8c4a83bb92694be108fc0a4474db53585041b57044a = $this->env->getExtension("native_profiler");
        $__internal_f0f31ae125ff21a82784b8c4a83bb92694be108fc0a4474db53585041b57044a->enter($__internal_f0f31ae125ff21a82784b8c4a83bb92694be108fc0a4474db53585041b57044a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 16
        echo "</div>>
";
        
        $__internal_f0f31ae125ff21a82784b8c4a83bb92694be108fc0a4474db53585041b57044a->leave($__internal_f0f31ae125ff21a82784b8c4a83bb92694be108fc0a4474db53585041b57044a_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_468955bb9f4119fb7173ffe20bb975478a217565610ea13c8618635bb525a45e = $this->env->getExtension("native_profiler");
        $__internal_468955bb9f4119fb7173ffe20bb975478a217565610ea13c8618635bb525a45e->enter($__internal_468955bb9f4119fb7173ffe20bb975478a217565610ea13c8618635bb525a45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "        ";
        
        $__internal_468955bb9f4119fb7173ffe20bb975478a217565610ea13c8618635bb525a45e->leave($__internal_468955bb9f4119fb7173ffe20bb975478a217565610ea13c8618635bb525a45e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 15,  86 => 14,  78 => 16,  76 => 14,  73 => 13,  67 => 12,  58 => 9,  53 => 8,  48 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/* </div>>*/
/* {% endblock %}*/
/* */
