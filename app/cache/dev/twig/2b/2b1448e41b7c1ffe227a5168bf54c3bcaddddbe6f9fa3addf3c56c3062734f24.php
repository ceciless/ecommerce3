<?php

/* EcommerceBundle:Default:velos/layout/velos.html.twig */
class __TwigTemplate_358bc4e9b089b770edebeecc4b314e9cb89f16aee9374cb250b94cede72597e7 extends Twig_Template
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
        $__internal_decb7a1bcf0c691a43d301ccf42f05a53e838aebe08e7592f96e30cd6ebb447f = $this->env->getExtension("native_profiler");
        $__internal_decb7a1bcf0c691a43d301ccf42f05a53e838aebe08e7592f96e30cd6ebb447f->enter($__internal_decb7a1bcf0c691a43d301ccf42f05a53e838aebe08e7592f96e30cd6ebb447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:velos/layout/velos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_decb7a1bcf0c691a43d301ccf42f05a53e838aebe08e7592f96e30cd6ebb447f->leave($__internal_decb7a1bcf0c691a43d301ccf42f05a53e838aebe08e7592f96e30cd6ebb447f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a965e5d4168553fa176ed31095e781f7c6182fe0c29eb128e1fc9dfd3fe525f = $this->env->getExtension("native_profiler");
        $__internal_0a965e5d4168553fa176ed31095e781f7c6182fe0c29eb128e1fc9dfd3fe525f->enter($__internal_0a965e5d4168553fa176ed31095e781f7c6182fe0c29eb128e1fc9dfd3fe525f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:velos/layout/velos.html.twig", 9)->display($context);
        echo "   
        </div>

        <div class=\"span9\">
        ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos"))) != 0)) {
            // line 14
            echo "
            <ul class=\"thumbnails\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["velos"]) ? $context["velos"] : $this->getContext($context, "velos")));
            foreach ($context['_seq'] as $context["_key"] => $context["velo"]) {
                // line 17
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["velo"], "image", array()), "path", array()), "html", null, true);
                echo "\"  width=\"300\" height=\"200\">
                            <div class=\"caption\">
                                <h4>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "velonom", array()), "html", null, true);
                echo "</h4>
                                <p>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["velo"], "prix", array()), "html", null, true);
                echo "€/jour</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["velo"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
                // line 24
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
            // line 29
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
            // line 43
            echo "                    Aucun velos!
                    ";
        }
        // line 45
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_0a965e5d4168553fa176ed31095e781f7c6182fe0c29eb128e1fc9dfd3fe525f->leave($__internal_0a965e5d4168553fa176ed31095e781f7c6182fe0c29eb128e1fc9dfd3fe525f_prof);

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
        return array (  118 => 45,  114 => 43,  98 => 29,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  70 => 19,  66 => 17,  62 => 16,  58 => 14,  56 => 13,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*             {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}   */
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
/*                                 <p>{{velo.prix}}€/jour</p>*/
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
