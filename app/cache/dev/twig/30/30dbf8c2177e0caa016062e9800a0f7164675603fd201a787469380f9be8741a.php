<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5ba8c45531d051e2d7871b6f23edb3afa9c926973e23a0bbffe4191995d7779c extends Twig_Template
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
        $__internal_aea1448841c02f5c7f1b9dc1a0eff638de8cf020723b80d06c780e02c3f67642 = $this->env->getExtension("native_profiler");
        $__internal_aea1448841c02f5c7f1b9dc1a0eff638de8cf020723b80d06c780e02c3f67642->enter($__internal_aea1448841c02f5c7f1b9dc1a0eff638de8cf020723b80d06c780e02c3f67642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea1448841c02f5c7f1b9dc1a0eff638de8cf020723b80d06c780e02c3f67642->leave($__internal_aea1448841c02f5c7f1b9dc1a0eff638de8cf020723b80d06c780e02c3f67642_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d8da092fe006e9ae04ea95f37a3fc1d5bf41ce4cf5850b52d911945dabc39ff = $this->env->getExtension("native_profiler");
        $__internal_1d8da092fe006e9ae04ea95f37a3fc1d5bf41ce4cf5850b52d911945dabc39ff->enter($__internal_1d8da092fe006e9ae04ea95f37a3fc1d5bf41ce4cf5850b52d911945dabc39ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d8da092fe006e9ae04ea95f37a3fc1d5bf41ce4cf5850b52d911945dabc39ff->leave($__internal_1d8da092fe006e9ae04ea95f37a3fc1d5bf41ce4cf5850b52d911945dabc39ff_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cae06d115bdd2bfeeb36997e3b2f2ee729962865ae12c9124ddc56239ce29fbf = $this->env->getExtension("native_profiler");
        $__internal_cae06d115bdd2bfeeb36997e3b2f2ee729962865ae12c9124ddc56239ce29fbf->enter($__internal_cae06d115bdd2bfeeb36997e3b2f2ee729962865ae12c9124ddc56239ce29fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "        ";
        
        $__internal_cae06d115bdd2bfeeb36997e3b2f2ee729962865ae12c9124ddc56239ce29fbf->leave($__internal_cae06d115bdd2bfeeb36997e3b2f2ee729962865ae12c9124ddc56239ce29fbf_prof);

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
