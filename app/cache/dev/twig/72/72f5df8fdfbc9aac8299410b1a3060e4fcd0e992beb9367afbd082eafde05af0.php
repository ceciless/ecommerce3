<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_eeec9842ac9fd05a314244f5e988f8893cc160f49ae0994195e5c99038769f92 extends Twig_Template
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
        $__internal_c4ea30346423bb20325144e6d92b2d058b4a8d712475cc973be4fd76cb50aeb2 = $this->env->getExtension("native_profiler");
        $__internal_c4ea30346423bb20325144e6d92b2d058b4a8d712475cc973be4fd76cb50aeb2->enter($__internal_c4ea30346423bb20325144e6d92b2d058b4a8d712475cc973be4fd76cb50aeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 4
        $context["totalHT"] = 0;
        // line 5
        $context["totalTTC"] = 0;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ea30346423bb20325144e6d92b2d058b4a8d712475cc973be4fd76cb50aeb2->leave($__internal_c4ea30346423bb20325144e6d92b2d058b4a8d712475cc973be4fd76cb50aeb2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b498a25fa8ed62973e6809a1b742ac0964ba96c25d56ceeae35946f3fb4dd99 = $this->env->getExtension("native_profiler");
        $__internal_8b498a25fa8ed62973e6809a1b742ac0964ba96c25d56ceeae35946f3fb4dd99->enter($__internal_8b498a25fa8ed62973e6809a1b742ac0964ba96c25d56ceeae35946f3fb4dd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 12
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 12)->display($context);
        // line 13
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 28
            echo "                        <tr>
                            <form action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
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
            // line 36
            echo "                                    </select>jours 
                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "prix", array()), "html", null, true);
            echo " €/jour</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), "html", null, true);
            echo "€</td>
                            </form>
                        </tr>
                        ";
            // line 43
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")));
            // line 44
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["velo"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["velo"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())));
            // line 45
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo "€</dd>

                    <dt>TVA :</dt>
                    <dd>";
        // line 55
        echo twig_escape_filter($this->env, ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC"))), "html", null, true);
        echo "</dd>

                    <dt>Total:</dt>
                    <dd>";
        // line 58
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
        
        $__internal_8b498a25fa8ed62973e6809a1b742ac0964ba96c25d56ceeae35946f3fb4dd99->leave($__internal_8b498a25fa8ed62973e6809a1b742ac0964ba96c25d56ceeae35946f3fb4dd99_prof);

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
        return array (  154 => 58,  148 => 55,  142 => 52,  134 => 46,  128 => 45,  125 => 44,  123 => 43,  117 => 40,  113 => 39,  108 => 37,  105 => 36,  90 => 34,  86 => 33,  80 => 30,  76 => 29,  73 => 28,  69 => 27,  53 => 13,  51 => 12,  45 => 8,  39 => 7,  32 => 2,  30 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% set totalHT = 0 %}*/
/* {% set totalTTC = 0 %}*/
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
/*                         {% endfor%}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>{{ totalHT }}€</dd>*/
/* */
/*                     <dt>TVA :</dt>*/
/*                     <dd>{{ totalHT + totalTTC }}</dd>*/
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
