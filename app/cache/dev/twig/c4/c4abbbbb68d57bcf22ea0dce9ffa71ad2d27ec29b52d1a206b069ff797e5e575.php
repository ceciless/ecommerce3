<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_d5caf07bcf155c1527b6e25bd74fbc312368c762617b93c413eb2a5e26431518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8aaf0f89c4b1a184d3a917173c89fa1aef7300b5bfe61b1ad3b05f0630e12db = $this->env->getExtension("native_profiler");
        $__internal_b8aaf0f89c4b1a184d3a917173c89fa1aef7300b5bfe61b1ad3b05f0630e12db->enter($__internal_b8aaf0f89c4b1a184d3a917173c89fa1aef7300b5bfe61b1ad3b05f0630e12db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 4
        $context["totalHT"] = 0;
        // line 5
        $context["totalTTC"] = 0;
        // line 6
        $context["refTva"] = array();
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 9
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8aaf0f89c4b1a184d3a917173c89fa1aef7300b5bfe61b1ad3b05f0630e12db->leave($__internal_b8aaf0f89c4b1a184d3a917173c89fa1aef7300b5bfe61b1ad3b05f0630e12db_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e2a0986589974eb3a33500c459f8ae2fd0b3e249354e035c4ae77c7347c965d = $this->env->getExtension("native_profiler");
        $__internal_3e2a0986589974eb3a33500c459f8ae2fd0b3e249354e035c4ae77c7347c965d->enter($__internal_3e2a0986589974eb3a33500c459f8ae2fd0b3e249354e035c4ae77c7347c965d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 17
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 17)->display($context);
        // line 18
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "                        ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 19)->display($context);
            // line 20
            echo "                ";
        } else {
            // line 21
            echo "                        ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 21)->display($context);
            // line 22
            echo "                ";
        }
        // line 23
        echo "            </div>

            <div class=\"span9\">

                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                <h2>Votre panier</h2>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 44
        if ((twig_length_filter($this->env, (isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos"))) == 0)) {
            // line 45
            echo "                            <tr>
                                <td colspan=\"4\"><center>Aucun velos choisi </center></td>
                            </tr>
                        ";
        }
        // line 49
        echo "
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 51
            echo "                        <tr>
                            <form action=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 57
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                    </select> jours 
                                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "prix", array()), "html", null, true);
            echo " €/jour</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), "html", null, true);
            echo "€</td>
                            </form>
                        </tr>
                        ";
            // line 66
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")));
            // line 67
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())));
            // line 68
            echo "                        ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())))));
            // line 69
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </tbody>
                    </table>
                </form>
                ";
        // line 73
        if ((twig_length_filter($this->env, (isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos"))) != 0)) {
            // line 74
            echo "                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo "€</dd>

                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 79
                echo "                        <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt>
                        <dd>";
                // line 80
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo "€</dd>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
                    <dt>Total:</dt>
                    <dd>";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo "€</dd>
                </dl>
                <div class=\"clearfix\"></div>
               <a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("validation");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a> 
                ";
        }
        // line 89
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("velos");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>

";
        
        $__internal_3e2a0986589974eb3a33500c459f8ae2fd0b3e249354e035c4ae77c7347c965d->leave($__internal_3e2a0986589974eb3a33500c459f8ae2fd0b3e249354e035c4ae77c7347c965d_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 89,  238 => 87,  232 => 84,  228 => 82,  220 => 80,  215 => 79,  211 => 78,  206 => 76,  202 => 74,  200 => 73,  195 => 70,  189 => 69,  186 => 68,  183 => 67,  181 => 66,  175 => 63,  171 => 62,  166 => 60,  163 => 59,  148 => 57,  144 => 56,  138 => 53,  134 => 52,  131 => 51,  127 => 50,  124 => 49,  118 => 45,  116 => 44,  102 => 32,  93 => 29,  90 => 28,  86 => 27,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  57 => 13,  51 => 12,  44 => 2,  38 => 9,  34 => 8,  32 => 6,  30 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% set totalHT = 0 %}*/
/* {% set totalTTC = 0 %}*/
/* {% set refTva = {} %}*/
/* */
/* {% for velo in velos %}*/
/*         {% set refTva = refTva | merge({ ('%' ~ velo.tva.valeur) : 0}) %}*/
/* {% endfor %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*                 {% else %}*/
/*                         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             <div class="span9">*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                     <div class="alert alert-success">*/
/*                         {{ flashMessage}}*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 <h2>Votre panier</h2>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Références</th>*/
/*                                 <th>Quantité</th>*/
/*                                 <th>Prix unitaire</th>*/
/*                                 <th>Total HT</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% if velos |length == 0 %}*/
/*                             <tr>*/
/*                                 <td colspan="4"><center>Aucun velos choisi </center></td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/* */
/*                         {% for velo in velos %}*/
/*                         <tr>*/
/*                             <form action="{{ path('ajouter', {'id':velo.id})}}" method="get">*/
/*                                 <td>{{velo.velonom}}</td>*/
/*                                 <td>*/
/*                                     <select name="qte" class="span1" onChange="this.form.submit()">*/
/*                                             {% for i in 1..15 %}*/
/*                                                     <option value="{{ i }}" {% if i == panier[velo.id] %} selected="selected" {% endif %}> {{ i }} </option>*/
/*                                             {% endfor %}*/
/*                                     </select> jours */
/*                                     <a href="{{ path('supprimer', {'id':velo.id})}}"><i class="icon-trash"></i></a>*/
/*                                 </td>*/
/*                                 <td>{{ velo.prix }} €/jour</td>*/
/*                                 <td>{{ velo.prix * panier[velo.id] }}€</td>*/
/*                             </form>*/
/*                         </tr>*/
/*                         {% set totalHT = totalHT + ( velo.prix * panier[velo.id]) %}*/
/*                         {% set totalTTC = totalTTC + ( velo.prix * panier[velo.id]) | tva( velo.tva.multiplicate) %}*/
/*                         {% set refTva = refTva | merge({ ('%' ~ velo.tva.valeur) : refTva['%' ~ velo.tva.valeur] + ( velo.prix * panier[velo.id]) | montantTva( velo.tva.multiplicate) })  %}*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/*                 {% if velos |length != 0 %}*/
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>{{ totalHT }}€</dd>*/
/* */
/*                     {% for key, tva in refTva %}*/
/*                         <dt>TVA {{ key }} :</dt>*/
/*                         <dd>{{ tva }}€</dd>*/
/*                     {% endfor %}*/
/* */
/*                     <dt>Total:</dt>*/
/*                     <dd>{{ totalTTC }}€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                <a href="{{ path('validation') }}" class="btn btn-success pull-right">Valider mon panier</a> */
/*                 {% endif %}*/
/*                 <a href="{{ path('velos') }}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
