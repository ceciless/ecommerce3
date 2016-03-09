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
        $__internal_64934652ec0738db3f711531bcdec88aa1066576486b751d80e293a41fbf67d1 = $this->env->getExtension("native_profiler");
        $__internal_64934652ec0738db3f711531bcdec88aa1066576486b751d80e293a41fbf67d1->enter($__internal_64934652ec0738db3f711531bcdec88aa1066576486b751d80e293a41fbf67d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

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
        
        $__internal_64934652ec0738db3f711531bcdec88aa1066576486b751d80e293a41fbf67d1->leave($__internal_64934652ec0738db3f711531bcdec88aa1066576486b751d80e293a41fbf67d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aef2e15d0b7949eabed41de441ee766e95635855d82d55d8263b84f76b17810f = $this->env->getExtension("native_profiler");
        $__internal_aef2e15d0b7949eabed41de441ee766e95635855d82d55d8263b84f76b17810f->enter($__internal_aef2e15d0b7949eabed41de441ee766e95635855d82d55d8263b84f76b17810f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 38
        if ((twig_length_filter($this->env, (isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos"))) == 0)) {
            // line 39
            echo "                            <tr>
                                <td colspan=\"4\"><center>Aucun velos choisi </center></td>
                            </tr>
                        ";
        }
        // line 43
        echo "
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 45
            echo "                        <tr>
                            <form action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
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
            // line 53
            echo "                                    </select>jours 
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "prix", array()), "html", null, true);
            echo " €/jour</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), "html", null, true);
            echo "€</td>
                            </form>
                        </tr>
                        ";
            // line 60
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")));
            // line 61
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())));
            // line 62
            echo "                        ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())))));
            // line 63
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tbody>
                    </table>
                </form>
                ";
        // line 67
        if ((twig_length_filter($this->env, (isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos"))) != 0)) {
            // line 68
            echo "                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo "€</dd>

                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 73
                echo "                        <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt>
                        <dd>";
                // line 74
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo "€</dd>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
                    <dt>Total:</dt>
                    <dd>";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo "€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"livraison.php\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                ";
        }
        // line 83
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("velos");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>

";
        
        $__internal_aef2e15d0b7949eabed41de441ee766e95635855d82d55d8263b84f76b17810f->leave($__internal_aef2e15d0b7949eabed41de441ee766e95635855d82d55d8263b84f76b17810f_prof);

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
        return array (  225 => 83,  217 => 78,  213 => 76,  205 => 74,  200 => 73,  196 => 72,  191 => 70,  187 => 68,  185 => 67,  180 => 64,  174 => 63,  171 => 62,  168 => 61,  166 => 60,  160 => 57,  156 => 56,  151 => 54,  148 => 53,  133 => 51,  129 => 50,  123 => 47,  119 => 46,  116 => 45,  112 => 44,  109 => 43,  103 => 39,  101 => 38,  87 => 26,  78 => 23,  75 => 22,  71 => 21,  65 => 17,  63 => 16,  57 => 12,  51 => 11,  44 => 2,  38 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  11 => 2,);
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
/*                 <a href="livraison.php" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('velos') }}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
