<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_ba3a68f8b5d6dd0faf0dc3c2d5f82e4637b7630277305d676d43aaf0e6e1d575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 1);
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
        $__internal_70b5bcc61cf6db1aff3ca4a56f5dd99fc3adbf1f69b14a01cf7679d6faaa5b9f = $this->env->getExtension("native_profiler");
        $__internal_70b5bcc61cf6db1aff3ca4a56f5dd99fc3adbf1f69b14a01cf7679d6faaa5b9f->enter($__internal_70b5bcc61cf6db1aff3ca4a56f5dd99fc3adbf1f69b14a01cf7679d6faaa5b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b5bcc61cf6db1aff3ca4a56f5dd99fc3adbf1f69b14a01cf7679d6faaa5b9f->leave($__internal_70b5bcc61cf6db1aff3ca4a56f5dd99fc3adbf1f69b14a01cf7679d6faaa5b9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d316b7824be2c880adc16806d8bafd8adb73574462a36d2a7b7d8d7ce71d738a = $this->env->getExtension("native_profiler");
        $__internal_d316b7824be2c880adc16806d8bafd8adb73574462a36d2a7b7d8d7ce71d738a->enter($__internal_d316b7824be2c880adc16806d8bafd8adb73574462a36d2a7b7d8d7ce71d738a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 10)->display($context);
            // line 11
            echo "            ";
        } else {
            // line 12
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 12)->display($context);
            // line 13
            echo "            ";
        }
        // line 14
        echo "        </div>
        
        <div class=\"span9\">
            
            
            <h2>Valider mon reservation</h2>
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "reserver", array()), "velo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "reference", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "quantite", array()), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "prixHT", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, ($this->getAttribute($context["velo"], "prixHT", array()) * $this->getAttribute($context["velo"], "quantite", array())), "html", null, true);
            echo " €</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "reserver", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
                
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "reserver", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 47
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "reserver", array()), "prixTTC", array()), "html", null, true);
        echo " €</dd>
            </dl>
            


            
            <div class=\"clearfix\"></div>
            
            <form action=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validationreserver", array("id" => $this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "reserver", array()), "token", array()), "html", null, true);
        echo "\" />
                <input name=\"prix\" type=\"hidden\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "reserver", array()), "prixTTC", array()), "html", null, true);
        echo "\" />
                <input name=\"date\" type=\"hidden\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reserver"]) ? $context["reserver"] : $this->getContext($context, "reserver")), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
            </form>
            
            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
";
        
        $__internal_d316b7824be2c880adc16806d8bafd8adb73574462a36d2a7b7d8d7ce71d738a->leave($__internal_d316b7824be2c880adc16806d8bafd8adb73574462a36d2a7b7d8d7ce71d738a_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  163 => 61,  159 => 60,  155 => 59,  151 => 58,  140 => 50,  137 => 49,  126 => 47,  122 => 46,  117 => 44,  111 => 40,  102 => 37,  98 => 36,  93 => 34,  88 => 32,  85 => 31,  81 => 30,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*             {% else %}*/
/*                     {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}*/
/*             {% endif %}*/
/*         </div>*/
/*         */
/*         <div class="span9">*/
/*             */
/*             */
/*             <h2>Valider mon reservation</h2>*/
/*             <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Références</th>*/
/*                         <th>Quantité</th>*/
/*                         <th>Prix unitaire</th>*/
/*                         <th>Total HT</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for velo in reserver.reserver.velo %}*/
/*                     <tr>*/
/*                         <td>{{velo.reference }}</td>*/
/*                         <td>*/
/*                             {{velo.quantite }}*/
/*                         </td>*/
/*                         <td>{{ velo.prixHT }} €</td>*/
/*                         <td>{{velo.prixHT *velo.quantite }} €</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             */
/*             <dl class="dl-horizontal pull-right">*/
/*                 <dt>Total HT :</dt><dd>{{ reserver.reserver.prixHT }} €</dd>*/
/*                 */
/*                 {% for key, tva in reserver.reserver.tva %}*/
/*                     <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>*/
/*                 {% endfor %}*/
/* */
/*                 <dt>Total TTC :</dt><dd>{{ reserver.reserver.prixTTC }} €</dd>*/
/*             </dl>*/
/*             */
/* */
/* */
/*             */
/*             <div class="clearfix"></div>*/
/*             */
/*             <form action="{{ path('validationreserver', { 'id' : reserver.id }) }}" method="POST"/>*/
/*                 <input name="token" type="hidden" value="{{ reserver.reserver.token }}" />*/
/*                 <input name="prix" type="hidden" value="{{ reserver.reserver.prixTTC }}" />*/
/*                 <input name="date" type="hidden" value="{{ reserver.date|date('dmyhms') }}" />*/
/*                 <button type="submit" class="btn btn-success pull-right">Payer</button>*/
/*             </form>*/
/*             */
/*             <a href="{{ path('panier') }}" class="btn btn-primary">retour</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
