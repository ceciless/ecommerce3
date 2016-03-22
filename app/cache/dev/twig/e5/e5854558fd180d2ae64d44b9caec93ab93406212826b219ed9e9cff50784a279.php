<?php

/* EcommerceBundle:Default:publierVelos/layout/show.html.twig */
class __TwigTemplate_8fd9bbefbb2373f3c0a12e9106c1484dd336654fc00b6c9b6d178d8d3abac82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Default:publierVelos/layout/show.html.twig", 1);
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
        $__internal_dc960137d7c273857d8378139f6b34eb1d61dfae7993e7edd748c7ee59d74dc9 = $this->env->getExtension("native_profiler");
        $__internal_dc960137d7c273857d8378139f6b34eb1d61dfae7993e7edd748c7ee59d74dc9->enter($__internal_dc960137d7c273857d8378139f6b34eb1d61dfae7993e7edd748c7ee59d74dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:publierVelos/layout/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc960137d7c273857d8378139f6b34eb1d61dfae7993e7edd748c7ee59d74dc9->leave($__internal_dc960137d7c273857d8378139f6b34eb1d61dfae7993e7edd748c7ee59d74dc9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_00a69a6729283617c32f6451e95118ee9ad16ecd95cdd9aeee76f87071b5dd8a = $this->env->getExtension("native_profiler");
        $__internal_00a69a6729283617c32f6451e95118ee9ad16ecd95cdd9aeee76f87071b5dd8a->enter($__internal_00a69a6729283617c32f6451e95118ee9ad16ecd95cdd9aeee76f87071b5dd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Velos</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Velonom</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>";
        // line 31
        if ($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "disponible", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("publierVelos_index");
        echo "\">Retour à la liste</a>
        </li>
        <li>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publierVelos_edit", array("id" => $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "id", array()))), "html", null, true);
        echo "\">Modifier</a>
        </li>
        <li>
            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Suppimer\">
            ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_00a69a6729283617c32f6451e95118ee9ad16ecd95cdd9aeee76f87071b5dd8a->leave($__internal_00a69a6729283617c32f6451e95118ee9ad16ecd95cdd9aeee76f87071b5dd8a_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:publierVelos/layout/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  109 => 44,  103 => 41,  97 => 38,  83 => 31,  76 => 27,  69 => 23,  62 => 19,  55 => 15,  48 => 11,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Velos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ velo.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Velonom</th>*/
/*                 <td>{{ velo.velonom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ velo.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Position</th>*/
/*                 <td>{{ velo.position }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prix</th>*/
/*                 <td>{{ velo.prix }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Disponible</th>*/
/*                 <td>{% if velo.disponible %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('publierVelos_index') }}">Retour à la liste</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('publierVelos_edit', { 'id': velo.id }) }}">Modifier</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Suppimer">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
