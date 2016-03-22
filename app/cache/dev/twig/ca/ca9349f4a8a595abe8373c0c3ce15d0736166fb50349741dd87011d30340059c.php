<?php

/* EcommerceBundle:Default:publierVelos/layout/index.html.twig */
class __TwigTemplate_079e3f5f7e1afca2ef4d1a77a9ca65b9bbb242f707a6139354adfe454ac44e53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Default:publierVelos/layout/index.html.twig", 1);
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
        $__internal_5d3cdc650bfc1a18e7fbcf5e055b53280f4857455ee76bc935353f03fada3154 = $this->env->getExtension("native_profiler");
        $__internal_5d3cdc650bfc1a18e7fbcf5e055b53280f4857455ee76bc935353f03fada3154->enter($__internal_5d3cdc650bfc1a18e7fbcf5e055b53280f4857455ee76bc935353f03fada3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:publierVelos/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d3cdc650bfc1a18e7fbcf5e055b53280f4857455ee76bc935353f03fada3154->leave($__internal_5d3cdc650bfc1a18e7fbcf5e055b53280f4857455ee76bc935353f03fada3154_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_baabcbed433591483e9103c4f40da8826b363ba6d6616b3afd5364df50ace3bb = $this->env->getExtension("native_profiler");
        $__internal_baabcbed433591483e9103c4f40da8826b363ba6d6616b3afd5364df50ace3bb->enter($__internal_baabcbed433591483e9103c4f40da8826b363ba6d6616b3afd5364df50ace3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Velos liste</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Velonom</th>
                <th>Description</th>
                <th>Position</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publierVelos_show", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["velo"], "disponible", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publierVelos_show", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\">montrer</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publierVelos_edit", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("publierVelos_new");
        echo "\">Ajouter un nouveau velo</a>
        </li>
    </ul>
";
        
        $__internal_baabcbed433591483e9103c4f40da8826b363ba6d6616b3afd5364df50ace3bb->leave($__internal_baabcbed433591483e9103c4f40da8826b363ba6d6616b3afd5364df50ace3bb_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:publierVelos/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  115 => 39,  103 => 33,  97 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Velos liste</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Velonom</th>*/
/*                 <th>Description</th>*/
/*                 <th>Position</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Disponible</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for velo in velos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('publierVelos_show', { 'id': velo.id }) }}">{{ velo.id }}</a></td>*/
/*                 <td>{{ velo.velonom }}</td>*/
/*                 <td>{{ velo.description }}</td>*/
/*                 <td>{{ velo.position }}</td>*/
/*                 <td>{{ velo.prix }}</td>*/
/*                 <td>{% if velo.disponible %}Oui{% else %}Non{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('publierVelos_show', { 'id': velo.id }) }}">montrer</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('publierVelos_edit', { 'id': velo.id }) }}">modifier</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('publierVelos_new') }}">Ajouter un nouveau velo</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
