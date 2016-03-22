<?php

/* EcommerceBundle:Default:velos/layout/velos.html.twig */
class __TwigTemplate_0508a861edbaf2ee35b3824512bea8ec0677943de989e0a885361b9b5c1e270d extends Twig_Template
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
        $__internal_ded0dda337d1eee51b38d66521625863988e0dd3ce3cf5c19dbe6eb7032d3583 = $this->env->getExtension("native_profiler");
        $__internal_ded0dda337d1eee51b38d66521625863988e0dd3ce3cf5c19dbe6eb7032d3583->enter($__internal_ded0dda337d1eee51b38d66521625863988e0dd3ce3cf5c19dbe6eb7032d3583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:velos/layout/velos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded0dda337d1eee51b38d66521625863988e0dd3ce3cf5c19dbe6eb7032d3583->leave($__internal_ded0dda337d1eee51b38d66521625863988e0dd3ce3cf5c19dbe6eb7032d3583_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ece37384c7e44ed95fc901d6e372004f278a0d2fc673d3582321b1ad8561311 = $this->env->getExtension("native_profiler");
        $__internal_7ece37384c7e44ed95fc901d6e372004f278a0d2fc673d3582321b1ad8561311->enter($__internal_7ece37384c7e44ed95fc901d6e372004f278a0d2fc673d3582321b1ad8561311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 10)->display($context);
            // line 11
            echo "            ";
        } else {
            // line 12
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 12)->display($context);
            // line 13
            echo "            ";
        }
        // line 14
        echo "        </div>

        <div class=\"span9\">
        ";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos"))) != 0)) {
            // line 18
            echo "
            <ul class=\"thumbnails\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
            foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
                // line 21
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["velo"], "image", array()), "path", array()), "html", null, true);
                echo "\"  width=\"300\" height=\"200\">
                            <div class=\"caption\">
                                <h4>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
                echo "</h4>
                                <p>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["velo"], "prix", array()), $this->getAttribute($this->getAttribute($context["velo"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo "€/jour</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                ";
                // line 28
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["velo"], "id", array()), array(), "array", true, true)) {
                    // line 29
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
                    echo "\">Réserver </a>
                                ";
                }
                // line 31
                echo "                            </div>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['velo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>

         ";
            // line 49
            echo "    
                ";
        } else {
            // line 51
            echo "                    Aucun velos!
                    ";
        }
        // line 53
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_7ece37384c7e44ed95fc901d6e372004f278a0d2fc673d3582321b1ad8561311->leave($__internal_7ece37384c7e44ed95fc901d6e372004f278a0d2fc673d3582321b1ad8561311_prof);

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
        return array (  128 => 53,  124 => 51,  120 => 49,  116 => 35,  107 => 31,  101 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  82 => 23,  78 => 21,  74 => 20,  70 => 18,  68 => 17,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
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
/*                                 {% if panier[velo.id] is not defined %}*/
/*                                     <a class="btn btn-success" href="{{ path('ajouter', {'id' : velo.id }) }}">Réserver </a>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/* */
/*          {#   <div class="pagination">*/
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
/* */
/*          #}    */
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
