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
        $__internal_afc78f363f450c8ccf60b548829839f5fe7d3f5ab57e4af6fa6c7336b3aae908 = $this->env->getExtension("native_profiler");
        $__internal_afc78f363f450c8ccf60b548829839f5fe7d3f5ab57e4af6fa6c7336b3aae908->enter($__internal_afc78f363f450c8ccf60b548829839f5fe7d3f5ab57e4af6fa6c7336b3aae908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 4
        $context["totalHT"] = 0;
        // line 5
        $context["totalTTC"] = 0;
        // line 6
        $context["refTva"] = array();
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 8
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc78f363f450c8ccf60b548829839f5fe7d3f5ab57e4af6fa6c7336b3aae908->leave($__internal_afc78f363f450c8ccf60b548829839f5fe7d3f5ab57e4af6fa6c7336b3aae908_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f6431abbd77e8c638be569379cd623be1ec662e3610efd0bfaf625d0b9e56d = $this->env->getExtension("native_profiler");
        $__internal_d2f6431abbd77e8c638be569379cd623be1ec662e3610efd0bfaf625d0b9e56d->enter($__internal_d2f6431abbd77e8c638be569379cd623be1ec662e3610efd0bfaf625d0b9e56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 16
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 16)->display($context);
        // line 17
        echo "            </div>

            <div class=\"span9\">
                <h2>Votre parnier</h2>
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 32
            echo "                        <tr>
                            <form action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
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
            // line 40
            echo "                                    </select>jours 
                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "prix", array()), "html", null, true);
            echo " €/jour</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), "html", null, true);
            echo "€</td>
                            </form>
                        </tr>
                        ";
            // line 47
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")));
            // line 48
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())));
            // line 49
            echo "                        ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())))));
            // line 50
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo "€</dd>

                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 60
            echo "                        <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt>
                        <dd>";
            // line 61
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo "€</dd>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "

                    <dt>Total:</dt>
                    <dd>";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo "€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"livraison.php\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>

";
        
        $__internal_d2f6431abbd77e8c638be569379cd623be1ec662e3610efd0bfaf625d0b9e56d->leave($__internal_d2f6431abbd77e8c638be569379cd623be1ec662e3610efd0bfaf625d0b9e56d_prof);

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
        return array (  184 => 66,  179 => 63,  171 => 61,  166 => 60,  162 => 59,  157 => 57,  149 => 51,  143 => 50,  140 => 49,  137 => 48,  135 => 47,  129 => 44,  125 => 43,  120 => 41,  117 => 40,  102 => 38,  98 => 37,  92 => 34,  88 => 33,  85 => 32,  81 => 31,  65 => 17,  63 => 16,  57 => 12,  51 => 11,  44 => 2,  38 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% set totalHT = 0 %}*/
/* {% set totalTTC = 0 %}*/
/* {% set refTva = {} %}*/
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
/*             </div>*/
/* */
/*             <div class="span9">*/
/*                 <h2>Votre parnier</h2>*/
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
/*                         {% for velo in velos %}*/
/*                         <tr>*/
/*                             <form action="{{ path('ajouter', {'id':velo.id})}}" method="get">*/
/*                                 <td>{{velo.velonom}}</td>*/
/*                                 <td>*/
/*                                     <select name="qte" class="span1" onChange="this.form.submit()">*/
/*                                             {% for i in 1..15 %}*/
/*                                                     <option value="{{ i }}" {% if i == panier[velo.id] %} selected="selected" {% endif %}> {{ i }} </option>*/
/*                                             {% endfor %}*/
/*                                     </select>jours */
/*                                     <a href="{{ path('supprimer', {'id':velo.id})}}"><i class="icon-trash"></i></a>*/
/*                                 </td>*/
/*                                 <td>{{ velo.prix }} €/jour</td>*/
/*                                 <td>{{ velo.prix * panier[velo.id] }}€</td>*/
/*                             </form>*/
/*                         </tr>*/
/*                         {% set totalHT = totalHT + ( velo.prix * panier[velo.id]) %}*/
/*                         {% set totalTTC = totalTTC + ( velo.prix * panier[velo.id]) | tva( velo.tva.multiplicate) %}*/
/*                         {% set refTva = refTva | merge({ ('%' ~ velo.tva.valeur) : refTva['%' ~ velo.tva.valeur] + ( velo.prix * panier[velo.id]) | montantTva( velo.tva.multiplicate) })  %}*/
/*                         {% endfor%}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>{{ totalHT }}€</dd>*/
/* */
/*                     {% for key, tva in refTva %}*/
/*                         <dt>TVA {{ key }} :</dt>*/
/*                         <dd>{{ tva }}€</dd>*/
/*                     {% endfor %}*/
/* */
/* */
/*                     <dt>Total:</dt>*/
/*                     <dd>{{ totalTTC }}€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="livraison.php" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 <a href="index.php" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
