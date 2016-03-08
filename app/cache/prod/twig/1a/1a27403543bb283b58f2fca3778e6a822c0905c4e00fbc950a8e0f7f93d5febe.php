<?php

/* EcommerceBundle:Default:velos/layout/velos.html.twig */
class __TwigTemplate_f36e479396e1364c9227b33bc743fbc61ba3877a3181fec6105e705ee7a23b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 10
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 10)->display($context);
        // line 11
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 12
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 12)->display($context);
            // line 13
            echo "            ";
        } else {
            // line 14
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 14)->display($context);
            // line 15
            echo "            ";
        }
        // line 16
        echo "        </div>

        <div class=\"span9\">
        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["velos"]) ? $context["velos"] : null)) != 0)) {
            // line 20
            echo "
            <ul class=\"thumbnails\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
                // line 23
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["velo"], "image", array()), "path", array()), "html", null, true);
                echo "\"  width=\"300\" height=\"200\">
                            <div class=\"caption\">
                                <h4>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
                echo "</h4>
                                <p>";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["velo"], "prix", array()), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo "€/jour</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
                // line 30
                echo $this->env->getExtension('routing')->getPath("panier");
                echo "\">Réserver </a>
                            </div>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>
                ";
        } else {
            // line 49
            echo "                    Aucun velos!
                    ";
        }
        // line 51
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:velos/layout/velos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  117 => 49,  101 => 35,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  73 => 25,  69 => 23,  65 => 22,  61 => 20,  59 => 19,  54 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  37 => 10,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* */
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
/*         {% if velos|length != 0 %}*/
/* */
/*             <ul class="thumbnails">*/
/*                 {% for velo in velos %}*/
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ velo.image.path }}"  width="300" height="200">*/
/*                             <div class="caption">*/
/*                                 <h4>{{velo.velonom}}</h4>*/
/*                                 <p>{{velo.prix | tva(velo.tva.multiplicate) }}€/jour</p>*/
/*                                 <a class="btn btn-primary" href="{{ path('presentation',  { 'id' : velo.id }) }}">Plus d'infos</a>*/
/*                                 <a class="btn btn-success" href="{{ path('panier') }}">Réserver </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/* */
/*                 <div class="pagination">*/
/*                     <ul>*/
/*                         <li class="disabled"><span>Précédent</span></li>*/
/*                         <li class="disabled"><span>1</span></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Suivant</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 {% else %}*/
/*                     Aucun velos!*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
