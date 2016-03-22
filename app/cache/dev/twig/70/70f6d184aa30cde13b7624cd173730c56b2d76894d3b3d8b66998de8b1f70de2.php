<?php

/* EcommerceBundle:Default:velos/layout/presentation.html.twig */
class __TwigTemplate_5c32a5650f360b6b7382f387972c6266b5f90217816c3fc20505083200529b2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 2);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cb90d8367bba369b6dbb7aecbd8e0ffd1285dbffa1b1431dd8cabc627448bee = $this->env->getExtension("native_profiler");
        $__internal_9cb90d8367bba369b6dbb7aecbd8e0ffd1285dbffa1b1431dd8cabc627448bee->enter($__internal_9cb90d8367bba369b6dbb7aecbd8e0ffd1285dbffa1b1431dd8cabc627448bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:velos/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb90d8367bba369b6dbb7aecbd8e0ffd1285dbffa1b1431dd8cabc627448bee->leave($__internal_9cb90d8367bba369b6dbb7aecbd8e0ffd1285dbffa1b1431dd8cabc627448bee_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_0a36788c905ace06f3e8ae941c6fe1495c1e41ca1c3afd5e75151825e084cec4 = $this->env->getExtension("native_profiler");
        $__internal_0a36788c905ace06f3e8ae941c6fe1495c1e41ca1c3afd5e75151825e084cec4->enter($__internal_0a36788c905ace06f3e8ae941c6fe1495c1e41ca1c3afd5e75151825e084cec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        
        $__internal_0a36788c905ace06f3e8ae941c6fe1495c1e41ca1c3afd5e75151825e084cec4->leave($__internal_0a36788c905ace06f3e8ae941c6fe1495c1e41ca1c3afd5e75151825e084cec4_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_2ea70aaa72da006649315c24bb2da10f947d226b1512cbb81e02660b966c0be2 = $this->env->getExtension("native_profiler");
        $__internal_2ea70aaa72da006649315c24bb2da10f947d226b1512cbb81e02660b966c0be2->enter($__internal_2ea70aaa72da006649315c24bb2da10f947d226b1512cbb81e02660b966c0be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        
        $__internal_2ea70aaa72da006649315c24bb2da10f947d226b1512cbb81e02660b966c0be2->leave($__internal_2ea70aaa72da006649315c24bb2da10f947d226b1512cbb81e02660b966c0be2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_38f8ee853f576db4d8a9f6018ac1ce554907351064fb90d1b4f12acb7400a605 = $this->env->getExtension("native_profiler");
        $__internal_38f8ee853f576db4d8a9f6018ac1ce554907351064fb90d1b4f12acb7400a605->enter($__internal_38f8ee853f576db4d8a9f6018ac1ce554907351064fb90d1b4f12acb7400a605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 10
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 10)->display($context);
        // line 11
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 12)->display($context);
            // line 13
            echo "            ";
        } else {
            // line 14
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 14)->display($context);
            // line 15
            echo "            ";
        }
        // line 16
        echo "        </div>

        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span5\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "image", array()), "path", array()), "html", null, true);
        echo "\"  width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        echo "</h4>
                    <h5>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "categorie", array()), "catenom", array()), "html", null, true);
        echo "</h5>
                    <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "position", array()), "html", null, true);
        echo "</p>
                    <h4>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo "€/jour</h4>
                    ";
        // line 30
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "id", array()), array(), "array", true, true)) {
            // line 31
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "id", array()))), "html", null, true);
            echo "\" method= \"get\">
                            <select name=\"qte\" class=\"span1\">
                                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            </select>
                            <td>jours</td>
                            <div>
                                <button class=\"btn btn-primary\">Réserver</button>
                            </div>
                        </form>
                    ";
        } else {
            // line 43
            echo "                         <div>
                            <a href= \" \" class=\"btn btn-primary\">Vous avez déja choisi ce vélo.</a>
                         </div>
                    ";
        }
        // line 47
        echo "
                </div>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_38f8ee853f576db4d8a9f6018ac1ce554907351064fb90d1b4f12acb7400a605->leave($__internal_38f8ee853f576db4d8a9f6018ac1ce554907351064fb90d1b4f12acb7400a605_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:velos/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  155 => 43,  146 => 36,  135 => 34,  131 => 33,  125 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  96 => 21,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  72 => 10,  66 => 6,  60 => 5,  48 => 4,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block titre %}{{ velo.velonom }}{% endblock %}*/
/* {% block description %}{{ velo.description }}{% endblock %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*             {% else %}*/
/*                     {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="span9">*/
/*             <div class="row">*/
/*                 <div class="span5">*/
/*                     <img src="{{ velo.image.path }}"  width="470" height="310">*/
/*                 </div>*/
/* */
/*                 <div class="span4">*/
/*                     <h4>{{ velo.velonom }}</h4>*/
/*                     <h5>{{ velo.categorie.catenom }}</h5>*/
/*                     <p>{{ velo.description }}</p>*/
/*                     <p>{{ velo.position }}</p>*/
/*                     <h4>{{ velo.prix | tva(velo.tva.multiplicate) }}€/jour</h4>*/
/*                     {% if panier[velo.id] is not defined %}*/
/*                         <form action="{{ path('ajouter', { 'id': velo.id })}}" method= "get">*/
/*                             <select name="qte" class="span1">*/
/*                                     {% for i in 1..15%}*/
/*                                         <option value="{{ i }}">{{ i }}</option>*/
/*                                     {% endfor %}*/
/*                             </select>*/
/*                             <td>jours</td>*/
/*                             <div>*/
/*                                 <button class="btn btn-primary">Réserver</button>*/
/*                             </div>*/
/*                         </form>*/
/*                     {% else %}*/
/*                          <div>*/
/*                             <a href= " " class="btn btn-primary">Vous avez déja choisi ce vélo.</a>*/
/*                          </div>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
